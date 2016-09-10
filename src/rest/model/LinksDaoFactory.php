<?php
/**
 * Created by PhpStorm.
 * User: digic
 * Date: 10/09/2016
 * Time: 20:42
 */

namespace links\model;

//http://codeutopia.net/blog/2009/01/05/decoupling-models-from-the-database-data-access-object-pattern-in-php/
class LinksDaoFactory
{
    private static $_instance;
    private static $MongoConnection;

    public function __construct()
    {
        $MongoConnection = new MongoDB\Client("mongodb://127.0.0.1:27017");
    }

    /**
     * Set the factory instance
     * @param LinksDaoFactory $f
     */
    public static function setFactory(LinksDaoFactory $f)
    {
        self::$_instance = $f;
    }

    /**
     * Get a factory instance.
     * @return LinksDaoFactory
     */
    public static function getFactory()
    {
        if(!self::$_instance)
            self::$_instance = new self;

        return self::$_instance;
    }

    /**
     * Get a Question DAO
     * @return ILinksNexusDao
     */
    public function getNexusDao()
    {
        return new LinksNexusDaoMongoDB();
    }

    /**
     * Get a Question DAO
     * @return ILinksSnippetDao
     */
    public function getSnippetDao()
    {
        return new LinksSnippetDaoMongoDB();
    }

    /**
     * Get a Question DAO
     * @return ILinksResourceGroupDao
     */
    public function getResourceGroupDao()
    {
        return new LinksResourceGroupDaoMongoDB();
    }

    /**
     * Get a Question DAO
     * @return ILinksUserDao
     */
    public function getUserDao()
    {
        return new LinksUserDaoMongoDB();
    }
}