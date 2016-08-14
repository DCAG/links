<?php
/**
 * Created by PhpStorm.
 * User: admin
 * Date: 14/08/2016
 * Time: 10:46
 */

namespace links\model;


class resource
{
    /**
     * @var $memberOf
     * contains an array of ids of resourceGroups that this snippet is member of.
     */
    public $memberOf;
    /**
     * @var $extensions
     * key-value pairs of additional data.
     * designed initially to be used by users.
     */
    public $extensions;
    /**
     * @var $lastUpdated
     * last updated by the provider.
     */
    public $lastUpdated;
}