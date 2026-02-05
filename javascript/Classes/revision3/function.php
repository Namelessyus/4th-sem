<?php
function dologin($username, $password){
    $db_usernmae = "admin";
    $db_password = "1234";

    if(empty($username)){
        return "Login Failed";
    }

    return ($username === $db_username && $password == $db_password)
    ?"Login Successfull"
    :"Login failed";
}