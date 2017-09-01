<?php

namespace DesignPatterns\tests\Structural\Facade;

use DesignPatterns\Structural\Facade\Entities\Product\Name;
use DesignPatterns\Structural\Facade\Entities\Product\Product;
use DesignPatterns\Structural\Facade\Entities\Product\ProductId;
use DesignPatterns\Structural\Facade\Entities\Product\Status;
use PHPUnit\Framework\TestCase;

class FacadeTest extends TestCase
{
    public function testCreateProduct()
    {
        require_once __DIR__ . '/../../../vendor/autoload.php';

        $product = new Product(
            new ProductId(1),
            new Name('Test product 1'),
            new Status('active_yes')
        );
        $this->assertInstanceOf(Product::class, $product);
    }
}
