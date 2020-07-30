<?php


namespace app\entity\logrow;

use app\entity\common\Ip;
use app\entity\logrow\LogRowInterface;

/**
 * Class LogRow2
 * @package App\Entity\LogFileDb
 */
class LogRow2 implements LogRowInterface
{
    private Ip $ip;
    private string $browserName;
    private string $osName;

    /**
     * @return Ip
     */
    public function getIp(): Ip
    {
        return $this->ip;
    }

    /**
     * @param Ip $ip
     * @return LogRow2
     */
    public function setIp(Ip $ip): LogRow2
    {
        $this->ip = $ip;
        return $this;
    }

    /**
     * @return string
     */
    public function getBrowserName(): string
    {
        return $this->browserName;
    }

    /**
     * @param string $browserName
     * @return LogRow2
     */
    public function setBrowserName(string $browserName): LogRow2
    {
        $this->browserName = $browserName;
        return $this;
    }

    /**
     * @return string
     */
    public function getOsName(): string
    {
        return $this->osName;
    }

    /**
     * @param string $osName
     * @return LogRow2
     */
    public function setOsName(string $osName): LogRow2
    {
        $this->osName = $osName;
        return $this;
    }
}
