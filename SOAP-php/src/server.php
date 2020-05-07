<?php

// Based on https://gist.github.com/elvisciotti/4586286
// moved MySoapServer into another file and import it.
require_once("MySoapServer.php");

$options= array('uri'=>'http://localhost/test');
$server=new SoapServer(NULL,$options);
$server->setClass('MySoapServer');
$server->handle();
?>

