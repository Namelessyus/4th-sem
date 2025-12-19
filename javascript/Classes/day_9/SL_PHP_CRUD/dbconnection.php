<?php
$host = "localhost";
$user = "root";
$password = "1234"; // put password blank if you are using
// mysql in XAMPP
$db_name = "php_crud_example";

$connect = mysqli_connect($host, $user, $password, $db_name);

if (!$connect){
    die("Connection failed: " . mysqli_connect_error());
}