<?php
/**
 * Created by PhpStorm.
 * User: admin
 * Date: 24/08/2016
 * Time: 10:29
 */

$path = "file://C:/Users/admin/Documents/GitHubDCAG/links/src/executor/engine/Providers/ADComputers/ADComputersJSON.json";
$myfile = fopen($path,"r") or die ("Unable to open file!");
$data = fread($myfile,filesize($path));
//echo mb_detect_encoding($data,'UTF-8',true);
//shell_exec("dir");
//the data must be on one line
echo shell_exec("echo $data | mongoimport.exe --db test1 --collection adcomp --type json --jsonArray 2>&1");
fclose($myfile);
