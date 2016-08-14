<?php
/**
 * Created by PhpStorm.
 * User: admin
 * Date: 14/08/2016
 * Time: 10:09
 */

namespace links\controller;


class Nexus
{
    /**
     * @var $links
     * the links to the snippets that created assemble this nexus
     */
    public $links; //members
    /**
     * @var $createdBy
     * equivalent to snippets' provider, but with users
     */
    public $createdBy; //nexus can be created by user, snippet is always created by a provider
}