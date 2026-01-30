<?php
$host = "localhost";
$dbname = "users_management";
$user = "root";
$password = "famille";

try {
    $pdo = new PDO (
        "mysql:host=$host;dbname=$dbname;charset=utf8",
        $user,
        $password,
        [
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
        ]
    );
} catch (PDOException $e) {
    echo "Erreur de connexion à la base de données:" . $e-> getMessage();
}



?>