<?php
/**
 * Created by PhpStorm.
 * User: admin
 * Date: 14/08/2016
 * Time: 14:22
 */

namespace links\model;


interface ILinksDAO
{
    static function getInstance();
    function getUserDAO();
    function getSnippetDAO();
    function getNexusDAO();
    function getResourceGroupDAO();
}