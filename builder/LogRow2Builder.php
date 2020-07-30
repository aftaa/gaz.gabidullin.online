<?php


namespace app\builder;


use app\entity\common\Ip;
use app\entity\logrow\LogRow2;
use app\entity\logrow\LogRowInterface;

class LogRow2Builder implements LogRowBuilderInterface
{
    public function build(array &$row): LogRowInterface
    {
        return (new LogRow2)
            ->setIp(new Ip(array_shift($row)))
            ->set(new Url(array_shift($row)))
            ->setUrlTo(new Url(array_shift($row)));
    }
}
