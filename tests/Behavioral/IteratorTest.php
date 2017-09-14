<?php

namespace DesignPatterns\Tests\Behavioral;

use DesignPatterns\Behavioral\Iterator\Cart;
use DesignPatterns\Behavioral\Iterator\Purchase;
use PHPUnit\Framework\TestCase;

/**
 * Class IteratorTest
 * @package DesignPatterns\Tests\Behavioral
 */
class IteratorTest extends TestCase
{
    public function __construct($name = null, array $data = [], $dataName = '')
    {
        parent::__construct($name, $data, $dataName);

        require_once __DIR__ . '/../../vendor/autoload.php';
    }

    public function testCanIterateOverCart()
    {
        $cart = new Cart();
        $cart->addPurchase(new Purchase(50));
        $cart->addPurchase(new Purchase(75));

        $purchases = [];
        foreach ($cart as $purchase) {
            $purchases[] = $purchase->getCost();
        }

        $this->assertEquals([50, 75], $purchases);
    }
}
