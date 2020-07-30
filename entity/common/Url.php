<?php


namespace app\entity\common;


use DomainException;

/**
 * Class Url
 * @package App\Entity\Common
 */
class Url
{
    private string $url;

    /**
     * Url constructor.
     * @param string $url
     * @throws DomainException
     */
    public function __construct(string $url)
    {
        $url = $this->checkUrl($url);
        $this->url = $url;
    }

    /**
     * @return string
     */
    public function getUrl(): string
    {
        return $this->url;
    }

    /**
     * @param string $url
     * @return string
     * @throws DomainException
     */
    private function checkUrl(string $url)
    {
        if (false === filter_var($url, FILTER_VALIDATE_URL)) {
            throw new DomainException("Wrong URL: $url");
        }
        return $url;
    }
}
