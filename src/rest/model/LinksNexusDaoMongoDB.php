<?php
/**
 * Created by PhpStorm.
 * User: digic
 * Date: 10/09/2016
 * Time: 21:57
 */

namespace links\model;
require __DIR__ . '../../vendor/autoload.php'; // include Composer goodies

class LinksNexusDaoMongoDB implements ILinksNexusDao
{
    private $collection;
    /**
     * LinksNexusDaoMongoDB constructor.
     */
    public function __construct()
    {
        $client = new MongoDB\Driver\Manager(); //("mongodb://localhost:27017");
        $collection = (new MongoDB\Client("mongodb://127.0.0.1:27017"))->links->nexus;
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