<?php
$host = "localhost";
$user = "root";
$password = ""; //put password blank if you are using mysql in XAMP
$db_name = "php_crud_example";
$connect = mysqli_connect ($host,$user,$password,$db_name);
if(!$connect){
    die("connection failed:".mysqli_connect_error());
} else{
    echo"Database connected sucessfully <br>";

    $product_title = "Woolen Jacket";
    $product_category = "Clothing";
    $product_price = 2500.00;
    $product_description = "Nepali Handmade Premium Jacket";
    $product_quantity = 15;

    $queue = "INSERT INTO prduct(product_title,prouduct_category,prouduct_price,
        prouduct_description,prouduct_quantity)
        VALUES('$product_title','$product_category',$product_price,
        '$product_description', $product_quantity )";

        $result = mysqli_query($connect,$query);
        if($result){
            echo "Data inserted sucessfully <br>";
            print_r($result);
        }else{
            echo"data insertion failed:" . mysqli_error($connect);
        }
    }
