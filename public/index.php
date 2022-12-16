<?php

ini_set('display_errors', 'On');
error_reporting(E_ALL);

define('ROOT', dirname(__DIR__));

Require_once ROOT.'/App/Autoloader.php';

App\Autoloader::register();

$page = 'home';
$action = 'show';


if(isset($_GET['page'])){
    $page = $_GET['page'];
}

if(isset($_GET['action'])){
    $action = $_GET['action'];
    if(isset($action) === 'showById'){
        if(isset($_GET['id']) && $_GET['id'] > 0){
            $id = $_GET['id'];
        }
    }
}

$nameController = 'App\Controller\\'.ucfirst($page).'Controller';

if(!class_exists($nameController) || !method_exists($nameController, $action)){
    header('Location: http://localhost/blog-oc-p5/OC-blogp5/public/');
}

$controller = new $nameController;

$controller->$action();