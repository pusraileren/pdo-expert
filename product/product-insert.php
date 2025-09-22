<?php
require '../includes/product.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $code = $_POST['code'];
    $omschrijving = $_POST['omschrijving'];
    $prijsPerStuk = $_POST['prijsPerStuk'];

    $uploadDir = '../uploads/';
    $filename = basename($_FILES['foto']['name']);
    $targetFile = $uploadDir . $filename;

    if (move_uploaded_file($_FILES['foto']['tmp_name'], $targetFile)) {
        $product = new Product();
        $product->insertProduct($code, $omschrijving, $targetFile, $prijsPerStuk);
        echo "Product succesvol toegevoegd";
    } else {
        echo "Fout bij uploaden van de foto";
    }
}
