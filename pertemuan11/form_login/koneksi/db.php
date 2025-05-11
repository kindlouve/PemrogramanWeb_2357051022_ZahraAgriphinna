<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php

    $host = "localhost";
    $user = "root";
    $pass = "";
    $db = "latihan_login_db";

    $conn = mysqli_connect($host, $user, $pass, $db);

    if (!$conn){
        die("Koneksi gagal: " . mysqli_connect_error());
    }

    ?>
</body>
</html>