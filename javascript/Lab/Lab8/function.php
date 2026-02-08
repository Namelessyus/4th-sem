<?php
include "db_connection.php";

function addProduct($conn) {
    if(!isset($_POST['addProduct'])){
        echo "Form not submitted.";
        return;
    } else {
        $title = $_POST['title'];
        $category = $_POST['category'];
        $description = $_POST['description'];
        $price = $_POST['price'];
        $quantity = $_POST['quantity'];

        $query = "INSERT INTO product (title, category, description, price, quantity) 
                  VALUES ('$title', '$category', '$description', $price, $quantity)";
        $result = mysqli_query($conn, $query);
        if($result){
            echo "Product added successfully.";
        } else {
            echo "Error adding product: " . mysqli_error($conn);
        }
    } 
}

function addCustomer($conn){
    if(!isset($_POST['addCustomer'])){
        echo "Form not submitted.";
        return;
    } else {
        $full_name = $_POST['full_name'];
        $email = $_POST['email'];
        $address = $_POST['address'];
        $contact = $_POST['contact'];

        $query = "INSERT INTO customer (full_name, email, contact, address) 
                  VALUES ('$full_name', '$email', '$contact', '$address')";
        $result = mysqli_query($conn, $query);
        if($result){
            echo "Customer added successfully.";
        } else {
            echo "Error adding customer: " . mysqli_error($conn);
        }
    }
}

// this code will not expose our function to direct access
if($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['addProduct'])){
    addProduct($conn);
    // redirect back to the form page after processing
    header("location: product_form.php?status=success");
} else if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['addCustomer'])){
    addCustomer($conn);
    header("location: customer_form.php?status=success");
} else {
    if(isset($_POST['addProduct'])){
        // if accessed directly, redirect to form page
        header("location: product_form.php?status=access denied");
    } else if(isset($_POST['addCustomer'])){
        header("location: customer_form.php?status=access denied");
    }
}