<?php
    $controller = 'formulario';

    if (isset($_REQUEST['c'])){
        $controller = strtolower($_REQUEST['c']);
        $accion = isset($_REQUEST['a']) ? $_REQUEST['a'] : 'Login';

        require_once "$controller.Controller.php";
        $controller = ucwords($controller) . 'Controller';
        $controller = new $controller;

        call_user_func(array( $controller,$accion));
    }

?>