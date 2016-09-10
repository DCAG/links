<?php
/**
 * Created by PhpStorm.
 * User: admin
 * Date: 11/08/2016
 * Time: 16:21
 */

namespace links\model;


class User
{
    public $id;
    public $login;
    public $pwd;

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param mixed $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * @return mixed
     */
    public function getLogin()
    {
        return $this->login;
    }

    /**
     * @param mixed $login
     */
    public function setLogin($login)
    {
        if(isset($login) && strlen($login) > 0)
            $this->login = $login;
    }

    /**
     * @return mixed
     */
    public function getPwd()
    {
        return $this->pwd;
    }

    /**
     * @param mixed $pwd
     */
    public function setPwd($pwd)
    {
        if(isset($login) && strlen($login) > 0)
            $this->pwd = $pwd;
    }
}