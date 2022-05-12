<?php

require 'core/function.php';
$pdo = dbConnection();

$profile_query = "UPDATE user SET username = ?, email = ?, phone_no = ?, md5(password = ?) WHERE user_id = ?";
$profile_proses = $pdo -> prepare($profile_query);
$profile_proses -> execute([$_POST['username'], $_POST['email'], $_POST['phone_no'], $_POST['password'], $_POST['user_id']]);

header('Location: index.php');