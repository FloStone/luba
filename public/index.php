<?php

require __DIR__.'/../vendor/autoload.php';

try
{
	$app = new Luba\Framework\Application(rtrim(__DIR__, 'public'));

	register($app);

	$app->run();
}
catch (Exception $e)
{
	echo "<span stye=\"color:red\">".$e->getMessage()."</span>";
}