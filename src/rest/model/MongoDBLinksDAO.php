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
    public $address;
    public $port;
    public $db;

    IUserDAO $userDAO;
    public $snippetDAO;
    public $nexusDAO;
    public $resourceGroupDAO;

    function getInstance()
    {
        // TODO: Implement getInstance() method.
    }

    function getUserDAO()
    {
        $this->userDAO = new UserDAO();
    }

    function getSnippetDAO()
    {
        // TODO: Implement getSnippetDAO() method.
    }

    function getNexusDAO()
    {
        // TODO: Implement getNexusDAO() method.
    }

    function getResourceGroupDAO()
    {
        // TODO: Implement getResourceGroupDAO() method.
    }
}