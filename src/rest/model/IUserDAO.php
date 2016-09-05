<?php
/**
 * Created by PhpStorm.
 * User: admin
 * Date: 14/08/2016
 * Time: 14:28
 */

namespace links\model;


interface IUserDAO extends ILinksEntityDAO
{
    /**
     * @param $user
     * Store the new user and assign a unique auto-generated ID.
     */
    //function create(User $user);

    /**
     * @param $id
     * Return the user with the given auto-generated ID.
     */
    //function findById($id);

    /**
     * @param $login
     * Return the user with the given login ID.
     */
    //function findByLogin($login);

    /**
     * @param $user
     * Update the user's fields.
     */
    //function update($user);

    /**
     * @param $user
     * Delete the user from the database.
     */
    //function delete($user);
}