<?php


namespace App\Entity\Common;


use DateTime;
use DomainException;
use Exception;

/**
 * Class Date
 * @package App\Entity\Common
 */
class Date
{
    private string $date;

    /**
     * Date constructor.
     * @param string $date
     * @throws DomainException
     */
    public function __construct(string $date)
    {
        $date = $this->checkDate($date);
        $this->date = $date;
    }

    /**
     * @return string
     */
    public function getDate(): string
    {
        return $this->date;
    }

    /**
     * @param string $date
     * @return string
     * @throws DomainException
     */
    private function checkDate(string $date)
    {
        try {
            return (new DateTime($date))->format('Y-m-d');// TODO быстрый костыль, в общем-то
        } catch (Exception $e) {
            throw new DomainException("Wrong date: $date");
        }
    }
}
