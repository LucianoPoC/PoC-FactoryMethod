<?php
/**
 * Created by PhpStorm.
 * User: luciano
 * Date: 28/04/15
 * Time: 09:44
 */

require_once('Product.php');

class ProductGUI implements Product {

    public function getProperties()
    {
        return "Product GUI";
    }
}