<?php
/**
 * Created by PhpStorm.
 * User: admin
 * Date: 14/08/2016
 * Time: 10:09
 */

namespace links\controller;


use links\model\Snippet;

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
    public $createdBy;

    /**
     * @return mixed
     */
    public function getLinks()
    {
        return $this->links;
    }

    /**
     * @param mixed $links
     */
    public function setLinks($links)
    {
        $this->links = $links;
    }

    /**
     * @return mixed
     */
    public function getCreatedBy()
    {
        return $this->createdBy;
    }

    /**
     * @param mixed $createdBy
     * @return true when assign was successful and false when it isn't
     */
    public function setCreatedBy(string $createdBy)
    {
        if(isset($createdBy)) {
            $this->createdBy = $createdBy;
            return true;
        }
        else
            return false;
    } //nexus can be created by user, snippet is always created by a provider

    public function linkBreak(Snippet $snippet)
    {
        if(count($this->links) > 2 && isset($snippet))
        {
            unset($this->links[$snippet->linkedToAtIndex]);
            $snippet->linkedToAtIndex = -1;
            $snippet->linkedTo = null;
            /*
             * 1.remove groups belong to snippet from groups membership
             * 2.replace all groups members lists with the snippet instead of the nexus
             */
            return $snippet;
        }
        return null;
    }

    public function linkBreakMany(array $snippets)
    {
        foreach($snippets as $snippet)
        {
            $result += $this->linkBreak($snippet);
        }
    }


}