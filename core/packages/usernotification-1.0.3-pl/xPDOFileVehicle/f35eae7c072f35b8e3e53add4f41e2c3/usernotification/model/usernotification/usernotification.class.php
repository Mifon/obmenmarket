<?php

class usernotification
{
    public $modx;
    public $version = '1.0.1';
    public $dateStart;

    function __construct(modX &$modx, array $config = array())
    {
        $this->modx =& $modx;

        $corePath = MODX_CORE_PATH . 'components/usernotification/';
        $assetsUrl = MODX_ASSETS_URL . 'components/usernotification/';
        $connectorUrl = $assetsUrl . 'connector.php';

        $this->config = array_merge(array(
            'assetsUrl' => $assetsUrl,
            'cssUrl' => $assetsUrl . 'css/',
            'jsUrl' => $assetsUrl . 'js/',
            'imagesUrl' => $assetsUrl . 'images/',
            'connectorUrl' => $connectorUrl,

            'corePath' => $corePath,
            'modelPath' => $corePath . 'model/',
            'chunksPath' => $corePath . 'elements/chunks/',
            'templatesPath' => $corePath . 'elements/templates/',
            'snippetsPath' => $corePath . 'elements/snippets/',
            'processorsPath' => $corePath . 'processors/',
        ), $config);

        $this->modx->addPackage('usernotification', $this->config['modelPath']);
        $this->modx->lexicon->load('usernotification:default');
    }

    public function userGroup($user_id = 0)
    {
        $c = $this->modx->newQuery('modUserGroupMember');
        $c->select('user_group');
        $c->where(array(
            'member' => $user_id,
        ));
        if ($c->prepare() && $c->stmt->execute() && $groups = $c->stmt->fetchAll(PDO::FETCH_COLUMN)) {
            return $groups;
        }
        return array(-1);
    }

    public function sendAll($comment = '', $title = '')
    {
        $response = $this->runProcessor('web/notification/create', [
            'type' => 2,
            'comment' => $comment,
            'title' => $title,
        ]);
        if ($response['success']) {
            return true;
        }
        return $response['message'];
    }

    public function sendGroup($comment = '', $group_id = 0, $title = '')
    {
        $response = $this->runProcessor('web/notification/create', [
            'type' => 1,
            'user_id' => $group_id,
            'comment' => $comment,
            'title' => $title,
        ]);
        if ($response['success']) {
            return true;
        }
        return $response['message'];
    }

    public function sendUser($comment = '', $user_id = 0, $title = '')
    {
        $response = $this->runProcessor('web/notification/create', [
            'type' => 0,
            'user_id' => $user_id,
            'comment' => $comment,
            'title' => $title,
        ]);
        if ($response['success']) {
            return true;
        }
        return $response['message'];
    }

    public function getDateStart($user_id = 0)
    {
        if ($this->dateStart) {
            return $this->dateStart;
        }
        $c = $this->modx->newQuery('modUser');
        $c->select('createdon');
        $c->where([
            'id' => $user_id,
        ]);
        if ($c->prepare() && $c->stmt->execute() && $createdon = $c->stmt->fetch(PDO::FETCH_COLUMN)) {
            if (is_numeric($createdon)) {
                $createdon = date('Y-m-d H:i:s', $createdon);
            }
        } else {
            $createdon = 0;
        }
        $this->dateStart = $createdon;
        return $this->dateStart;
    }

    public function runProcessor($name = '', $params = [])
    {
        return $this->modx->runProcessor($name, $params, ['processors_path' => $this->config['processorsPath']])->response;
    }

}