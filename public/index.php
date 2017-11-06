<?php

require __DIR__.'/../vendor/autoload.php';


$app = new Luba\Framework\Application(rtrim(__DIR__, 'public'));

$app->run();