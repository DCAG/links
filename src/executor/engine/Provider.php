<?php
/**
 * Created by PhpStorm.
 * User: admin
 * Date: 14/08/2016
 * Time: 12:34
 */

namespace links\executor\engine;


class Provider
{
    public $executable; //program/script
    public $arguments;
    public $workingDirectory;

    public $trigger;

    public $name;
    public $description;
}