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
            BaseLinksDAO::$address = "127.0.0.1";
            BaseLinksDAO::$port = 80;
            BaseLinksDAO::$db = "linksTest";
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