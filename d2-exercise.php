<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>d2-exercise</title>
</head>
<body>
<?php
//Exercise 1: Vat Calculator
    function calculateVat($parameter1 , $parameter2){
        $calculatedPrice = $parameter1 + ($parameter1 * $parameter2);
        echo "Price is " . $parameter1 . ", Vat is: " . $parameter2 . " Total Price is: " . $calculatedPrice . "<br>";
        return $calculatedPrice;
    };
    calculateVat(50,0.12);
//Exercise 2: Leap Year
    function isLeapYear($year){
        if ($year % 4 == 0){
            echo $year . " is a leap year.<br>";
            return True;
        } else {
            echo $year . "year is not a leap year. <br>";
            return False;
        };
    };
    isLeapYear(2016);

//Exercise 3: Calculator
    function addNumbers($num1, $num2){
        $answer = $num1 + $num2;
        echo "Addition of " . $num1 . " and " . $num2 . " is " . $answer . "<br>";
        return $answer;
    };
    function subtractNumbers($num1, $num2){
        $answer = $num1 - $num2;
        echo "Subtraction of " . $num1 . " and " . $num2 . " is " . $answer . "<br>";
        return $answer;
    };
    function multiplyNumbers($num1, $num2){
        $answer = $num1 * $num2;
        echo "Multiply of " . $num1 . " and " . $num2 . " is " . $answer . "<br>";
        return $answer;
    };
    function divideNumbers($num1, $num2){
        $answer = $num1 / $num2;
        echo "Division of " . $num1 . " and " . $num2 . " is " . $answer . "<br>";
        return $answer;
    };
    addNumbers(10,5);
    subtractNumbers(40,3);
    multiplyNumbers(2,2);
    divideNumbers(10,2);

//Exercise 4: Swapping Numbers
    echo "<br><br>";
    function swapNumbers($num1, $num2){
        //C = A
        //A = B
        //B = A
        echo "Before swapping: num1= " . $num1 . ", num2= " . $num2 . "<br>";
        $num3 = $num1;
        $num1 = $num2;
        $num2 = $num3;
        echo "After swapping: num1= ". $num1 . ", num2= " . $num2 . "<br>";
    };
    swapNumbers(3,19);

//Exercise 5: Even or Odd
    function evenOrNot($num1){
        if ($num1 % 2 == 0){
            echo $num1 . " is even <br>";
        } else {
            echo $num1 . " is odd <br>";
        };
    }
    evenOrNot(5);

//Exercise 6: Prime Number
    function isPrime($num1){
        if ($num1 >= 2 && $num1 % 2 == 1 || $num1 == 5 && $num1 % 3 == 0 ){
            echo $num1 . " is a prime number. <br>";
            return True;
        } else{
            echo $num1 . " is not a prime number. <br>";
            return False;
        };
    };
    isPrime(1);
?>
</body>
</html>