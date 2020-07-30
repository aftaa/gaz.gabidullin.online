<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "log_table1".
 *
 * @property int $id
 * @property string $date Дата
 * @property string $time Время
 * @property string $ip
 * @property string $url_from Откуда зашел
 * @property string $url_to Куда зашел
 */
class LogTable1 extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'log_table1';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['date', 'time', 'ip', 'url_from', 'url_to'], 'required'],
            [['date', 'time'], 'safe'],
            [['ip'], 'string'],
            [['url_from', 'url_to'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'date' => 'Дата',
            'time' => 'Время',
            'ip' => 'Ip',
            'url_from' => 'Откуда зашел',
            'url_to' => 'Куда зашел',
        ];
    }

    /**
     * {@inheritdoc}
     * @return LogTable1Query the active query used by this AR class.
     */
    public static function find()
    {
        return new LogTable1Query(get_called_class());
    }
}
