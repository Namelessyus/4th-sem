<?php
$result = "";
if(isset($_GET['keyword'])) {
    $con = mysqli_connect("localhost", "root", "1234", "php_form_handling");
    $keyword = $_GET['keyword'];
    $sql = "SELECT * FROM product WHERE title LIKE '%$keyword%' OR 
    category LIKE '%$keyword%'";
    $result = mysqli_query($con, $sql);
} else {
    echo "No search keyword provided.";
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
    <h2>Search Results</h2>
    <table>
        <thead>
            <tr>
            <th>Product ID</th>
            <th>Title</th>
            <th>Category</th>
            <th>Price</th>
        </tr>
        </thead>
        <tbody>
        <?php
        if($result && mysqli_num_rows($result) > 0) {
            while($row = mysqli_fetch_assoc($result)) {
                echo "<tr>";
                echo "<td>" . $row['id'] . "</td>";
                echo "<td>" . $row['title'] . "</td>";
                echo "<td>" . $row['category'] . "</td>";
                echo "<td>$" . $row['price'] . "</td>";
                echo "</tr>";
            }
        } else {
            echo "<tr><td colspan='4'>No results found for '<strong>" . htmlspecialchars($keyword) . "</strong>'</td></tr>";
        }
        ?>
        </tbody>
    </table>
</body>
</html>