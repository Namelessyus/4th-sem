<?php

$fruits = array("Apple", "Banana", "Orange", "Mango");

// accessing elements with index
echo $fruits[0]; // Output: Apple
echo "<br>"; // new line
$places = array(0 => "Kathmandu", 1 => "Lalitpur");

echo $places[1]; // Output: Lalitpur

// Associative array
$items = array(
    "title" => "Smart Tv",
    "brand" => "Samsung",
    "price" => 60000,
    "dimension" => "43 Inches",
    "color" => "Black"
);

// multi-dimensional array
$score = [
    "player1" => [
        "name" => "John",
        "age" => 25,
        "points" => [10, 20, 30]
    ],
    "player2" => [
        "name" => "Alice",
        "age" => 22,
        "points" => [15, 25, 35]
    ]
];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
</head>
<body>
    <section class="container">
        <div class="card">
            <div class="card-body">
                <h1 class="card-title">Php Arrays</h1>
                <p> Items Details: </p>
                <ul>
                    <li> Title: <?php echo $items['title']; ?> </li>
                    <li> Brand: <?php echo $items['brand']; ?> </li>
                    <li> Price: <?php echo $items['price']; ?> </li>
                    <li> Dimension: <?php echo $items['dimension']; ?> </li>
                    <li> Color: <?php echo $items['color']; ?> </li>
                </ul>
            </div>
            <div class="card-footer">
                <h1 class="card-title">Player Scores</h1>
                <ul>
                    <li> <?php echo $score['player1']['name']; ?>: <?php echo array_sum($score['player1']['points']); ?> </li>
                    <li> <?php echo $score['player2']['name']; ?>: <?php echo array_sum($score['player2']['points']); ?> </li>
                </ul>
            </div>
        </div>
    </section>
</body>
</html>