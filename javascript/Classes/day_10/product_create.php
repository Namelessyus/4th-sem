<?php
include 'function.php';
include 'db_connect.php';

if($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['add_product'])){
    $data = [
        "name"=> $_POST['product_name'],
        "category"=> $_POST['product_category'],
        "quantity"=> $_POST['product_quantity'],
        "price"=> $_POST['product_price'],
        "description"=> $_POST['product_description']
    ];
    if(createProduct($data, $con)){
        echo "<p>Product added sucessfully!</p>";
        header("Location: product_index.php");
    }else{
        echo"<p> Error adding product. </p>";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <a href="product_index.php">Back to Product List</a>
    <h1>Product Add</h1>
    <form action="product_create.php" method="post">
        <label for = "product_name">Product Name: </label><br>
        <input type="text" id="product_name" name="product_name" required><br><br>

        <label for = "product_category">Product Category: </label><br>
        <input type="text" id="product_category" name="product_category" required><br><br>

        <label for = "product_quantity">Product Quantity: </label><br>
        <input type="number" id="product_quantity" name="product_quantity" required><br><br>
        
        <label for = "product_price">Product Price: </label><br>
        <input type="number" step="0.01" id="product_price" name="product_price" required><br><br>

        <label for = "product_description">Product Description: </label><br>
        <textarea type="product_description" id="product_description" name="product_description" required> </textarea><br><br>

        <input type="submit" value="Add Product" name="add_product">
    </form>
</body>
</html>