<?php
/**
 * Created by PhpStorm.
 * User: digic
 * Date: 10/09/2016
 * Time: 21:59
 */

namespace links\model;


interface ILinksBaseDao
{
    //
    function findById($id);

    //create | update
    function save($entity);

    //
    function remove($entity);
}