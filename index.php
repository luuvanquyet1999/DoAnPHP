<?php
session_start();


define('SYSTEM_PATH', __DIR__);
$get_controller = empty($_GET['c']) ? 'Home' : $_GET['c'];
$get_action = empty($_GET['a']) ? 'Index' : $_GET['a'];
$controller = $get_controller . 'Controller';
$path_controller = 'Controller/' . $controller . '.php';
//echo $path_controller;
if (!file_exists($path_controller)) {
    require_once "./mvc/Bridge.php";
    $myApp = new App();
   die();
}
require_once $path_controller;
if (!class_exists($controller)) {
    require_once "./mvc/Bridge.php";
    $myApp = new App();
    die('controller không tồn tại!');
}
$controllerObject = new $controller;
if (!method_exists($controllerObject, $get_action)) {
    require_once "./mvc/Bridge.php";
    $myApp = new App();
    die('action không tồn tại!');
}
$controllerObject->{$get_action}();


?>