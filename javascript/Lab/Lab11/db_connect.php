<?php

$con = mysqli_connect("localhost", "root", "1234", "php_crud");
if (!$con) {
    die("Connection failed: " . mysqli_connect_error());
}