<?php
session_start();
include 'db.php';
$filename = $_FILES['foto']['name'];
$tmp = $_FILES['foto']['tmp_name'];
$path = "uploads/" . $filename;
if (move_uploaded_file($tmp, $path)) {
  $user_id = $_SESSION['user_id'];
  mysqli_query($conn, "INSERT INTO photos (user_id, filename) VALUES ($user_id, '$filename')");
}
header("Location: index.php");
?>