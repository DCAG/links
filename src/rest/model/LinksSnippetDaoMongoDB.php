<?php
/**
 * Created by PhpStorm.
 * User: digic
 * Date: 10/09/2016
 * Time: 21:58
 */

namespace links\model;


class LinksSnippetDaoMongoDB implements ILinksSnippetDao
{
    private $collection;
    /**
     * LinksSnippetDaoMongoDB constructor.
     */
    public function __construct($db)
    {
        $collection = $db->snippet;
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