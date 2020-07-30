<?php


namespace app\service;


use app\entity\logrow\LogRowInterface;

class ParseLogIntoDb
{
    /**
     * @param LogRowInterface[] $rows
     */
    public function logIntoDb(array $rows)
    {
        $files2models = [
            'test-data/log1.txt' =>
        ];
    }
}