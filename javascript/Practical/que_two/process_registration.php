<?php
include "db_connect.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $name = $_POST['fullName'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $college = $_POST['college'];
    $roll = $_POST['rollNumber'];
    $position = $_POST['position'];
    $experience = $_POST['experience'];
    $message = $_POST['message'];

    $sql = "INSERT INTO participants 
            (full_name, email, phone, college, roll_number, position, experience, message)
            VALUES
            ('$name','$email','$phone','$college','$roll','$position','$experience','$message')";

    if (mysqli_query($conn, $sql)) {
        header("Location: success.php");
    } else {
        header("Location: error.php");
    }
}
?>
