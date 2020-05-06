<?php
// client
$options= array(
  'location' 	=>	'http://172.17.0.2',
  'uri'		=>	'http://172.17.0.2'
);

//by default SOAP 1.1 is used.
$client=new SoapClient(NULL,$options);
echo $client->getMessage();  //Hello,World!
echo $client->addNumbers(3,5); //  8
?>
