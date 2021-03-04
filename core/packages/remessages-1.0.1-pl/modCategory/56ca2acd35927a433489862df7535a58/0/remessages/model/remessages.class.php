<?php

class reMessages
{
    /** @var modX $modx */
    /** @var pdoTools $pdoTools */
    /** @var array $tpls */
    public $modx;
    public $pdoTools;
    public $tpls = [];
    private $comet = [];


    /**
     * @param modX $modx
     * @param array $config
     */
    function __construct(modX &$modx, array $config = [])
    {
        $this->modx =& $modx;
        $corePath = MODX_CORE_PATH . 'components/remessages/';
        $assetsUrl = MODX_ASSETS_URL . 'components/remessages/';

        $this->config = array_merge([
            'corePath' => $corePath,
            'modelPath' => $corePath . 'model/',
            'processorsPath' => $corePath . 'processors/',

            'connectorUrl' => $assetsUrl . 'connector.php',
            'assetsUrl' => $assetsUrl,
            'cssUrl' => $assetsUrl . 'css/',
            'jsUrl' => $assetsUrl . 'js/',
        ], $config);

        $this->modx->addPackage('remessages', $this->config['modelPath']);
        $this->modx->lexicon->load('remessages:default');
        $this->pdoTools = $this->modx->getService('pdoTools');
        
        $this->tpls['tplContact'] = $this->modx->getOption('tplContact', $_SESSION['scriptProperties'], 'tpl.reMessages.contact');
        $this->tpls['tplList'] = $this->modx->getOption('tplList', $_SESSION['scriptProperties'], 'tpl.reMessages.list');
        $this->tpls['tplMessage'] = $this->modx->getOption('tplMessage', $_SESSION['scriptProperties'], 'tpl.reMessages.message');
        $this->tpls['tplDialog'] = $this->modx->getOption('tplDialog', $_SESSION['scriptProperties'], 'tpl.reMessages.dialog');
        
        $this->comet = [
            'id' => $this->modx->getOption('remessages_comet_id'),
            'key' => $this->modx->getOption('remessages_comet_key'),
        ];
    }


    /**
     * 
     */
    function getThreads()
    {
        if (!$this->pdoTools) {
            return 'Could not load pdoTools class!';
        }
        $ctx = $this->modx->context->key;
        
        if (!$this->modx->user->hasSessionContext($ctx)) {
            return $this->modx->lexicon('remessages_auth_needed');
        }
        
        $q = $this->modx->newQuery('rmThread');
        $q->leftJoin('rmMember', 'CurrentUserMember', "CurrentUserMember.thread = rmThread.id AND CurrentUserMember.user = {$this->modx->user->id}");
        $q->leftJoin('rmMember', 'FriendMember', "FriendMember.thread = rmThread.id AND FriendMember.user != {$this->modx->user->id}");
        $q->leftJoin('modUser', 'Friend', "FriendMember.user = Friend.id");
        $q->leftJoin('modUserProfile', 'FriendProfile', "FriendProfile.internalKey = Friend.id");
        $q->leftJoin('rmMessage', 'LastMessage', "LastMessage.id = rmThread.last");
        $q->leftJoin('rmMessage', 'unreadMessage', "unreadMessage.thread = rmThread.id AND unreadMessage.createdon > CurrentUserMember.visit");
        $q->select([
            $this->modx->getSelectColumns('rmThread', 'rmThread'),
            $this->modx->getSelectColumns('modUser', 'Friend', null, ['id'], true),
            $this->modx->getSelectColumns('modUserProfile', 'FriendProfile', null, ['id'], true),
            $this->modx->getSelectColumns('rmMessage', 'LastMessage', null, ['id'], true),
            'COUNT(`unreadMessage`.`id`) as `count`',
          ]);
        $q->sortby('LastMessage.createdon', 'DESC');
        $q->groupby('rmThread.id');
        $q->where(['CurrentUserMember.id:IS NOT' => NULL, 'rmThread.last:!=' => 0]);
        
        if (!$q->prepare() || !$q->stmt->execute()) {
            $this->modx->log(modX::LOG_LEVEL_ERROR, "[reMessages] Error on get threads list.\nQuery: ".$q->toSql()."\nResponse: ".print_r($q->stmt->errorInfo(),1));
            return;
        }
        
        $threads = $q->stmt->fetchAll(PDO::FETCH_ASSOC);
        
        $output = [];
        foreach ($threads as $thread) {
          $prefix = 'id';
          $identifier = $thread['internalKey'];
          $thread['identifier'] = $prefix . $identifier;
          $output[] = $this->pdoTools->getChunk($this->tpls['tplContact'], $thread);
        }
        
        return $this->pdoTools->getChunk($this->tpls['tplList'], ['output' => implode(PHP_EOL, $output)]);
    }


