<?php
/**
 * Created by PhpStorm.
 * User: admin
 * Date: 25/08/2016
 * Time: 10:02
 */

namespace links\model;


class LinksDAO implements ILinksDAO
{
    private static $INSTANCE;
    public static function getInstance()
    {
        if(isset)
    }

    /**
     * @inheritDoc
     */
    private function __construct()
    {

    }


    function getDAO($vo_class)
    {
        switch($vo_class)
        {
            case "Nexus":
                return NexusDAO::getInstance();
                break;
            case "ResourceGroup":
                return ResourceGroupDAO::getInstance();
                break;
            case "Snippet":
                return SnippetDAO::getInstance();
                break;
            default:
                return null;
                break;
        }
    }
}