<?php

require __DIR__.'/../vendor/autoload.php';

try
{
	$app = new Luba\Framework\Application(rtrim(__DIR__, 'public'));

	$app->run();	
}
catch (Exception $e)
{
	print $e->getMessage();
}