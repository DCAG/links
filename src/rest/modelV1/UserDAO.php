<?php
/**
 * Created by PhpStorm.
 * User: admin
 * Date: 14/08/2016
 * Time: 14:28
 */

namespace links\model;


class UserDAO implements IUserDAO
{

    static function getInstance()
    {
        // TODO: Implement getInstance() method.
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

    /**
     * @inheritDoc
     */
    function create(User $user)
    {
        // TODO: Implement create() method.
    }

    /**
     * @inheritDoc
     */
    function findByLogin($login)
    {
        // TODO: Implement findByLogin() method.
    }

    /**
     * @inheritDoc
     */
    function update($user)
    {
        // TODO: Implement update() method.
    }

    /**
     * @inheritDoc
     */
    function delete($user)
    {
        // TODO: Implement delete() method.
    }
}