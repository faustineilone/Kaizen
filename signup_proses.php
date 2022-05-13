<?php

require 'core/function.php';
$pdo = dbConnection();

$email = $_POST['email'];
$username = $_POST['username'];
$password = password_hash($_POST['password'], PASSWORD_BCRYPT);

$signup_query = "INSERT INTO user(email, username, password) VALUES(?, ?, ?)";
$signup_process = $pdo -> prepare($signup_query);
$signup_process -> execute([$email, $username, $password]);

$check_email = $pdo -> prepare("SELECT * FROM user WHERE email = ?");
$check_email -> execute([$email]);

$check_username = $pdo -> prepare("SELECT * FROM user WHERE username = ?");
$check_username -> execute([$username]);

if($signup_process -> execute([$email, $username, $password])) {
    header('Location: login.php');
} else if($check_email && $check_username) {
    header('Location: signup.php?error_signup');
}