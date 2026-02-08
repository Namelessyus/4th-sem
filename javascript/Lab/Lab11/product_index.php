<?php
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product List</title>
</head>
<body>
    <h1>Product List</h1>
    <a href="product_create.php">Add New Product</a>
    <table border="1" cellpadding="10" cellspacing="0">
        <thead>   
            <tr>
                <th>ID</th>
                <th>Title</th>
                <th>Category</th>
                <th>Quantity</th>
                <th>Price</th>
                <th>Description</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            <?php
            include 'db_connect.php';
            include 'function.php';

            $products = getAllProducts($con);
            foreach ($products as $product) {
                echo "<tr>";
                echo "<td>" . $product['id'] . "</td>";
                echo "<td>" . $product['product_title'] . "</td>";
                echo "<td>" . $product['product_category'] . "</td>";
                echo "<td>" . $product['product_quantity'] . "</td>";
                echo "<td>" . $product['product_price'] . "</td>";
                echo "<td>" . $product['product_description'] . "</td>";
                echo "<td>
                        <a href='product_edit.php?id=" . $product['id'] . "'>Edit</a> | 
                        <a href='product_delete.php?id=" . $product['id'] . "' onclick=\"return confirm('Are you sure?')\">Delete</a>
                    </td>";
                echo "</tr>";
            }
            ?>
        </tbody>
    </table>
</body>
</html>