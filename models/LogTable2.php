<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "log_table2".
 *
 * @property int $id
 * @property string $ip
 * @property string $browser Браузер
 * @property string $os ОС
 */
class LogTable2 extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'log_table2';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['ip', 'browser', 'os'], 'required'],
            [['ip'], 'string'],
            [['browser', 'os'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'ip' => 'Ip',
            'browser' => 'Браузер',
            'os' => 'ОС',
        ];
    }

    /**
     * {@inheritdoc}
     * @return LogTable2Query the active query used by this AR class.
     */
    public static function find()
    {
        return new LogTable2Query(get_called_class());
    }
}
