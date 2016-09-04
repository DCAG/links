<?php
/**
 * Created by PhpStorm.
 * User: admin
 * Date: 14/08/2016
 * Time: 14:19
 */

namespace links\model;


class MongoDBLinksDAO implements ILinksDAO
{
    /**
     * @var Singleton The reference to *Singleton* instance of this class
     */
    private static $instance;
    public $address;
    public $port;
    public $db;

    private static $userDAO;
    private static $snippetDAO;
    private static $nexusDAO;
    private static $resourceGroupDAO;

    /**
     * Returns the *Singleton* instance of this class.
     *
     * @return Singleton The *Singleton* instance.
     */
    public static function getInstance($linksModelEntity)
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

    function getUserDAO()
    {
        if(!isset($this->userDAO))
            $this->userDAO = new UserDAO($this);
    }

    function getSnippetDAO()
    {
        if(!isset($this->snippetDAO))
        $this->snippetDAO = new SnippetDAO($this);
    }

    function getNexusDAO()
    {
        if(!isset($this->nexusDAO))
        $this->nexusDAO = new NexusDAO($this);
    }

    function getResourceGroupDAO()
    {
        if(!isset($this->ResourceGroupDAO))
        $this->resourceGroupDAO = new ResourceGroupDAO($this);
    }
}