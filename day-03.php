<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
    //DATE
    // 'd' = Day
    // 'j' = Day without zeros
    // 'D' = Day of week (3 letters)
    // 'l' = Full day of the week
    // 'm' = Month as a number with zeros
    // 'n' = Month as a number without zeros
    // 'M' = Month (3 letters)
    // 'F' = Full month
    // 'y' = Two-digit year
    // 'Y' = Full year

    echo date('F d, Y');
    echo "<br>";
    //Times
    // 'g' = hours in 12-hour format without zeros
    // 'h' = Hours in 12 hour format with zeros
    //  'G' = hours in 24-hour format without zeros
    // 'H' = hours in 24-hour format with zeros
    // 'a' = am/pm in lowercase
    // 'A' = am/pm in uppercase
    // 'i' = minutes without leading zeros
    // 's' = seconds without leading zeros
    //set timezone
    date_default_timezone_set('Asia/Manila');
    echo date('H:i:s a') . "<br>";

    //String to time
    $time = strtotime('February 03 2022  12:34 pm');
    echo date('m/d/Y h:i a', $time);

    //Random Numbers
    echo "<br>";
    $min = 1;
    $max = 10;
    echo rand($min, $max);
    //echo getrandmax();


?>
</body>
</html>