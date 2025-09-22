<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nieuw product</title>
</head>
<body>
     <h1>Nieuw product toevoegen</h1>
  <form action="product-insert.php" method="post" enctype="multipart/form-data">
    <label>Code:<br><input type="text" name="code" required></label><br><br>
    <label>Omschrijving:<br><input type="text" name="omschrijving" required></label><br><br>
    <label>Prijs per stuk:<br><input type="text" name="prijsPerStuk" required></label><br><br>
    <label>Foto:<br><input type="file" name="foto" required></label><br><br>
    <button type="submit">Toevoegen</button>
  </form>
</body>
</html>