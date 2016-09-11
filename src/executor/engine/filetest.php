<?php
/**
 * Created by PhpStorm.
 * User: admin
 * Date: 24/08/2016
 * Time: 10:29
 */

require __DIR__ . '/../../vendor/autoload.php'; // include Composer goodies

var_dump(phpversion("mongodb"));

$nexcol = (new MongoDB\Client("mongodb://127.0.0.1:27017"))->links->nexus;

$nexcol->insertOne([ 'name' => 'Hinterland', 'brewery' => 'BrewDog' ]);


/*

$pvdADComps = new \links\executor\engine\Provider();
$pvdADComps->workingDirectory = '.';
$pvdADComps->executable = 'powershell.exe';
$pvdADComps->arguments = 'src\executor\engine\Providers\ADComputers\Get-linksADComputers.ps1';
$pvdADComps->name = "DSCLabDomainComputers";


$path = 'src\executor\engine\Providers\ADComputers\ADComputersJSON.json';
$path=str_replace("\\","/",$path);
//echo $path;
echo "\n";
$myfile = fopen($path,"r") or die ("Unable to open file!");
$data = fread($myfile,filesize($path));
//echo mb_detect_encoding($data,'UTF-8',true)."\n";
//echo $data."\n";
//the data must be on one line
//echo shell_exec("mongoimport.exe");
echo shell_exec("powershell -file  | mongoimport.exe --db test --collection adcomp --type json --jsonArray 2>&1");
fclose($myfile);
*/