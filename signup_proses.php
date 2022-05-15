<?php

require 'core/function.php';
$pdo = dbConnection();

$email = $_POST['email'];
$username = $_POST['username'];
$password = password_hash($_POST['password'], PASSWORD_BCRYPT);

$signup_query = "INSERT INTO user(email, username, password) VALUES(?, ?, ?)";
$signup_process = $pdo -> prepare($signup_query);

$check_email = $pdo -> prepare("SELECT * FROM user WHERE email = ?");
$check_email -> execute([$email]);
$data_email = count($check_email -> fetchAll());

$check_username = $pdo -> prepare("SELECT * FROM user WHERE username = ?");
$check_username -> execute([$username]);
$data_username = count($check_username -> fetchAll());

if($data_email > 0 && $data_username > 0) {
    header('Location: signup.php?error=emailanduname');
} else if($data_email > 0) {
    header('Location: signup.php?error=email');
} else if($data_username > 0) {
    header('Location: signup.php?error=uname');
} else if($signup_process -> execute([$email, $username, $password])) {
    header('Location: login.php');
}   