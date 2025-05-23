<?php
session_start();
include 'db.php';
$username = $_POST['username'];
$password = $_POST['password'];
$result = mysqli_query($conn, "SELECT * FROM users WHERE username='$username'");
if ($result && mysqli_num_rows($result) == 1) {
  $user = mysqli_fetch_assoc($result);
  if (password_verify($password, $user['password'])) {
    $_SESSION['user_id'] = $user['id'];
    $_SESSION['username'] = $user['username'];
    header("Location: index.php");
    exit;
  }
}
echo "Login gagal.";
?>