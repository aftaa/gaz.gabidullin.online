<?php


namespace app\service;


use app\models\LogTable1;
use app\models\LogTable2;
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
}