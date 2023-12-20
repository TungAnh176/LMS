<?php
session_start();
    require_once './config/constant.php';
    require_once APP_Root .'/app/config/Database.php';

    require_once APP_Root . '/app/services/UserService.php';

    $controller = isset($_GET['c']) ? $_GET['c'] : 'home';
    $action = isset($_GET['a']) ? $_GET['a'] : 'index';

    $controllerClass = ucfirst($controller).'Controller';
    $controllerFile = "controllers/$controllerClass".'.php';
    if (isset($controllerFile)) {
        require_once $controllerFile;
        $c = new $controllerClass();
        $c->$action();
    }
    else {
        echo 'Controller not found';
    }
?>