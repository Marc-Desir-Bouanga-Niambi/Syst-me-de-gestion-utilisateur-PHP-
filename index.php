<?php
require_once 'controllers/usercontroller.php';
require_once 'database.php';

$method = $_SERVER['REQUEST_METHOD'];
$action = $_GET['action'] ?? 'login';


switch($action) {

case 'login':
        $controller = new UserController($pdo);
        $controller->login($method);
        break;

    case 'register':
        $controller = new UserController($pdo);
        $controller->register($method);
        break;

    case 'profile':
        $controller = new UserController();
        $controller->profle();
        break;

    default:
        echo "Page non trouvée";
}


?>