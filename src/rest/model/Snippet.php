<?php
/**
 * Created by PhpStorm.
 * User: DCAG
 * Date: 14/08/2016
 * Time: 10:09
 */

namespace links\model;


class Snippet extends LinksResource
{
    /*
     * Snippet properties:
     */

    /**
     * @var $provider \links\executor\engine\engine
     * the provider that created this class and is updating it through changes.
     */
    public $provider;
    /**
     * @var $referenceId
     * the data property value which the provider references to when updating from its corresponding data source.
     */
    //public $referenceId;
    /**
     * @var $data object
     * snippet data collected from the provider.
     * represented by one object
     */
    public $data;
    /**
     * @var $linkedTo \links\model\Nexus
     * contains the id of the nexus object that this snippet is linked to. Left empty if not linked to any nexus.
     */
    public $linkedTo;

    /*
     * Snippet functions:
     */
    /**
     * @inheritDoc
     */
    public function __construct()
    {

    }


    public function linkToExistingNexus(Nexus $nexus){
        if(empty($linkedTo) && isset($nexus))
        {
            return $nexus->addLink($this);
        }
        return null;
    }

    public function linkToCreateNexus(Snippet $link){
        if(empty($linkedTo) && isset($link) && empty($link->linkedTo))
        {
            return (new Nexus())->addLink($this)->addLink($link);
        }
        return null;
    }


}