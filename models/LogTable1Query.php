<?php

namespace app\models;

/**
 * This is the ActiveQuery class for [[LogTable1]].
 *
 * @see LogTable1
 */
class LogTable1Query extends \yii\db\ActiveQuery
{
    /*public function active()
    {
        return $this->andWhere('[[status]]=1');
    }*/

    /**
     * {@inheritdoc}
     * @return LogTable1[]|array
     */
    public function all($db = null)
    {
        return parent::all($db);
    }

    /**
     * {@inheritdoc}
     * @return LogTable1|array|null
     */
    public function one($db = null)
    {
        return parent::one($db);
    }
}