    /**
     * @param int $identifier
     */
    function getDialog($identifier)
    {
        if (!$this->pdoTools) {
            return 'Could not load pdoTools class!';
        }
        $ctx = $this->modx->context->key;
        
        if (!$this->modx->user->hasSessionContext($ctx)) {
            return $this->modx->lexicon('remessages_auth_needed');
        }
        
        $thread = $this->findThread($identifier);
        
        if (empty($thread)) {
            return 'Thread not found';
        }

        $q = $this->modx->newQuery('rmMessage');
        $q->leftJoin('modUser', 'Author', "rmMessage.createdby = Author.id");
        $q->leftJoin('modUserProfile', 'AuthorProfile', "AuthorProfile.internalKey = Author.id");
        $q->leftJoin('rmMember', 'FriendMember', "FriendMember.thread = rmMessage.thread AND FriendMember.user != {$this->modx->user->id}");
        $q->leftJoin('rmMessage', 'Reply', "Reply.id = rmMessage.reply");
        $q->leftJoin('modUserProfile', 'ReplyAuthorProfile', "ReplyAuthorProfile.internalKey = Reply.createdby");
        $q->select([
            $this->modx->getSelectColumns('modUser', 'Author', null, ['id'], true),
            $this->modx->getSelectColumns('modUserProfile', 'AuthorProfile', null, ['id'], true),
            $this->modx->getSelectColumns('rmMessage', 'rmMessage'),
            $this->modx->getSelectColumns('rmMember', 'FriendMember', null, ['id'], true),
            'Reply.text as reply_text, ReplyAuthorProfile.fullname as reply_author',
          ]);
        $q->groupby('rmMessage.id');
        $q->sortby('rmMessage.createdon', 'ASC');
        $q->where(['rmMessage.thread' => $thread['id']]);
        if (!$q->prepare() || !$q->stmt->execute()) {
            $this->modx->log(modX::LOG_LEVEL_ERROR, "[reMessages] Error on get messages.\nQuery: ".$q->toSql()."\nResponse: ".print_r($q->stmt->errorInfo(),1));
            return;
        }
        $messages = $q->stmt->fetchAll(PDO::FETCH_ASSOC);
        
        $output = [];
        foreach ($messages as $message) {
          $output[] = $this->pdoTools->getChunk($this->tpls['tplMessage'], $message);
        }
        $thread['output'] = implode(PHP_EOL, $output);
        $thread['identifier'] = $identifier;
        if ($member = $this->modx->getObject('rmMember', ['thread' => $thread['id'], 'user' => $this->modx->user->id])) {
            $member->set('visit', time());
            $member->save();
        }
        $link = mysqli_connect('app.comet-server.ru', $this->comet['id'], $this->comet['key'], 'CometQL_v1');
        if ($link) {
            $receivers = $this->getReceivers($thread['id']);
            foreach ($receivers as $reseiver) {
                if ($reseiver['user'] != $this->modx->user->id) {
                    $result = mysqli_query($link, 'INSERT INTO pipes_messages (name, event, message) ' .
                              'VALUES ("re_messages_'.$reseiver['user'].'", "read", \'{' .
                                '"identifier": "' . 'id' . $this->modx->user->id . '"' . 
                              '}\')');
                    if(mysqli_errno($link) != 0) {
                        $this->modx->log(modX::LOG_LEVEL_ERROR, '[reMessages] Comet error #' . mysqli_errno($link). ' ' . mysqli_error($link));
                    }
                    
                    $result = mysqli_query($link, 'SELECT * FROM users_in_pipes WHERE name = "track_online"');
                    if(mysqli_errno($link) != 0) {
                        $this->modx->log(modX::LOG_LEVEL_ERROR, '[reMessages] Comet error #' . mysqli_errno($link). ' ' . mysqli_error($link));
                    } else {
                        $thread['status'] = 'Offline';
                        while ($row = $result->fetch_row()) {
                            if ($row[1] == $reseiver['user']) {
                                $thread['status'] = 'Online';
                                break;
                            }
                        }
                    }
                }
            }
        }
        return $this->pdoTools->getChunk($this->tpls['tplDialog'], $thread);
    }


