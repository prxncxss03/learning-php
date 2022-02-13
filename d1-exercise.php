<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>D1-Exercise</title>
</head>
<body>
<?php
// Exercise 1
    echo "Exercise 1 <br>";
    $x = 2;
    $y = 5;
    $z = ($x + $y) * 5;
    echo "The total is " . $z . "<br>";
// Exercise 2
    echo "<br><br>";
    echo "Exercise 2 <br>";
    $price = 70;
    $vat = 0.12;
    $totalPrice = ($price * $vat) + $price;
    echo "Price: " . $price . "<br>";
    echo "Vat: " . $vat . "<br>";
    echo "Total Price: " . $totalPrice . "<br>";
// Exercise 3
    echo "<br><br>";
    echo "Exercise 3 <br>";
    $x = 4;
    $y = 1;
    $z = 11;
    $average = ($x + $y + $z) / 3;
    echo "The average is " . number_format($average, 2). "<br>";
// Exercise 4
    echo "<br><br>";
    echo "Exercise 4 <br>";
    $countries = array(
        "Netherlands" => "Amsterdam",
        "Germany" => "Berlin",
        "Thailand" => "Bangkok"
    );
    foreach ($countries as $country => $capital){
        echo "The capital of " . $country . " is " . $capital . ".<br>";
    };

//Exercise 5
    echo "<br><br>";
    echo "Exercise 5 <br>";
    $userInput = 54;
    $cmToInch = $userInput * 0.39;
    echo $userInput . " centimeters is " . intval($cmToInch). " inches <br>";   

//Exercise 6
    echo "<br><br>";
    echo "Exercise 6 <br>";
    $expenses = array(100, 500, 250, 300);
    $totalAmount = 0;
    foreach ($expenses as $value){
        $totalAmount += $value;
    };
    echo "My " . count($expenses) . " biggest expenses were " . $totalAmount . ".<br>";

//Exercise 7
    echo "<br><br>";
    echo "Exercise 7 <br>";
    $weather = array("rain", "sunshine", "clouds", "hail", "sleet", "snow", "wind");
    echo "We've seen all kinds of weather this month. At the beginning of the month, we had <br> " . $weather[5] . " and " . $weather[6] . ". Then came " . $weather[1] . " with a few " . $weather[2] . " and some " . $weather[0] . ". Atleast we <br> didn't get any " . $weather[3] . " or " . $weather[4] . ".<br>";


?>
</body>
</html>