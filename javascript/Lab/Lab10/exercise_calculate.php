<?php
if(isset($_POST['submit_post'])){
$num_one = $_POST['number1'];
$num_two = $_POST['number2'];
$operation = $_POST['operation'];
    if($operation == "add"){
        $sum = $num_one + $num_two;
        echo "<h2>The Sum of $num_one and $num_two is: $sum</h2>";
    } else if ($operation == "subtract"){
        $difference = $num_one - $num_two;
        echo "<h2>The Difference of $num_one and $num_two is: $difference</h2>";
    } else if ($operation == "multiply"){
        $product = $num_one * $num_two;
        echo "<h2>The Product of $num_one and $num_two is: $product</h2>";
    } else if ($operation == "divide"){
        if($num_two != 0){
            $quotient = $num_one / $num_two;
            echo "<h2>The Quotient of $num_one and $num_two is: $quotient</h2>";
        } else {
            echo "<h2>Division by zero is not allowed.</h2>";
        }
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercise</title>
</head>
<body>
    <h1>Exercise Calculation</h1>
    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
        <label for="number1">Number 1:</label>
        <input type="number" id="number1" name="number1" required>
        <br><br>
        <label for="number2">Number 2:</label>
        <input type="number" id="number2" name="number2" required>
        <br><br>
        <select name="operation" required>
            <option value="add">Add</option>
            <option value="subtract">Subtract</option>
            <option value="multiply">Multiply</option>
            <option value="divide">Divide</option>
        </select>
        <input type="submit" value="Calculate" name="submit_post">
</body>
</html>