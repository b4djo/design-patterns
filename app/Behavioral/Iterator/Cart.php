<?php

namespace DesignPatterns\Behavioral\Iterator;

use IteratorAggregate;
use Traversable;

/**
 * Class Cart
 * @package DesignPatterns\Behavioral\Iterator
 */
class Cart implements IteratorAggregate
{
    /**
     * @var array
     */
    private $purchases;

    /**
     * @var int
     */
    private $currentIndex = 0;

    /**
     * @param Purchase $purchase
     */
    public function addPurchase(Purchase $purchase)
    {
        $this->purchases[] = $purchase;
    }

    /**
     * @return int
     */
    public function getCost()
    {
        $cost = 0;
        foreach ($this->purchases as $purchase) {
            $cost += $purchase->getCost();
        }
        return $cost;
    }

    /**
     * Retrieve an external iterator
     * @link http://php.net/manual/en/iteratoraggregate.getiterator.php
     * @return Traversable A    n instance of an object implementing <b>Iterator</b> or
     * <b>Traversable</b>
     * @since 5.0.0
     */
    public function getIterator()
    {
        return new \ArrayIterator($this->purchases);
    }
}
