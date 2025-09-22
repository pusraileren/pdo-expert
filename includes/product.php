<?php
require 'db.php';

class Product {
    private $pdo;

    public function __construct() {
        $this->pdo = new DB();
    }

    public function insertProduct(String $code, String $omschrijving, String $foto, float $prijsPerStuk) {
        $this->pdo->run(
            "INSERT INTO product (code, omschrijving, foto, prijsPerStuk) 
             VALUES (:code, :omschrijving, :foto, :prijsPerStuk)", 
            [
                ':code' => $code,
                ':omschrijving' => $omschrijving,
                ':foto' => $foto,
                ':prijsPerStuk' => $prijsPerStuk
            ]
        );
    }
}
