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

    public function getAllUsers () {
        $stmt = $this->pdo->prepare("SELECT * FROM users"); 
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function getUserById ($id) {
        $stmt = $this->pdo->prepare("SELECT * FROM users WHERE id = :id");
        $stmt->execute([
            'id' => $id
        ]);

        return $stmt->fetch(PDO::FETCH_ASSOC);
    }


    public function updateEmail ($id,$email) {
        $stmt = $this->pdo->prepare("UPDATE users SET email = :email WHERE id= :id");
        $stmt->execute([
            'id' => $id,
            'email' => $email
        ]);
        
    }

    public function UpdateRole ($id, $role) {
        $stmt = $this->pdo->prepare("UPDATE users SET role = :role WHERE id = :id ");
        $stmt->execute([
            'id' => $id,
            'role' => $role
        ]);
    }

    

    public function deleteUser ($id) {
        $stmt = $this->pdo->prepare("DELETE FROM users WHERE id=:id");
        $stmt->execute([
            'id' => $id,
        ]);
    }

}

?>