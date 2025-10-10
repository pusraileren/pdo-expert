<?php
require '../includes/db.php';
$db = new DB();


$code = $_GET['code'];


$db->deleteProduct($code);

// Toon melding
echo "<p>✅ Product succesvol verwijderd!</p>";
echo "<a href='product-view.php'>Terug naar overzicht</a>";
?>
