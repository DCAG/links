<?php
/**
 * Created by PhpStorm.
 * User: admin
 * Date: 05/09/2016
 * Time: 10:52
 */

namespace links\model;


abstract class BaseLinksDAO
{

    public static $address;
    public static $port;
    public static $db;

    /**
     * Returns the *Singleton* instance of this class.
     *
     * @return Singleton The *Singleton* instance.
     */
    public static function getInstance()
    {

        if (null === static::$instance) {
            //load the address port and dbs from a file or a DIC - but what about the DIC in the rest slim framework???
            static::$instance = new static();
        }

        return static::$instance;
    }

    /**
     * Protected constructor to prevent creating a new instance of the
     * *Singleton* via the `new` operator from outside of this class.
     */
    protected function __construct()
    {
        if(static::$instance != null )
        {
            throw new LinksPlatformException("Invalid operation. Instance already exists.");
        }
        try{
            //create session factory
        }
        catch(\Exception $ex){

        }
    }

    /**
     * Private clone method to prevent cloning of the instance of the
     * *Singleton* instance.
     *
     * @return void
     */
    private function __clone()
    {
    }

    /**
     * Private unserialize method to prevent unserializing of the *Singleton*
     * instance.
     *
     * @return void
     */
    private function __wakeup()
    {
    }
}