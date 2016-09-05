<?php
/**
 * Created by PhpStorm.
 * User: admin
 * Date: 14/08/2016
 * Time: 14:19
 */

namespace links\model;


class MongoDBLinksDAO implements ILinksDAOFactory
{
    /**
     * @var Singleton The reference to *Singleton* instance of this class
     */
    private static $instance;

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
/*
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
*/
    /** @var $vo_class int */
    function getDAO($vo_class)
    {
        switch ($vo_class){
            case LinksModelEnum::User:
                return UserDAO::getInstance();
                break;
            case LinksModelEnum::Nexus:
                return NexusDAO::getInstance();
                break;
            case LinksModelEnum::Snippet:
                return SnippetDAO::getInstance();
                break;
            case LinksModelEnum::ResourceGroup:
                return ResourceGroupDAO::getInstance();
                break;
            default:
                return null;
                break;
        }
    }
}