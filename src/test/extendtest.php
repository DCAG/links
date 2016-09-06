<?php
/**
 * Created by PhpStorm.
 * User: digic
 * Date: 05/09/2016
 * Time: 22:05
 */

abstract class A
{
    //private static $x = 9;

    function get(){
        return static::$x;
    }
}

class B extends A
{
    private static $x = 6;
}

$b = new B();
echo $b->get();