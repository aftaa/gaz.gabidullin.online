<?php


namespace app\builder;


use app\entity\common\Date;
use app\entity\common\Ip;
use app\entity\common\Time;
use app\entity\common\Url;
use app\entity\logrow\LogRow1;
use app\entity\logrow\LogRowInterface;

/**
 * Class LogRow1Builder
 * @package app\builder
 */
class LogRow1Builder implements LogRowBuilderInterface
{
    public function build(array &$row): LogRowInterface
    {
        return (new LogRow1)
            ->setDate(new Date(array_shift($row)))
            ->setTime(new Time(array_shift($row)))
            ->setIp(new Ip(array_shift($row)))
            ->setUrlFrom(new Url(array_shift($row)))
            ->setUrlTo(new Url(array_shift($row)));
    }
}
