<?php
/**
 * Created by PhpStorm.
 * User: admin
 * Date: 14/08/2016
 * Time: 10:46
 */

namespace links\model;


class LinksResource
{
    public $id;
    /**
     * @var $displayName
     */
    public $displayName;
    /**
     * @var $memberOf
     * contains an array of ids of resourceGroups that this snippet is member of.
     */
    public $memberOf;
    /**
     * @var $lastUpdated
     * last updated by the provider.
     */
    public $lastUpdated;
    /**
     * @var
     */
    public $modifiedBy;
    /**
     * @var
     */
    public $creationTime;
    /**
     * @var $createdBy
     * created by a provider or a user
     */
    public $createdBy;
}