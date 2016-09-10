<?php
/**
 * Created by PhpStorm.
 * User: admin
 * Date: 05/09/2016
 * Time: 09:59
 */

namespace links\model;


interface ILinksEntityDAO
{
    static function getInstance();

    //
    function findById($id);

    //create | update
    function save($entity);

    //
    function remove($entity);
}