<?php
require '../includes/db.php';

$db = new DB();


$producten = $db->selectAll("SELECT * FROM product");
?>

<!DOCTYPE html>
<html>
<head>
    <title>Producten overzicht</title>
</head>
<body>
    <h1>Producten overzicht</h1>

    <table border="1" cellpadding="8">
        <tr>
            <th>Code</th>
            <th>Omschrijving</th>
            <th>Foto</th>
            <th>Prijs per stuk</th>
            <th>Acties</th>
        </tr>

        <?php foreach ($producten as $product): ?>
            <tr>
                <td><?php echo $product['code']; ?></td>
                <td><?php echo $product['omschrijving']; ?></td>
                <td><img src="<?php echo $product['foto']; ?>" width="80"></td>
                <td>€<?php echo $product['prijsPerStuk']; ?></td>
                <td>
                    <a href="product-edit.php?code=<?php echo $product['code']; ?>">Bewerken</a>
                    <a href="product-delete.php?code=<?php echo $product['code']; ?>">Verwijderen</a>

                </td>
            </tr>
        <?php endforeach; ?>
    </table>
</body>
</html>
