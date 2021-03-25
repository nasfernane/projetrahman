<?php
require './vendor/autoload.php';
require 'AltoRouter.php';
$router = new AltoRouter();

// $router->setBasePath('KAMARA_ABDULRAHMAN-ECF202012_1/');


$router->map('GET', '/', function () {   
    require __DIR__ . "./database/login.php"; 
});

$router->map('GET', '/test', function () {;
    require './views/home.php';
});

$router->map('GET', '', function () {
    echo "rahman";
});

$match = $router->match();
if ($match !== null) {
    $match['target']();
}
