<?php
$password = '123';
$hash = password_hash($password, PASSWORD_DEFAULT);
echo "Password hash untuk '$password' adalah:\n$hash\n";