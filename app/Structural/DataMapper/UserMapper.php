<?php

namespace DesignPatterns\Structural\DataMapper;

/**
 * Class UserMapper
 * @package DesignPatterns\Structural\DataMapper
 */
class UserMapper
{
    /**
     * @var StorageAdapter
     */
    private $adapter;

    /**
     * UserMapper constructor.
     * @param StorageAdapter $storage
     */
    public function __construct(StorageAdapter $storage)
    {
        $this->adapter = $storage;
    }

    /**
     * @param int $id
     * @return User
     */
    public function findById(int $id): User
    {
        $result = $this->adapter->find($id);

        if ($result === null) {
            throw new \InvalidArgumentException("User #$id not found");
        }

        return $this->mapRowToUser($result);
    }

    /**
     * @param array $row
     * @return User
     */
    private function mapRowToUser(array $row): User
    {
        return User::fromState($row);
    }
}
