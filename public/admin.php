<?php

ini_set('display_errors', 'On');
error_reporting(E_ALL);

define('ROOT', dirname(__DIR__));
define('WEBSITE_URL', 'http://webstart.local/');


Require_once '../Core/Autoloader.php';

App\Autoloader::register('Admin');

$page = 'home';
$action = 'show';

if(isset($_GET['page'])){
    $page = $_GET['page'];
}

if(isset($_GET['action'])){
    $action = $_GET['action'];
}

$nameController = ucfirst($page).'Controller';

if(!class_exists($nameController) || !method_exists($nameController, $action)){
    header('Location: '.WEBSITE_URL);
}

$controller = new $nameController;

$controller->$action();





