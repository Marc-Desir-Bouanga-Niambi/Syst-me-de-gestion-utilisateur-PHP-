<?php
require_once "database.php";

class User {
    private $pdo;

    public function __construct(PDO $pdo) {
        $this->pdo = $pdo;
    }

    public function findByEmail($email) {
        $stmt = $this->pdo->prepare("SELECT * FROM users WHERE email= :email");
        $stmt->execute([
            'email' => $email
        ]);

        return $stmt->fetch(PDO::FETCH_ASSOC); 
    }

    public function createUser ($email, $password_hash) {
        $stmt = $this->pdo->prepare("INSERT INTO users(email,password) VALUES(:email,:password) ");
        $stmt->execute([
            'email'=>$email,
            'password'=>$password_hash
        ]);  


    }

    public function updateUser () {
        
    }

}

?>