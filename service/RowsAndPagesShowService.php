<?php


namespace app\service;


use app\models\LogTable1;
use app\models\LogTable2;
use Yii;
use yii\data\Pagination;

class RowsAndPagesShowService
{
    /**
     * @return array
     */
    public function getRenderData1()
    {
        $query = LogTable1::find()->orderBy(['time' => SORT_DESC, 'date' => SORT_DESC]);
        $countQuery = clone $query;
        $pages = new Pagination(['totalCount' => $countQuery->count()]);
        $rows = $query->offset($pages->offset)
            ->limit($pages->limit)
            ->all();
        return compact('rows', 'pages');
    }

    /**
     * @return array
     */
    public function getRenderData2()
    {
        $query = LogTable2::find()->orderBy(['id' => SORT_DESC]);
        $countQuery = clone $query;
        $pages = new Pagination(['totalCount' => $countQuery->count()]);
        $rows = $query->offset($pages->offset)
            ->limit($pages->limit)
            ->all();
        return compact('rows', 'pages');
    }

    public function getTestTaskQueryRenderData()
    {
        $sql = <<<SQL
            SELECT t1.ip, -- t2.browser, t2.os, t1.url_from, t1.url_to,
                COUNT(DISTINCT t1.url_to) AS cnt
            FROM log_table1 t1 JOIN log_table2 t2 ON t1.ip=t2.ip
            GROUP BY t1.ip 
        SQL;

        $result = Yii::$app->getDb()->createCommand($sql)->queryAll();
        return compact('result', 'sql');
    }
}