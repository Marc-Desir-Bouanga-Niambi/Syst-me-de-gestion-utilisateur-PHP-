<?php
require_once 'controllers/usercontroller.php';

$action = $_GET['action'] ?? 'home';


switch($action) {

case 'login':
        $controller = new UserController();
        $controller->login();
        break;

    case 'register':
        $controller = new UserController();
        $controller->register();
        break;

    case 'profile':
        $controller = new UserController();
        $controller->profle();
        break;

    default:
        echo "Page non trouvée";
}


?>