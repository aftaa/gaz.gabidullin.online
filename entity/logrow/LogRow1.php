<?php


namespace app\entity\logrow;


use app\entity\common\Date;
use app\entity\common\Time;
use app\entity\common\Ip;
use app\entity\common\Url;

/**
 * Class LogRow1
 * @package App\Entity\LogFileDb
 */
class LogRow1 implements LogRowInterface
{
    private Date $date;
    private Time $time;
    private Ip $ip;
    private Url $urlFrom;
    private Url $urlTo;

    /**
     * @return Date
     */
    public function getDate(): Date
    {
        return $this->date;
    }

    /**
     * @param Date $date
     * @return LogRow1
     */
    public function setDate(Date $date): LogRow1
    {
        $this->date = $date;
        return $this;
    }

    /**
     * @return Time
     */
    public function getTime(): Time
    {
        return $this->time;
    }

    /**
     * @param Time $time
     * @return LogRow1
     */
    public function setTime(Time $time): LogRow1
    {
        $this->time = $time;
        return $this;
    }

    /**
     * @return Ip
     */
    public function getIp(): Ip
    {
        return $this->ip;
    }

    /**
     * @param Ip $ip
     * @return LogRow1
     */
    public function setIp(Ip $ip): LogRow1
    {
        $this->ip = $ip;
        return $this;
    }

    /**
     * @return Url
     */
    public function getUrlFrom(): Url
    {
        return $this->urlFrom;
    }

    /**
     * @param Url $urlFrom
     * @return LogRow1
     */
    public function setUrlFrom(Url $urlFrom): LogRow1
    {
        $this->urlFrom = $urlFrom;
        return $this;
    }

    /**
     * @return Url
     */
    public function getUrlTo(): Url
    {
        return $this->urlTo;
    }

    /**
     * @param Url $urlTo
     * @return LogRow1
     */
    public function setUrlTo(Url $urlTo): LogRow1
    {
        $this->urlTo = $urlTo;
        return $this;
    }
}
