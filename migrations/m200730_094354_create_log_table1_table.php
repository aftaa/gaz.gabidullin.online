<?php

use yii\db\Migration;

/**
 * Handles the creation of table `log_table1`.
 */
class m200730_094354_create_log_table1_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('log_table1', [
            'id'       => $this->primaryKey(),
            'date'     => $this->date()->notNull()->comment('Дата'),
            'time'     => $this->time()->notNull()->comment('Время'),
            'ip'       => 'INET NOT NULL',
            'url_from' => $this->string()->notNull()->comment('Откуда зашел'),
            'url_to'   => $this->string()->notNull()->comment('Куда зашел'),
        ]);

        $this->createIndex('ip-idx-1', 'log_table1', 'ip');
        $this->createIndex('date-idx', 'log_table1', 'date');
        $this->createIndex('time-idx', 'log_table1', 'time');

        // TODO
//        Yii::$app->getDb()->createCommand('COMMENT ON log_table1.ip IS "IP-адрес"')->execute();
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropIndex('time-idx', 'log_table1');
        $this->dropIndex('date-idx', 'log_table1');
        $this->dropIndex('ip-idx-1', 'log_table1');
        $this->dropTable('log_table1');
    }
}
