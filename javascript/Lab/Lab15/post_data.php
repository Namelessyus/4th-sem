<?php
if($_SERVER['REQUEST_METHOD'] == "POST"){
    $full_name = $_POST['full_name'];
    $email = $_POST['email'];
    $contact = $_POST['contact'];
    $gender = $_POST['gender'];

    echo "--------------------------";
    echo "<h3>Form data that was sent to server</h3>";
    echo "<p><strong>Name: {$full_name}</strong> ** Email: {$email} </p>";
    echo "<p>Contact: {$contact} ** Gender: {$gender} </p>";
    echo "--------------------------";
} else {
    echo "--------------------";
    echo "<h3>Please enter the data first</h3>";
}