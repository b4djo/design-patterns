<?php

namespace DesignPatterns\tests\Structural;

use DesignPatterns\app\Structural\FluentInterface\Sql;
use PHPUnit\Framework\TestCase;

/**
 * Class FluentInterface
 * @package DesignPatterns\tests\Structural
 */
class FluentInterface extends TestCase
{
    public function __construct($name = null, array $data = [], $dataName = '')
    {
        parent::__construct($name, $data, $dataName);

        require_once __DIR__ . '/../../vendor/autoload.php';
    }

    public function testBuildSQL()
    {
        $query = (new Sql())
            ->select(['foo', 'bar'])
            ->from('foobar', 'f')
            ->where('f.bar = ?');

        $this->assertEquals('SELECT foo, bar FROM foobar AS f WHERE f.bar = ?', (string)$query);
    }
}
