<?php
class DB {
    protected $pdo;

    public function __construct($db = "eren", $user="root", $pwd="", $host="localhost") {
        try {
            $this->pdo = new PDO("mysql:host={$host};dbname={$db}", $user, $pwd);
        } catch(PDOException $e) {
            die("Connection failed: " . $e->getMessage());
        }
    }

    public function run($sql, $args = []) {
        $stmt = $this->pdo->prepare($sql);
        $stmt->execute($args);
        return $stmt;
    }
}
?>
