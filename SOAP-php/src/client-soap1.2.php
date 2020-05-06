<?php
// client
$options= array(
  'location' 	=>	'http://172.17.0.2',
  'uri'		=>	'http://172.17.0.2',
  'soap_version' =>	SOAP_1_2
);

//explicitly set to SOAP 1.2
$client=new SoapClient(NULL,$options);
echo $client->getMessage();  //Hello,World!
echo $client->addNumbers(3,5); //  8
?>
