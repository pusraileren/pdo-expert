<?php
require '../includes/db.php';
$db = new DB();


$code = $_GET['code'];


$product = $db->selectAll("SELECT * FROM product WHERE code = $code")[0];


if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $omschrijving = $_POST['omschrijving'];
    $foto = $_POST['foto'];
    $prijsPerStuk = $_POST['prijsPerStuk'];

    
    $db->updateProduct($code, $omschrijving, $foto, $prijsPerStuk);

    echo "<p>Product succesvol gewijzigd!</p>";
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Product bewerken</title>
</head>
<body>
    <h1>Product bewerken</h1>

    <form method="POST">
        <label>Omschrijving:</label><br>
        <input type="text" name="omschrijving" value="<?php echo $product['omschrijving']; ?>"><br><br>

        <label>Foto (URL):</label><br>
        <input type="text" name="foto" value="<?php echo $product['foto']; ?>"><br><br>

        <label>Prijs per stuk:</label><br>
        <input type="number" name="prijsPerStuk" value="<?php echo $product['prijsPerStuk']; ?>"><br><br>

        <button type="submit">Opslaan</button>
    </form>
</body>
</html>
