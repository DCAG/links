<?php
/**
 * Created by PhpStorm.
 * User: digic
 * Date: 10/09/2016
 * Time: 20:42
 */

namespace links\model;
require __DIR__ . '/../../vendor/autoload.php'; // include Composer goodies
use \MongoDB;

//http://codeutopia.net/blog/2009/01/05/decoupling-models-from-the-database-data-access-object-pattern-in-php/
class LinksDaoFactory
{
    private static $_instance;
    private static $db;

    public function __construct()
    {
        self::$db = (new MongoDB\Client("mongodb://127.0.0.1:27017"))->links;
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
        return new LinksNexusDaoMongoDB(self::$db);
    }

    /**
     * Get a Question DAO
     * @return ILinksSnippetDao
     */
    public function getSnippetDao()
    {
        return new LinksSnippetDaoMongoDB(self::$db);
    }

    /**
     * Get a Question DAO
     * @return ILinksResourceGroupDao
     */
    public function getResourceGroupDao()
    {
        return new LinksResourceGroupDaoMongoDB(self::$db);
    }

    /**
     * Get a Question DAO
     * @return ILinksUserDao
     */
    public function getUserDao()
    {
        return new LinksUserDaoMongoDB(self::$db);
    }
}