<?php 
    require '../app/config/global.php';
    
    $controller = ucfirst(isset($_GET['controller']) ? $_GET['controller'] : 'employee');
    $action = isset($_GET['action']) ? $_GET['action'] : 'index';

    $controllerFile = APP_ROOT.'/app/controllers/'.$controller.'Controller.php';
    if(!file_exists($controllerFile)) {
        die('404 Not Found');
    }
    else {
        require $controllerFile;
        $controllerName = $controller.'Controller';
        $controller = new $controllerName();
        if(!method_exists($controller, $action)){
            die('404 Not Found');
        }
        else {
            call_user_func([$controller, $action]);
        }
    }
?>