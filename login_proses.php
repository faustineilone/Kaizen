<?php 
    $username = $_POST['username'];
    $password = $_POST['password'];

    require 'core/function.php';
    $pdo = dbConnection();

    $login_query = "SELECT * FROM user WHERE username = ?";

    $login_process = $pdo -> prepare($login_query);
    $login_process -> execute([$username]);

    if($data_login = $login_process -> fetch()) {
        if(password_verify($password, $data_login['password'])) {
            session_start();
            $_SESSION["loggedIn"] = 1;
            $_SESSION["user_id"] = $data_login['user_id'];
            $_SESSION["username"] = $data_login['username'];
            header('Location: index.php');
        } else {
            header('Location: login.php?error_login=1');
        }
    } else {
        header('Location: login.php?error_login=1');
    }