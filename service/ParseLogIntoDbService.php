<?php


namespace app\service;


use app\builder\LogRow1Builder;
use app\builder\LogRow2Builder;
use app\entity\logrow\LogRow1;
use app\entity\logrow\LogRow2;
use app\models\LogTable1;
use app\models\LogTable2;
use app\storage\LogStorage;
use Yii;

class ParseLogIntoDbService
{
    /**
     * Парсит лог-файлы и вставляет их в БД
     */
    public function logIntoDb()
    {
        Yii::$app->getDb()->createCommand('TRUNCATE table1, table2'); // TODO может и не очищать таблицы?

        $filename = 'test-data/log1.txt';
        $storage = new LogStorage($filename);
        $logRows = $storage->parse(new LogRow1Builder); // здесь воспользуемся строителем,
                                                        // а в этом классе двумя методами
        $this->import1($logRows);

        $filename = 'test-data/log2.txt';
        $storage = new LogStorage($filename);
        $logRows = $storage->parse(new LogRow2Builder);
        $this->import2($logRows);
    }

    /**
     * @param array $logRows
     */
    private function import1(array $logRows): void
    {
        /** @var LogRow1[] $logRows */
        foreach ($logRows as $logRow) {
            $table = new LogTable1;
            $table->date = $logRow->getDate();
            $table->time = $logRow->getTime();
            $table->ip = $logRow->getIp();
            $table->url_from = $logRow->getUrlFrom();
            $table->url_to = $logRow->getUrlTo();
            $table->save(false);
        }
    }

    /**
     * @param array $logRows
     */
    private function import2(array $logRows): void
    {
        /** @var LogRow2[] $logRows */
        foreach ($logRows as $logRow) {
            $table = new LogTable2;
            $table->ip = $logRow->getIp();
            $table->browser = $logRow->getBrowserName();
            $table->os = $logRow->getOsName();
            $table->save(false);
        }
    }
}