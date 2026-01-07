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

    $product_title = "Yeti Carpet";
    $product_category = "Home Decor";
    $product_price = 3000.00;
    $product_description = "Nepal Made Carpet";
    $product_quantity = 10;

    $query = "INSERT INTO product(product_title,
    product_category, product_price, product_description, 
    product_quantity) VALUES('$product_title', '$product_category', 
    $product_price, '$product_description', $product_quantity)";
    
    $result = mysqli_query($connect, $query);
    if($result){
        echo "Data inserted successfully<br>";
        print_r($result);
    } else {
        echo "Data insertion failed: " . mysqli_error($connect);
    }
}