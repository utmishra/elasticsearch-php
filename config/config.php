<?php

include 'defines.php';
include '../vendor/autoload.php';

$config = array('host' => ES_HOST, 
	'port' => ES_PORT);
$client = new \Elastica\Client($config);
?>