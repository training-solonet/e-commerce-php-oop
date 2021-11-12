<?php
session_start();

if (!isset($_SESSION['logins'])) {
    header('Location:login.php');
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>
        INI HALAMAN HOME
    </h1>

    <button type="submit" name="logout">
        <a href="App/logout.php">LOGOUT</a>
    </button>
</body>

</html>