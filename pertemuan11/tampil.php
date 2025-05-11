<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $nama = $_POST["nama"];
	    $usia = $_POST["usia"];
        $npm = $_POST["npm"];
	    $alamat = $_POST["alamat"];

    	echo "Nama anda adalah " . $nama;
	    echo "<br>";
	    echo "Usia anda adalah " . $usia;
	    echo "<br>";
	    echo "NPM anda adalah " . $npm;
        echo "<br>";
        echo "Alamat anda adalah " . $alamat;

    ?>
</body>
</html>