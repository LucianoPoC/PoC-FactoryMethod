<?php namespace App;
/**
 * Created by PhpStorm.
 * User: luciano
 * Date: 28/04/15
 * Time: 09:45
 */

class ProductCLI implements Product
{

    public function getProperties()
    {
        return "Product CLI";
    }
}