    /**
     * @param int $identifier
     */
    function findThread($identifier)
    {
        $ctx = $this->modx->context->key;
        
        if (!$this->modx->user->hasSessionContext($ctx)) {
            return $this->modx->lexicon('remessages_auth_needed');
        }
        
        $prefix = preg_replace('/[0-9]/', '', $identifier);
        $id = (int) preg_replace('/[^0-9]/', '', $identifier);
        
        switch ($prefix) {
            case 'id':
                $q = $this->modx->newQuery('rmThread');
                $q->leftJoin('rmMember', 'CurrentUserMember', "CurrentUserMember.thread = rmThread.id AND CurrentUserMember.user = {$this->modx->user->id}");
                $q->leftJoin('rmMember', 'FriendMember', "FriendMember.thread = rmThread.id AND FriendMember.user = {$id}");
                $q->leftJoin('modUser', 'Friend', "FriendMember.user = Friend.id");
                $q->leftJoin('modUserProfile', 'FriendProfile', "FriendProfile.internalKey = Friend.id");
                $q->select([
                    $this->modx->getSelectColumns('rmThread', 'rmThread'),
                    $this->modx->getSelectColumns('modUser', 'Friend', null, ['id'], true),
                    $this->modx->getSelectColumns('modUserProfile', 'FriendProfile', null, ['id'], true),
                  ]);
                $q->groupby('rmThread.id');
                $q->where(['CurrentUserMember.id:IS NOT' => NULL, 'FriendMember.id:IS NOT' => NULL]);
                if (!$q->prepare() || !$q->stmt->execute()) {
                    $this->modx->log(modX::LOG_LEVEL_ERROR, "[reMessages] Error on get dialog.\nQuery: ".$q->toSql()."\nResponse: ".print_r($q->stmt->errorInfo(),1));
                    return;
                }
                $thread = $q->stmt->fetch(PDO::FETCH_ASSOC);
                if (empty($thread)) {
                    if ($this->modx->getCount('modUser', $id)) {
                      $thread = $this->modx->newObject('rmThread');
                      $members = [];
                      $members[] = $this->modx->newObject('rmMember', ['user' => $this->modx->user->id]);
                      $members[] = $this->modx->newObject('rmMember', ['user' => $id]);
                      $thread->addMany($members);
                      $thread->save();
                      return $this->findThread($identifier);
                    }
                }
                break;
            case 'group':
                $threadObj = $this->modx->getObject('rmThread', $id);
                $thread = $threadObj->toArray();
                break;
            default:
              break;
        }
        return $thread;
    }


