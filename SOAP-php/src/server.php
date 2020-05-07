<?php

// Based on https://gist.github.com/elvisciotti/4586286
// server - supports client using SOAP 1.1 and 1.2
class MySoapServer
{
  public function getMessage()
  {
    return 'Hello,World!';
  }
  
  public function addNumbers($num1,$num2)
  {
    return $num1+$num2;
  }

  public function sayHello($name){
    return 'Hello,' . $name;
  }
}

$options= array('uri'=>'http://localhost/test');
$server=new SoapServer(NULL,$options);
$server->setClass('MySoapServer');
$server->handle();
?>

