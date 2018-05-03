<?php
require __DIR__ . '/../bootstrap.php';


$var = substr($_SERVER['REQUEST_URI'],1);
$var =explode('/',$var);
$controller = isset($var[0]) && $var[0] ? $var[0] : 'page';
$action = isset($var[1]) && $var[1] ? $var[1] : 'index';
$param = isset($var[2]) && $var[2] ? $var[2] : null;
if(!class_exists($controller = "Code\Controller\\".ucfirst($controller).'Controller')){
    die('404- pagina não encontrada');
}
if(!method_exists($controller,$action)){
    $action = 'index';
    $param = $var[1];
}
$response = call_user_func_array([new $controller,$action],[$param]);

print $response;
