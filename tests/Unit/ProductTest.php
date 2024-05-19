<?php

use PHPUnit\Framework\TestCase;

class ProductTest extends TestCase
{
    public function testProductName()
    {
        $product = new Product('Apple', 1.99);
        $this->assertEquals('Apple', $product->getName());
    }

    public function testProductPrice()
    {
        $product = new Product('Orange', 2.49);
        $this->assertEquals(2.49, $product->getPrice());
    }
}

class Product
{
    private $name;

    private $price;

    public function __construct($name, $price)
    {
        $this->name = $name;
        $this->price = $price;
    }

    public function getName()
    {
        return $this->name;
    }

    public function getPrice()
    {
        return $this->price;
    }
}
