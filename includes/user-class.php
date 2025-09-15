<?php
require 'db.php';

class user {
    private $pdo;
    public function __construct() {
        $this->pdo = new DB();
    }

    public function registerUser(String $name, String $email, String $password) {
        $hash = password_hash($password, PASSWORD_BCRYPT);
        $this->pdo->run("INSERT INTO user (name, email, password) VALUES (:name, :email, :password)", [
            ':name' => $name,
            ':email' => $email,
            ':password' => $hash
        ]);
    }

    public function login(String $email, String $password) {
        $stmt = $this->pdo->run("SELECT * FROM user WHERE email = :email", [
            ':email' => $email
        ]);
        $user = $stmt->fetch();
        if ($user && password_verify($password, $user['password'])) {
            return true;
        }
        return false;
    }
}
