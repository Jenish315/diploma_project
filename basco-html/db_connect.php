<?php
    $host = 'localhost';
    $id = 'root';
    $password = '';
    $database = 'users';

    $conn = mysqli_connect($host,$id,$password,$database);

    if (!$conn) {
        die('Unable to connect to Database<br>'.mysqli_connect_error($conn));
    }
    // else{
    //     echo "Hello";
    // }
?>