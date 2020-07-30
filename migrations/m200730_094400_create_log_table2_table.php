<?php

use yii\db\Migration;

/**
 * Handles the creation of table `log_table2`.
 */
class m200730_094400_create_log_table2_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('log_table2', [
            'id' => $this->primaryKey(),
            'ip'   => 'INET NOT NULL',
            'browser' => $this->string()->notNull()->comment('Браузер'),
            'os' => $this->string()->notNull()->comment('ОС'),
        ]);
        
        $this->createIndex('ip-idx-2', 'log_table2', 'ip');

        // TODO
//        Yii::$app->getDb()->createCommand('COMMENT ON log_table2.ip IS "IP-адрес"')->execute();
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropIndex('ip-idx-2', 'log_table2');
        $this->dropTable('log_table2');
    }
}
