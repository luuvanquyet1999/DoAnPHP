<?php
define('SYSTEM_PATH', __DIR__);
$get_controller = empty($_GET['c'])?'Home':$_GET['c'];
$get_action = empty($_GET['a'])?'Index':$_GET['a'];
$controller = $get_controller.'Controller';
$path_controller = 'Controller/'.$controller.'.php';
//echo $path_controller;
if(!file_exists($path_controller)){
    header("location:/WebsiteHome");
}
require_once $path_controller;
if(!class_exists($controller)){
    die('controller không tồn tại!');
}
$controllerObject = new $controller;
if(!method_exists($controllerObject, $get_action)){
    die('action không tồn tại!');
}
$controllerObject->{$get_action}();