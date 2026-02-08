<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Customer Form</title>
</head>
<body>
    <section>
        <h1>Customer Form</h1>
        <form action="function.php" method="post">
            <p><label>Full Name: <input type="text" name="full_name"></label></p>
            <p><label>Email: <input type="email" name="email"></label></p>
            <p><label>Address: <input type="text" name="address"></label></p>
            <p><label>Contact: <input type="number" name="contact"></label></p>
            <p><input type="submit" value="Add Customer" name="addCustomer"></p>
        </form>
    </section>
</body>
</html>