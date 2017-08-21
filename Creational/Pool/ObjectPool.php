<?php

namespace DesignPatterns\Creational\Pool;

/**
 * Class ObjectPool
 * @package DesignPatterns\Creational\Pool
 */
class ObjectPool
{
    /**
     * Занятые объекты
     * @var array
     */
    private $occupiedProducts = [];

    /**
     * Свободные объекты
     * @var array
     */
    private $freeProducts = [];

    /**
     * @var int
     */
    private $limit = 5;

    /**
     * ObjectPool constructor.
     * @param int $limit
     */
    public function __construct(int $limit = null)
    {
        if ($limit) {
            $this->limit = $limit;
        }

        for ($i = 0; $i < $this->limit; $i++) {
            $product = new ObjectProduct($i + 1);
            $key = spl_object_hash($product);
            $this->freeProducts[$key] = $product;
        }
    }

    /**
     * @param ObjectProduct $product
     */
    public function push(ObjectProduct $product)
    {
        $key = spl_object_hash($product);

        if (isset($this->occupiedProducts[$key])) {
            unset($this->occupiedProducts[$key]);
            $this->freeProducts[$key] = $product;
        }
    }

    /**
     * @return ObjectProduct|null
     */
    public function get()
    {
        if (count($this->freeProducts) > 0) {
            $product = array_pop($this->freeProducts);
            $this->occupiedProducts[spl_object_hash($product)] = $product;

            return $product;
        }

        return null; // Нет свободных объектов
    }
}
