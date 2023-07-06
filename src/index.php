<?php
    // main contoller

    // define the base directory and base url
    define('BASE_DIR', dirname(__FILE__));
    define('BASE_URL', 'http://localhost/');

    // checking the modules
    if (empty($_REQUEST['module'])) {
        die("<h1>Module Not Specified<br>Plese the url</h1>");
    }
    if (empty($_REQUEST['action'])) {
        die("<h1>Module Not Specified<br>Plese the url</h1>");
    }
    $module = $_REQUEST['module'];
    $action = $_REQUEST['action'];
    $controller = sprintf("%s%s",$module, 'Controller');
    if(file_exists("controllers/$controller.php")){
        include("controllers/$controller.php");
        $activeController = new $controller();
        if (method_exists($activeController, $action)){
            $activeController->$action($_REQUEST);
        } else {
            die("<h1>Specified action $action of this module $module does not exists");
        }
    } else {
        die("<h1>Specified module $module does not exists");
    }
?>