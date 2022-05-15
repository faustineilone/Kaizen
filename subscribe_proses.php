<?php

session_start();

if(isset($_SESSION['loggedIn'])){

    require 'core/function.php';
    $pdo = dbConnection();

    $user_id = $_SESSION['user_id'];
    $speaker_id = $_POST['speaker_id'];
    if($_POST['status'] == 0) {
        $status = 1;
    } else if($_POST['status'] == 1) {
        $status = 0;
    } 

    $check_data_query = "SELECT * FROM subscription WHERE user_id = ? AND speaker_id = ?";
    $check_data_process = $pdo -> prepare($check_data_query);
    $check_data_process -> execute([$user_id, $speaker_id]);
    $checked_data = $check_data_process -> fetchAll();

    if(count($checked_data) == 0) {
        $sub_query = "INSERT INTO subscription(user_id, speaker_id, status) VALUES(?, ?, ?)";
        $sub_process = $pdo -> prepare($sub_query);
        $sub_process -> execute([$user_id, $speaker_id, $status]);
    } else {
        $unsub_query = "UPDATE subscription SET status = ? WHERE user_id = ? AND speaker_id = ?";
        $unsub_process = $pdo -> prepare($unsub_query);
        $unsub_process -> execute([$status, $user_id, $speaker_id]);
    }
}

header("Refresh:0 url=speaker.php?speaker_id=" . $_POST['speaker_id']);