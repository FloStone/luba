<?php

require __DIR__.'/../vendor/autoload.php';

$routes = include __DIR__.'/../routes.php';
$params = explode('/', ltrim($_SERVER['REQUEST_URI'], '/'));
$action = explode('?', array_shift($params))[0];

if (isset($routes[$action]))
{
	$controller = controller($routes[$action]);
	
	if (empty($params) or $params[0] == "")
		return 'HUHU';
}

include __DIR__.'/../controllers/TestController.php';

echo 'HUHU';