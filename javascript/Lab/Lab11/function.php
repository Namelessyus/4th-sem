<?php
function createProduct($data, $con){
    try {
        $product_title = $data['name'];
        $product_category = $data['category'];
        $product_quantity = $data['quantity'];
        $product_price = $data['price'];
        $product_description = $data['description'];

        $sql = "INSERT INTO product (product_title, product_category,
         product_quantity, product_price, product_description) 
         VALUES ('$product_title', '$product_category', '$product_quantity', 
         '$product_price', '$product_description')";
        if (mysqli_query($con, $sql)) {
            return true;
        } else {
            return false;
        }
    } catch (Exception $e) {
        return false;
    }
}

function getAllProducts($con){
    $sql = "SELECT * FROM product";
    $result = mysqli_query($con, $sql);
    $products = [];
    if (mysqli_num_rows($result) > 0) {
        while($row = mysqli_fetch_assoc($result)) {
            $products[] = $row;
        }
    }
    return $products;
}

function deleteProduct($id, $con){
    $sql = "DELETE FROM product WHERE id = $id";
    if (mysqli_query($con, $sql)) {
        return true;
    } else {
        return false;
    }
}

function getProductById($id, $con){
    $sql = "SELECT * FROM product WHERE id = $id";
    $result = mysqli_query($con, $sql);
    if (mysqli_num_rows($result) > 0) {
        return mysqli_fetch_assoc($result);
    } else {
        return null;
    }
}

function updateProduct($id, $data, $con){
    try {
        $product_title = $data['name'];
        $product_category = $data['category'];
        $product_quantity = $data['quantity'];
        $product_price = $data['price'];
        $product_description = $data['description'];

        $sql = "UPDATE product SET 
                product_title='$product_title', 
                product_category='$product_category', 
                product_quantity='$product_quantity', 
                product_price='$product_price', 
                product_description='$product_description' 
                WHERE id=$id";
        if (mysqli_query($con, $sql)) {
            return true;
        } else {
            return false;
        }
    } catch (Exception $e) {
        return false;
    }
}

?>