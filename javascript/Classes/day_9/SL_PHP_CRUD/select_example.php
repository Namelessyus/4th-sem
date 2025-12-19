<?php
$host = "localhost";
$user = "root";
$password = "1234"; // put password blank if you are using
// mysql in XAMPP
$db_name = "php_crud_example";

$connect = mysqli_connect($host, $user, $password, $db_name);

if (!$connect){
    die("Connection failed: " . mysqli_connect_error());
} else {
    echo "Database connected succsessfully<br>";

    $query = "SELECT * FROM product";
    
    $result = mysqli_query($connect, $query);
    if(mysqli_num_rows($result) > 0){
        while($data = mysqli_fetch_array($result)){
            echo "Title: {$data['product_title']}<br>";
            echo "Category: {$data['product_category']}<br>";
            echo "Price: {$data['product_price']}<br>";
            echo "Description: {$data['product_description']}<br>";
            echo "Quantity: {$data['product_quantity']}<br><br>";
        }
    } else {
        echo "No records found.";
    }
}