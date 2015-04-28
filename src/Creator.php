<?php namespace App;
/**
 * Created by PhpStorm.
 * User: luciano
 * Date: 28/04/15
 * Time: 09:43
 */

abstract class Creator
{
    abstract function factoryMethod(Product $productType);
    public function doFactory(Product $productType)
    {
        return $this->factoryMethod($productType);
    }
}