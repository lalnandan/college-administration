<?php
// Example password hashing in PHP
$password = 'password';
$hashed_password = password_hash($password, PASSWORD_DEFAULT);
echo $hashed_password;
?>
