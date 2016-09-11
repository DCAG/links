<?php
/**
 * Created by PhpStorm.
 * User: admin
 * Date: 14/08/2016
 * Time: 12:32
 */

namespace links\model;


class NexusDAO extends BaseLinksDAO implements INexusDAO
{
    private static $instance;
    private static $collection = "Nexus";
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
            return parent::$db->$collection;
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

    function findById($id)
    {
        // TODO: Implement findById() method.
    }

    function save($entity)
    {
        // TODO: Implement save() method.
    }

    function remove($entity)
    {
        // TODO: Implement remove() method.
    }
}