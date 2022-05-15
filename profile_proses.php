<?php

require 'core/function.php';
$pdo = dbConnection();

$username = $_POST['username'];
$email = $_POST['email'];
$phone_no = $_POST['phone_no'];
$user_id = $_POST['user_id'];

$profile_query = "UPDATE user 
                SET email = ?, 
                    phone_no = ?
                WHERE user_id = ?";
                
$profile_proses = $pdo -> prepare($profile_query);
$profile_proses -> execute([$email, $phone_no, $user_id]);

header('Location: index.php');