<?php
use micro\controllers\Startup;
use micro\controllers\Autoloader;
error_reporting(E_ALL);

define('DS', DIRECTORY_SEPARATOR);
define('ROOT', realpath('app').DS);

$config=include_once ROOT.'config.php';

require_once ROOT.'micro/controllers/Autoloader.php';
require_once ROOT.'./../vendor/autoload.php';

Autoloader::register();

if(file_exists(ROOT.DS."install.php")){
	include ROOT.DS."install.php";
	exit;
}

Startup::run();

//JCHERON
