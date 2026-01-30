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
        $controller = new UserController($pdo);
        $controller->profile();
        break;
    
    case 'adminPage':
        $controller = new UserController($pdo);
        $controller->adminPage();
        break;
    
    case 'logout':
        $controller = new UserController($pdo);
        $controller->logout();

    default:
        echo "Page non trouvée";
}


?>