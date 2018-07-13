<?php

//Turn on error display
ini_set('display_errors',1);

require_once 'debug.php';
require_once 'config/config.php';

$controllerName = ($_SERVER['REQUEST_URI'] == '/')
    ? 'HomeController'
    : ucfirst(explode('/',$_SERVER['REQUEST_URI'])[1]) . 'Controller';

$controllerAction = (explode('/',$_SERVER['REQUEST_URI'])[2] == null)
    ? 'index'
    : explode('/',$_SERVER['REQUEST_URI'])[2];

$actionParams = (explode('/',$_SERVER['REQUEST_URI'])[3] == null)
    ? null
    : explode('/',$_SERVER['REQUEST_URI'])[3];


if (file_exists(CNT_PATH . $controllerName . '.php'))
{
    require_once CNT_PATH . $controllerName . '.php';
    call_user_func(array($controllerName,$controllerAction),$actionParams);
}else{
    require_once VIEW . '404.php';
}

















