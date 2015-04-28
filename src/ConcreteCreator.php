<?php namespace App;
/**
 * Created by PhpStorm.
 * User: luciano
 * Date: 28/04/15
 * Time: 09:43
 */

class ConcreteCreator extends Creator
{
    private $product;
    function factoryMethod(Product $productType)
    {
        $this->product = $productType;
        return $this->product->getProperties();
    }
}