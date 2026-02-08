<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product Form</title>
</head>
<body>
    <section>
        <h1>PHP Form Request</h1>
        <h3>POST Method</h3>
        <form action="function.php" method="post">
            <p><label>Title: <input type="text" name="title"></label></p>
            <p><label>Category: <select name="category">
                <option value="male_fashion">Male Fashion</option>
                <option value="female_fashion">Female Fashion</option>
                <option value="kids">Kids</option>
                <option value="electronics">Electronics</option>
            </select></label></p>
            <p><label>Price: <input type="number" name="price"></label></p>
            <p><label>Description: <textarea name="description"></textarea></label></p>
            <p><label>Quantity: <input type="number" name="quantity"></label></p>
            <p><input type="submit" value="Add Product" name="addProduct"></p>
        </form>
    </section>
</body>
</html>