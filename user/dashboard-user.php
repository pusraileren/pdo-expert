<?php
session_start();
if (empty($_SESSION['login_status'])) {
    header("Location: login-user.php");
    exit;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background: #f2f2f2;
            margin: 0;
            padding: 0;
        }

        .dashboard {
            max-width: 600px;
            margin: 80px auto;
            background: white;
            padding: 30px;
            border-radius: 8px;
            box-shadow: 0 2px 6px rgba(0,0,0,0.2);
            text-align: center;
        }

        h1 {
            margin-bottom: 20px;
        }

        .logout {
            display: inline-block;
            padding: 10px 20px;
            margin-top: 20px;
            background: #e74c3c;
            color: white;
            text-decoration: none;
            border-radius: 4px;
        }

        .logout:hover {
            background: #c0392b;
        }
    </style>
</head>
<body>
    <div class="dashboard">
        <h1>Welkom</h1>
        <p>Je bent succesvol ingelogd.</p>
        <a href="logout-user.php" class="logout">Logout</a>
    </div>
</body>
</html>
