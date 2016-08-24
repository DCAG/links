<?php
/**
 * Created by PhpStorm.
 * User: admin
 * Date: 14/08/2016
 * Time: 12:34
 */

namespace links\executor\engine;


use links\model\Snippet;

class Provider
{
    public $executable; //program/script
    public $arguments;
    public $workingDirectory;

    public $trigger;

    public $name;
    public $description;

    private function BuildExecString(){
        return "$this->workingDirectory"."$this->executable"."$this->arguments";
    }

    public function Run(){
        $jsonObjects = shell_exec($this->BuildExecString());
        /*
         * JSON must be UTF-8 and more info on command and links to RFC
         * link: http://php.net/manual/en/function.json-decode.php
         */
        $arrayObjects = json_decode($jsonObjects);
        foreach ($arrayObjects as $obj) {
            $snip = new Snippet();
            $snip->data = $obj;
            $snip->createdBy = "provider";
            $snip->provider = $this->name;//how snippet is saved to DB? need to create ref?
            $snip->creationTime = Ev::now();
            $snip->displayName = $obj->/*{selected property in config file}*/ //may want to specify 2 properties - key (to look by) and display name(more easy to look at then GUI for example)
        }


    }
}