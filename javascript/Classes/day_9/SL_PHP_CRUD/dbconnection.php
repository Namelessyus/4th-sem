<?php
$host = "localhost";
$user = "root";
$password = ""; //put password blank if you are using mysql in XAMP
$db_name = "php_crud_example";
$connect = mysqli_connect ($host,$user,$password,$db_name);
if(connect){
    die("connection failed:".mysqli_connct_error());
}
