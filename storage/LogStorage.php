<?php


namespace app\storage;

use app\builder\LogRowBuilderInterface;
use app\entity\logrow\LogRowInterface;
use DomainException;
use RuntimeException;

/**
 * Class LogStorage1
 * @package app\storage
 */
class LogStorage
{
    const SKIP_ERRORS = 1; // пропускать строки с ошибками (время, дата, неполная строка т.д.)
    const DONT_SKIP_ERRORS = 2; // или выбрасывать исключение

    private string $logfile;
    private string $mode;

    /**
     * LogStorage constructor.
     * @param string $logfile
     * @param int $mode
     */
    public function __construct(string $logfile, $mode = self::DONT_SKIP_ERRORS)
    {
        if (!file_exists($logfile) || !is_readable($logfile)) {
            throw new RuntimeException("File '$logfile' isn't exists or not readable");
        }
        $this->logfile = $logfile;
        $this->mode = $mode;
    }

    /**
     * @param LogRowBuilderInterface $builder
     * @return array|LogRowInterface[]
     */
    public function parse(LogRowBuilderInterface $builder)
    {
        $fileContents = file_get_contents($this->logfile);
        $file = explode("\n", $fileContents);
        $rows = [];

        foreach ($file as $fileRow) {
            try {
                $row = explode('|', $fileRow);
                $rows[] = $builder->build($row);
            } catch (DomainException $e) {
                if (self::DONT_SKIP_ERRORS == $this->mode) {
                    throw $e;
                }
            }
        }
        return $rows;
    }
}
