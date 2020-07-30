<?php


namespace App\Entity\Common;


use DomainException;

/**
 * Class Ip
 * @package App\Entity\Common
 */
class Ip
{
    private string $ip;

    /**
     * Ip constructor.
     * @param string $ip
     * @throws DomainException
     */
    public function __construct(string $ip)
    {
        $ip = $this->checkIp($ip);
        $this->ip = $ip;
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->getIp();
    }

    /**
     * @return string
     */
    public function getIp(): string
    {
        return $this->ip;
    }

    /**
     * @param string $ip
     * @return string
     * @throws DomainException
     */
    private function checkIp(string $ip)
    {
        if (false === filter_var($ip, FILTER_VALIDATE_IP)) {
            throw new DomainException("Wrong IP: $ip");
        }
        return $ip;
    }
}
