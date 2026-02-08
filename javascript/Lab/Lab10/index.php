<?php
    if(isset($_GET['submit_get']) || isset($_GET['name'])){
        $name_get = $_GET['name'];
        echo "<h2>Displaying Value from GET Method: $name_get </h2>";
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GET & POST Method PHP</title>
</head>
<body>
    <h1>GET & POST Method PHP</h1>

    <h2>GET Method</h2>
    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="get">
        <label for="name_get">Name:</label>
        <input type="text" id="name_get" name="name">
        <input type="submit" value="Submit GET" name="submit_get">
    </form>

    <h2>POST Method</h2>
    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
        <label for="name_post">Name:</label>
        <input type="text" id="name_post" name="name">
        <input type="submit" value="Submit POST" name="submit_post">
    </form>
</body>
</html>