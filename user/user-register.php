<?php
require '../includes/user-class.php';


try {
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $user = new user();

        // xss protection
        $name = htmlspecialchars($_POST['name']);
        $email = htmlspecialchars($_POST['email']);
        $password = htmlspecialchars($_POST['password']);

        $user->registerUser($name, $email, $password);
        echo "registratie gelukt";
        header("refresh:2;url= ../index.php");
    }
} catch (PDOException $e) {
    echo $e ->getMessage();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>Account aanmaken</h2>
    <form method="POST">
        <input type="text" name="name" placeholder="name" required>
        <input type="email" name="email" placeholder="Email" required>
        <input type="password" name="password" placeholder="password" required>
        <input type="submit">
</body>
</html>