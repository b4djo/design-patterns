<?php

namespace DesignPatterns\Structural\DataMapper;

/**
 * Class StorageAdapter
 * @package DesignPatterns\Structural\DataMapper
 */
class StorageAdapter
{
    /**
     * @var array
     */
    private $data = [];

    /**
     * StorageAdapter constructor.
     * @param array $data
     */
    public function __construct(array $data)
    {
        $this->data = $data;
    }

    /**
     * @param int $id
     * @return array|null
     */
    public function find(int $id)
    {
        if (isset($this->data[$id])) {
            return $this->data[$id];
        }

        return null;
    }
}
