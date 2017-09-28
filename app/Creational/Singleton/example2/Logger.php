<?php

namespace DesignPatterns\Creational\Singleton\example2;

/**
 * Class Logger
 * @package DesignPatterns\Creational\Singleton\example2
 */
final class Logger
{
    /**
     * @var Logger
     */
    private static $instance;

    /**
     * @var string
     */
    private $file = 'logger.txt';

    /**
     * @var string
     */
    private $path;

    public static function getInstance(): Logger
    {
        if (null === static::$instance) {
            static::$instance = new static();
        }

        return static::$instance;
    }

    /**
     * Logger constructor.
     */
    private function __construct()
    {
        $this->path = __DIR__ . DIRECTORY_SEPARATOR . $this->file;
        unlink($this->path);
        file_put_contents($this->path, '');
    }

    private function __clone()
    {
    }

    private function __wakeup()
    {
    }

    /**
     * Added row into log file
     * @param string $str Row
     */
    public static function add($str)
    {
        $logger = self::getInstance();

        $current = file_get_contents($logger->path);
        $current .= $str . "\n";
        file_put_contents($logger->path, $current);
    }
}
