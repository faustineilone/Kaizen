<?php

require 'core/function.php';
$pdo = dbConnection();

$login_query = "SELECT * FROM user WHERE username = ?";
$login_process = $pdo -> prepare($login_query);
$login_process -> execute([$username]);
$data_login = $login_process -> fetch();

$username = $_POST['username'];
$email = $_POST['email'];
$phone_no = $_POST['phone_no'];
$cpassword = $_POST['cpassword'];
$password1 = $_POST['password1'];
$password2 = $_POST['password2'];
$user_id = $_POST['user_id'];

if(password_verify($cpassword, $data_login[$password])) {
    if($password1 == $password2) {
        $password1 = password_hash($password1, PASSWORD_BCRYPT);
        $profile_query = "UPDATE user 
                SET email = ?, 
                    phone_no = ?, 
                    password = ? 
                WHERE user_id = ?";
    }
}
                
$profile_proses = $pdo -> prepare($profile_query);
$profile_proses -> execute([$username, $email, $phone_no, $password1, $user_id]);

header('Location: index.php');