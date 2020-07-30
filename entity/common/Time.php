<?php


namespace app\entity\common;


use DomainException;

class Time
{
    private string $time;

    /**
     * Time constructor.
     * @param string $time
     * @throws DomainException
     */
    public function __construct(string $time)
    {
        $time = $this->checkTime($time);
        $this->time = $time;
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->getTime();
    }

    /**
     * @return string
     */
    public function getTime(): string
    {
        return $this->time;
    }

    /**
     * @param string $time
     * @return string
     * @throws DomainException
     */
    private function checkTime(string $time)
    {
        $pattern = '/^(\d{2}):(\d{2}):(\d{2})$/';
        if (!preg_match($pattern, $time, $matches)) {
            throw new DomainException("Wrong time: $time");
        }

        [,$h, $m, $s] = $matches;

        if ($h < 0 || $h > 23 || $m < 0 || $m >= 60 || $s < 0 || $s >= 60) {
            throw new DomainException("Wrong time: $time");
        }

        return $time;
    }
}