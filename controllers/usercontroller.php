<?php
session_start();
require_once "models/user.php";

class UserController {
    private $pdo;

    public function __construct(PDO $pdo) {
        $this->pdo = $pdo;
    }


    public function login ($method) {
        $error = null;
        $success = null;
        //Verfie si la requête est de type POST
        if($method === 'POST') {
            $email = trim($_POST['email'] ?? '');
            $password = $_POST['password'] ?? '';

            //Verifie si les champs ne sont pas vides
            if(!empty($email) && !empty($password)) {

                $user= new User($this->pdo);

                $resultat = $user->findByEmail($email);

                if($resultat) {
                    $hash = $resultat["password"];

                    if(password_verify($password, $hash)) {
                        $success = "Vous êtes connecté";
                        $_SESSION['user_id'] = $resultat["id"];

                        } else {
                    }

                } else {
                    $error = "Votre email n'existe pas veuillez créer un compte!";
                }            

            } else {
                $error = "Veuillez remplir tous vos champs s'il vous plaît";
            }
        }

        require 'views/login.php';
    }

    public function register($method) {
        $error = null;
        $success = null;
        
        if($method === 'POST') {
                $email = trim($_POST['email'] ?? '');
                $password = $_POST['password'] ?? '';

            if(!empty($email) && !empty($password)) {
                $password_hash = password_hash($password,PASSWORD_DEFAULT);
                
                $userModel = new User($this->pdo);
                $user = $userModel->findByEmail($email);
                
                if($user) {
                    $error= "Votre email existe déjà! Veuillez le changer s'il vous plaît!";
                } else {                    
                    $userModel->createUser($email,$password_hash);
                    $success = "Votre compte a été créé";
                }
            } else {
                $error = "Veuillez remplir tous vos champs s'il vous plaît";
            }
        }

        require 'views/register.php';
    }

    public function profile() {
        require 'views/profile.php';
    }
}

?>