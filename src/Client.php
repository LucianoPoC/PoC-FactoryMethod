<?php namespace App;
/**
 * Class Client
 * @package App
 * @author Luciano Jr <luciano@lucianojr.com.br>
 */
class Client
{
    private $_creator;

    /**
     * Client constructor.
     */
    public function __construct()
    {
        $this->_creator = new ConcreteCreator();
        echo $this->_creator->doFactory(new ProductCLI());
    }

}