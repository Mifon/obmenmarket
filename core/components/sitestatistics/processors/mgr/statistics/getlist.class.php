<?php

/**
 * Get a list of the viewed resources
 */
class siteStatisticsGetListProcessor extends modObjectGetListProcessor
{
    public $objectType = 'sitestatistics_item';
    public $classKey = 'PageStatistics';
    public $defaultSortField = 'Stat.rid';
    public $defaultSortDirection = 'ASC';
    protected $display_date;
    protected $period = null;
    public $permission = 'list_statistics';


    /**
     * * We doing special check of permission
     * because of our objects is not an instances of modAccessibleObject
     *
     * @return boolean|string
     */
    public function beforeQuery()
    {
        if (!$this->checkPermissions()) {
            return $this->modx->lexicon('access_denied');
        }

        return true;
    }

    /**
     * @param xPDOQuery $c
     *
     * @return xPDOQuery
     */
    public function prepareQueryBeforeCount(xPDOQuery $c)
    {
        $show_total = intval($this->getProperty('show_total', 0));
        $context = $this->getProperty('context', '');
        $c->setClassAlias('Stat');
        if (empty($show_total)) {
            $c->innerJoin('modResource', 'Resource');
            $c->select('Stat.rid, Resource.pagetitle, Resource.context_key as context, COUNT(DISTINCT Stat.user_key) as users, SUM(Stat.views) as views');
            $c->groupby('Stat.rid');
        } else {
            $ctx_txt = empty($context) ? $this->modx->lexicon('sitestatistics_all_contexts') : $context;
            $c->select("'' as rid,'" . $this->modx->lexicon('sitestatistics_all_resources') . "' as pagetitle,'" . $ctx_txt . "' as context, COUNT(DISTINCT Stat.user_key) as users, SUM(Stat.views) as views");
        }
        $query = trim($this->getProperty('query'));
        if ($query && !$show_total) {
            $c->where([
                'Resource.pagetitle:LIKE' => "%{$query}%",
            ]);
        }
        if ($context && !$show_total) {
            $c->where([
                'Resource.context_key' => "{$context}",
            ]);
        }
        $period = $this->period = trim($this->getProperty('period', ''));
        $date = trim($this->getProperty('date', null));
        if (empty($period) && !empty($date)) {
            $period = $this->period = 'day';
        }
        switch ($period) {
            case 'day':
                $c->groupby('Stat.date');
                if (empty($date)) {
                    $c->where([
                        'Stat.date' => date('Y-m-d'),
                    ]);
                    $this->display_date = date('d.m.Y');
                    $this->setProperty('new_date', date('Y-m-d'));
                    $this->setProperty('month', date('Y-m'));
                    $this->setProperty('year', date('Y'));
                } else {
                    $c->where([
                        'Stat.date' => date('Y-m-d', strtotime($date)),
                    ]);
                    $this->display_date = date('d.m.Y', strtotime($date));
                    $this->setProperty('new_date', date('Y-m-d', strtotime($date)));
                    $this->setProperty('month', date('Y-m', strtotime($date)));
                    $this->setProperty('year', date('Y', strtotime($date)));
                }
                break;
            case 'month':
                $c->groupby('Stat.month');
                if (empty($date)) {
                    $c->where([
                        'Stat.month' => date('Y-m'),
                    ]);
                    $_month = date('n');
                    $_year = date('Y');
                    $this->setProperty('new_date', null);
                    $this->setProperty('month', date('Y-m'));
                    $this->setProperty('year', date('Y'));
                } else {
                    $c->where([
                        'Stat.month' => date('Y-m', strtotime($date)),
                    ]);
                    $_month = date('n', strtotime($date));
                    $_year = date('Y', strtotime($date));
                    $this->setProperty('new_date', null);
                    $this->setProperty('month', date('Y-m', strtotime($date)));
                    $this->setProperty('year', date('Y', strtotime($date)));
                }
                $this->display_date = $this->modx->lexicon('month' . $_month) . ', ' . $_year;
                break;
            case 'year':
                $c->groupby('Stat.year');
                if (empty($date)) {
                    $c->where([
                        'Stat.year' => date('Y'),
                    ]);
                    $this->display_date = date('Y');
                    $this->setProperty('new_date', null);
                    $this->setProperty('month', null);
                    $this->setProperty('year', date('Y'));
                } else {
                    $c->where([
                        'Stat.year' => date('Y', strtotime($date)),
                    ]);
                    $this->display_date = date('Y', strtotime($date));
                    $this->setProperty('new_date', null);
                    $this->setProperty('month', null);
                    $this->setProperty('year', date('Y', strtotime($date)));
                }
                break;
            default:
                break;
        }
        return $c;
    }

    /**
     * Get the data of the query
     * @return array
     */
    public function getData()
    {
        $data = [];
        $sort = 'Stat.' . trim($this->getProperty('$sort', 'rid'));
        $limit = intval($this->getProperty('limit'));
        $start = intval($this->getProperty('start'));

        /* query for chunks */
        $c = $this->modx->newQuery($this->classKey);
        $c = $this->prepareQueryBeforeCount($c);
        $data['total'] = $this->modx->getCount($this->classKey, $c);
        $c = $this->prepareQueryAfterCount($c);

        $sortClassKey = $this->getSortClassKey();
        $sortKey = $this->modx->getSelectColumns($sortClassKey, $this->getProperty('sortAlias', $sortClassKey), '', [$sort]);
        if (empty($sortKey)) {
            $sortKey = $this->getProperty('sort');
        }
        $c->sortby($sortKey, $this->getProperty('dir'));
        if ($limit > 0) {
            $c->limit($limit, $start);
        }
        if ($c->prepare() && $c->stmt->execute()) {
            $data['results'] = $c->stmt->fetchAll(PDO::FETCH_ASSOC);
        }
        return $data;
    }

    /**
     * Iterate across the data
     *
     * @param array $data
     * @return array
     */
    public function iterate(array $data)
    {
        $list = [];
        $this->currentIndex = 0;
        if ($data['total'] != 0) {
            foreach ($data['results'] as $row) {
                $row['period_name'] = !empty($this->period) ? $this->modx->lexicon($this->period) : $this->modx->lexicon('sitestatistics_no_period');
                $row['period'] = $this->period;
                $row['display_date'] = $this->display_date;
                $row['date'] = $this->getProperty('new_date');
                $row['month'] = $this->getProperty('month');
                $row['year'] = $this->getProperty('year');
                $row['idx'] = ++$this->currentIndex;

                $row['actions'] = [];
                // Get Users
                $row['actions'][] = [
                    'cls' => '',
                    'icon' => 'icon icon-users',
                    'title' => $this->modx->lexicon('sitestatistics_users'),
                    'action' => 'getUsers',
                    'button' => true,
                    'menu' => true,
                ];
                // Remove
                $row['actions'][] = [
                    'cls' => '',
                    'icon' => 'icon icon-trash-o action-red',
                    'title' => $this->modx->lexicon('sitestatistics_page_remove'),
                    'multiple' => $this->modx->lexicon('sitestatistics_page_remove'),
                    'action' => 'removeStatistics',
                    'button' => true,
                    'menu' => true,
                ];
                $list[] = $row;
                //$this->currentIndex++;
            }
        }
        return $list;
    }
}

return 'siteStatisticsGetListProcessor';