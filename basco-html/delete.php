<?php
    session_start();
    include 'db_connect.php';
    $mail = $_SESSION['mail'];
    
    $query = "DELETE FROM `users` WHERE email = '$mail'";
    $result = mysqli_query($conn, $query);
    $_SESSION['drop'] = TRUE;
    
    session_unset();
    session_destroy();
    header('location: login.php');
    exit;
?>