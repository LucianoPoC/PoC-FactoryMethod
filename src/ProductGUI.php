<?php namespace App;
/**
 * Created by PhpStorm.
 * User: luciano
 * Date: 28/04/15
 * Time: 09:44
 */

class ProductGUI implements Product
{

    public function getProperties()
    {
        return "Product GUI";
    }
}