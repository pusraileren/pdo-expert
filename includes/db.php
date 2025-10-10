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
    public function selectAll($query) {
    $stmt = $this->pdo->prepare($query);
    $stmt->execute();
    return $stmt->fetchAll(PDO::FETCH_ASSOC);
}
public function updateProduct($code, $omschrijving, $foto, $prijsPerStuk) {
    $stmt = $this->pdo->prepare("UPDATE product SET omschrijving = :omschrijving, foto = :foto, prijsPerStuk = :prijsPerStuk WHERE code = :code");
    $stmt->execute([
        ':omschrijving' => $omschrijving,
        ':foto' => $foto,
        ':prijsPerStuk' => $prijsPerStuk,
        ':code' => $code
    ]);
}
public function deleteProduct($code) {
    $stmt = $this->pdo->prepare("DELETE FROM product WHERE code = :code");
    $stmt->execute([':code' => $code]);
}


}
?>
