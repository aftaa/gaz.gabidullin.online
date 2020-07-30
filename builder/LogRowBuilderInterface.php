<?php


namespace app\builder;


use app\entity\logrow\LogRowInterface;

interface LogRowBuilderInterface
{
    /**
     * @param array $row
     * @return LogRowInterface
     */
    public function build(array &$row): LogRowInterface;
}