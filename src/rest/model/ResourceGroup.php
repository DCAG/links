<?php
/**
 * Created by PhpStorm.
 * User: admin
 * Date: 14/08/2016
 * Time: 10:11
 */

namespace links\model;


class ResourceGroup
{
    public $id;
    public $name;
    public $members;
    public $lastUpdated;


    public function __construct()
    {

    }

    public function __destruct()
    {
        // TODO: Implement __destruct() method.
    }
}