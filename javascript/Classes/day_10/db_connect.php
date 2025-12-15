<?php
$con = mysqli_connect("localhost","root","","php_crud");
if (!$con){
    die("connection failed:".mysqli_connect_error());
}