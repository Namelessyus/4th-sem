<?php
    $host = "localhost";
    $user = "root";
    $password = "1234";
    $db_name = "php_form_handling";

    $conn = mysqli_connect($host, $user, $password, $db_name);

    if(!$conn){
        die("Connection Failed: " . mysqli_connect_error());
    }
?>