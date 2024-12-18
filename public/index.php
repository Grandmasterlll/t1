<?php
//phpinfo();
//var_dump(PHP_VERSION);

//$start_framework = microtime(true);

if(PHP_MAJOR_VERSION<8){
    die('Require PHP version >= 8');
}

require_once __DIR__.'/../config/config.php';
require_once __DIR__.'/../vendor/autoload.php';
require_once HELPERS.'/helpers.php';



$app = new \Framework4iper\Application();

require_once CONFIG.'/routes.php';

$app->run();

//dump("Time: " . microtime(true) - $start_framework);