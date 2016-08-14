<?php
/**
 * Created by PhpStorm.
 * User: DCAG
 * Date: 14/08/2016
 * Time: 10:09
 */

namespace links\model;


class Snippet extends resource
{
    /*
     * Snippet properties:
     */
    public $id;
    /**
     * @var $provider
     * the provider that created this class and is updating it through changes.
     */
    public $provider;
    /**
     * @var $referenceId
     * the data property value which the provider references to when updating from its corresponding data source.
     */
    public $referenceId;
    /**
     * @var $displayName
     */
    public $displayName;
    /**
     * @var $data
     * snippet data collected from the provider.
     * represented by one object
     */
    public $data;
    /**
     * @var $linkedTo
     * contains the id of the nexus object that this snippet is linked to. Left empty if not linked to any nexus.
     */
    public $linkedTo;
    /*
     * Snippet functions:
     */



}