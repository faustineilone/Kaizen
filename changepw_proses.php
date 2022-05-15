<?php

session_start();

require 'core/function.php';
$pdo = dbConnection();

$login_query = "SELECT * FROM user WHERE user_id = ?";
$login_process = $pdo -> prepare($login_query);
$login_process -> execute([$_SESSION['user_id']]);
$data_login = $login_process -> fetch();

$cpassword = $_POST['cpassword'];
$password1 = $_POST['password1'];
$password2 = $_POST['password2'];
$user_id = $_SESSION['user_id'];

if(password_verify($cpassword, $data_login['password'])) {
    if($password1 === $password2) {
        $password1 = password_hash($password1, PASSWORD_BCRYPT);
        $profile_query = "UPDATE user 
                SET password = ? 
                WHERE user_id = ?";
        $profile_proses = $pdo -> prepare($profile_query);
        $profile_proses -> execute([$password1, $user_id]);
        header('Location: index.php');
    } else {
        header('Location: changepw.php?error=npw');
    }
} else {
    header('Location: changepw.php?error=cpw');
}