<?php namespace App;
/**
 * Created by PhpStorm.
 * User: luciano
 * Date: 28/04/15
 * Time: 09:42
 */

require_once('ConcreteCreator.php');
require_once('ProductGUI.php');
require_once('ProductCLI.php');

class Client
{
    private $creator;

    /**
     * Client constructor.
     */
    public function __construct()
    {
        $this->creator = new ConcreteCreator();
        echo $this->creator->doFactory(new ProductCLI());
    }

}
$worker = new Client();