    /**
     * @param int $identifier
     */
    function sendMessage($identifier, $text, $reply, $files)
    {
        $ctx = $this->modx->context->key;
        $reply = (int) $reply;
        if (is_array($files) && !empty($files)) {
            foreach ($files as $k => $url) {
                $path = str_replace(MODX_ASSETS_URL, MODX_ASSETS_PATH, $url);
                if ((!file_exists($path)) ||
                    (!$image_data = getimagesize($path))
                  ) {
                    unset($files[$k]);
                }
            }
            $pre_text = [];
            foreach ($files as $img) {
                $thumb = $this->modx->runSnippet('phpthumbon', ['input' => $img, 'options' => 'h=80']);
                $pre_text[] = '<a href="' . $img . '"><img src="' . $thumb . '" height="80" alt=""></a>';
            }
            $text = implode(' ', $pre_text) . PHP_EOL . $text;
        }
        
        if (!$this->modx->user->hasSessionContext($ctx)) {
            return $this->modx->lexicon('remessages_auth_needed');
        }
        
        $thread = $this->findThread($identifier);
        
        if (empty($thread)) {
            return 'Thread not found';
        }
        
        $threadObject = $this->modx->getObject('rmThread', $thread['id']);
        if ($threadObject && !empty($text)) {
            $message = $this->modx->newObject('rmMessage', [
              'thread' => $thread['id'],
              'createdby' => $this->modx->user->id,
              'text' => $text,
              'reply' => $reply,
            ]);
            if ($message->save()) {
                $threadObject->set('last', $message->id);
                $threadObject->save();
            }
            
            $link = mysqli_connect('app.comet-server.ru', $this->comet['id'], $this->comet['key'], 'CometQL_v1');
            if ($link) {
                $receivers = $this->getReceivers($thread['id']);
                foreach ($receivers as $reseiver) {
                    if ($reseiver['user'] != $this->modx->user->id) {
                        $result = mysqli_query($link, 'INSERT INTO pipes_messages (name, event, message) ' .
                                  'VALUES ("re_messages_'.$reseiver['user'].'", "message", \'{' .
                                    '"identifier": "' . 'id' . $this->modx->user->id . '",' . 
                                    '"name": "' . $this->modx->user->Profile->fullname . '",' . 
                                    '"text": "' . substr(strip_tags($this->modx->runSnippet('Jevix', ['input' => str_replace(PHP_EOL, ' ', $text)])), 0, 15) . '"' . 
                                  '}\')');
                        if(mysqli_errno($link) != 0) {
                            $this->modx->log(modX::LOG_LEVEL_ERROR, '[reMessages] Comet error #' . mysqli_errno($link). ' ' . mysqli_error($link));
                        }
                    }
                }
            }
        }
        
        
        return $this->getDialog($identifier);
    }


    /**
     * @param int $thread
     */
    function getReceivers($thread)
    {
        $q = $this->modx->newQuery('rmMember');
        $q->leftJoin('modUser', 'User', "User.id = rmMember.user");
        $q->leftJoin('modUserProfile', 'Profile', "Profile.internalKey = User.id");
        $q->select([
            $this->modx->getSelectColumns('rmMember', 'rmMember'),
            $this->modx->getSelectColumns('modUser', 'User', null, ['id'], true),
            $this->modx->getSelectColumns('modUserProfile', 'Profile', null, ['id'], true),
          ]);
        $q->sortby('rmMember.id', 'ASC');
        $q->where(['rmMember.thread' => $thread]);
        
        if (!$q->prepare() || !$q->stmt->execute()) {
            $this->modx->log(modX::LOG_LEVEL_ERROR, "[reMessages] Error on get receivers list.\nQuery: ".$q->toSql()."\nResponse: ".print_r($q->stmt->errorInfo(),1));
            return;
        }
        
        $receivers = $q->stmt->fetchAll(PDO::FETCH_ASSOC);
        return $receivers;
    }


    function getTotal()
    {
        if (!$this->modx->user->hasSessionContext($ctx)) {
            return 0;
        }
        
        $q = $this->modx->newQuery('rmThread');
        $q->leftJoin('rmMember', 'CurrentUserMember', "CurrentUserMember.thread = rmThread.id AND CurrentUserMember.user = {$this->modx->user->id}");
        $q->leftJoin('rmMessage', 'unreadMessage', "unreadMessage.thread = rmThread.id AND unreadMessage.createdon > CurrentUserMember.visit");
        $q->select([
            'COUNT(`unreadMessage`.`id`) as `count`',
          ]);
        $q->groupby('rmThread.id');
        $q->where(['CurrentUserMember.id:IS NOT' => NULL, 'rmThread.last:!=' => 0]);
        
        if (!$q->prepare() || !$q->stmt->execute()) {
            $this->modx->log(modX::LOG_LEVEL_ERROR, "[reMessages] Error on get threads list.\nQuery: ".$q->toSql()."\nResponse: ".print_r($q->stmt->errorInfo(),1));
            return;
        }
        
        $threads = $q->stmt->fetchAll(PDO::FETCH_ASSOC);
        
        $count = 0;
        foreach ($threads as $thread) {
          $count += $thread['count'];
        }
        return $count;
    }

}