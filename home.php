<?php
session_start();

if (!isset($_SESSION['logins'])) {
    header('Location:login.php');
}

$pass = 123;

$hash = md5($pass);

echo $hash;

// $2y$10$ahkW.ze7vbaR7nMXLaEc3.eF48IOqjj7D1F..WK/dsDVTIWwXl5h6
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