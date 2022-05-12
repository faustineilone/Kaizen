<?php

require 'core/function.php';
$pdo = dbConnection();

$email = $_POST['email'];
$username = $_POST['username'];
$password = md5($_POST['password']);

$signup_query = "INSERT INTO user(email, username, password) VALUES(?, ?, ?)";
$signup_process = $pdo -> prepare($signup_query);
$signup_process -> execute([$email, $username, $password]);

header('Location: login.php');