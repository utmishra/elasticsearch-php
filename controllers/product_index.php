<?php

// Define app routes
$app->get('/', function () use ($app) {
	$output = Services/Index/Product::index();
});

?>