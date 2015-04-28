<?php namespace App;
/**
 * Created by PhpStorm.
 * User: luciano
 * Date: 28/04/15
 * Time: 09:45
 */

require_once('Product.php');

class ProductCLI implements Product{

    public function getProperties()
    {
        return "Product CLI";
    }
}