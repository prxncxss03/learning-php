<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Web App Exercise</title>
</head>
<body>
<?php

    //EXERCISES CONTROL STRUCTURES

    //Exercise 1
    echo "Exercise 1 <br>";
    $num1 = 4;
    $num2 = 54;
    if ($num1 > $num2){
        echo "Highest value is " . $num1 . ".<br>";
        echo "Lowest value is " . $num2 . ".<br>";
    }  else if ($num1 == $num2){
        echo "The numbers " . $num1 . " and " . $num2 . " are equal.";
    } else {
        echo "Highest value is " . $num2 . ".<br>";
        echo "Lowest value is " . $num1 . ".<br>";
    }
    //Exercise 2
    echo "<br><br>";
    echo "Exercise 2 <br>";
    $value = 1;
    switch ($value){
        case 1:
            echo "Spades";
        break;
        case 2:
            echo "Hearts";
        break;
        case 3:
            echo "Diamonds";
        break;
        case 4:
            echo "Clubs";
        break;
        default:
            echo $value . " is invalid";
    }

    //Exercise 3
    echo "<br><br>";
    echo "Exercise 3 <br>";
    $grade = 100;
    if ($grade >= 90 && $grade < 101){
        echo $grade . " is equivalent to A. <br>Congratulations, You've Passed!";
    } else if ($grade >= 80 && $grade < 90){
        echo $grade . " is equivalent to B. <br>Congratulations, You've Passed!";
    } else if ($grade >= 70 && $grade < 80){
        echo $grade . " is equivalent to C. <br>Congratulations, You've Passed!";
    } else if ($grade >= 60 && $grade < 70){
        echo $grade . " is equivalent to D. <br>Sorry, You've Failed";
    } else if ($grade < 60 && $grade >= 0){
        echo $grade . " is equivalent to F. <br>Sorry, You've Failed";
    } else{
        echo $grade . " is invalid";
    };
    //Exercise 4
    echo "<br><br>";
    echo "Exercise 4 <br>";
    $machineHours = 8000;
    $machineYears = 5;
    $machineFailures = 26;
    if ($machineHours > 10000 || $machineYears > 7 || $machineFailures > 25){
        echo "The machine needs to be replaced";
    } else {
        echo "The machine doesn't need to be replaced";
    }

    //Exercise 5
    echo "<br><br>";
    echo "Exercise 5 <br>";
    $year = 2000;
    if ($year % 4 == 0 || $year % 400 == 0){
        echo $year . " is a leap year";
    } else {
        echo $year . " is not a leap year";
    }

    //Exercise 6
    echo "<br><br>";
    echo "Exercise 6 <br>";
    $userInput = 4;
    for ($x = 1; $x <= 10; $x++){
        $product = $userInput * $x;
        echo $userInput . " x " . $x . " = " . $product . " <br>";
    };

    //Exercise 7
    echo "<br><br>";
    echo "Exercise 7 <br>";
    $num1 = 0;
    $num2 = 1;

    $counter = 0;
    while ($counter <= 50){
        echo $num1 . "<br>";
        $num3 = $num2 + $num1;
        $num1 = $num2;
        $num2 = $num3;
        $counter++;
    }
   
    echo "<br><br>";

    //EXERCISES USER DEFINED FUNCTIONS

    //Exercise 1: Vat Calculator
    $price = 50;
    $vat = 0.12;
    function calculateVat($price , $vat){
        $calculatedPrice = $price + ($price * $vat);
        echo "Price is: $price" . $price . ", Vat is: " . $vat . " 
        Total Price is: " . $calculatedPrice . "<br>";
        return $calculatedPrice;
    };
    calculateVat($price, $vat);
//Exercise 2: Leap Year
    $year = 2015;
    function isLeapYear($year){
        if ($year % 4 == 0 || $year % 400 == 0){
            echo $year . " is a leap year.<br>";
            return True;
        } else {
            echo $year . " is not a leap year. <br>";
            return False;
        };
    };
    isLeapYear($year);

//Exercise 3: Calculator
    $num1 = 10;
    $num2 = 4;
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
        echo "Multiplicity of " . $num1 . " and " . $num2 . " is " . $answer . "<br>";
        return $answer;
    };
    function divideNumbers($num1, $num2){
        $answer = $num1 / $num2;
        echo "Division of " . $num1 . " and " . $num2 . " is " . $answer . "<br>";
        return $answer;
    };
    addNumbers($num1, $num2);
    subtractNumbers($num1, $num2);
    multiplyNumbers($num1, $num2);
    divideNumbers($num1, $num2);

//Exercise 4: Swapping Numbers
    function swapNumbers($num1, $num2){
        //C = A
        //A = B
        //B = C
        echo "Before swapping: num1= " . $num1 . ", num2= " . $num2 . "<br>";
        $num3 = $num1;
        $num1 = $num2;
        $num2 = $num3;
        echo "After swapping: num1= ". $num1 . ", num2= " . $num2 . "<br>";
    };
    swapNumbers(3,19);

//Exercise 5: Even or Odd
    $num1 = 300;
    function evenOrNot($num1){
        if ($num1 % 2 == 0){
            echo $num1 . " is even <br>";
        } else {
            echo $num1 . " is odd <br>";
        };
    }
    evenOrNot($num1);

//Exercise 6: Prime Number
    $num1 = 30;
    function isPrime($num1){
        if ($num1 == 1){
            echo $num1 . " is not a prime number";
            return False;
        } else{
            for ($x = 2; $x <= sqrt($num1); $x++){
                if ($num1 % $x == 0){
                    echo $num1 . " is not a prime number";
                    return False;
                } 
            }
            echo $num1 . " is a prime number";
            return True;
        }
    };
    isPrime($num1);
    



    // $a = 45;
    // $b = 100;
    
    // $b = $a xor $b xor $a;
    // $a = $a xor $b xor $b;
    // echo "a  $a";
    // echo "b $b";

    // echo "<br><br>";
    // $orig = 100;
    // passValue($orig);
    // echo "Pass by value: " . $orig . "<br>";
    
  


?>

</body>
</html>