<?php

namespace DesignPatterns\Creational\Pool;

/**
 * Class ObjectProduct
 * @package DesignPatterns\Creational\Pool
 */
class ObjectProduct
{
    /**
     * @var
     */
    private $id;

    /**
     * ObjectProduct constructor.
     * @param $id
     */
    public function __construct($id)
    {
        $this->id = $id;
    }

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }
}
