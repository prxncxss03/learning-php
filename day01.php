<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Day 01</title>
</head>
<body>
<?php
    //Creating a variable of my age
    $name = "Princess";
    echo nl2br("My name is {$name}" . "<br>");
    //print statement can only output 1 string
    //print "Hello" . "world!";
    //. is used to concatenate string
    $age = 24;
    echo "I live in Philippines. I am " . $age .  "<br>";
    echo "test <br>";
    //Single quotes - variable named are echoed as it is
    // Double quotes - Variable names are replaced by the variable values
    echo "Your age is {$age} <br>";
    // print $age;
    // echo $age;
    /*
    This is my day 00 in learning PHP
    */
    //DATA TYPES
    //Integer
    $number = 24;
    echo $number . "<br>";
    // Float
    $price = 12.5;
    echo "The price is {$price} <br>";
    //String
    $food = "adobo";
    echo "I love {$food} <br>";
    $is_allowed = true;
    echo "is allowed: {$is_allowed} <br>";
    $x = "Hello world";
    $x = null;
    echo $x;
    //arrays
    $cars = array(
        "BMW",
        "Audi", 
        "Mercedes"
    );
    $cars2 = array("Volvo", "Ford", "Mustang");
    $cars = array_merge($cars, $cars2);
    echo "<br>";
    var_dump($cars);
    echo "<br>";
    $myCar = array("Audi", 2015, 75.304);
    var_dump($myCar);
    echo "<br>";
    print_r($myCar);
    //session_01
    echo "<br><br>";
    $myGrades = array("PE" => 1.4, "DSA" => 2.9, "CT" => 1.0);
    // var_dump($myGrades);
    print_r($myGrades);
    echo "<br>";
    $grade1["DSA"] = 5.4;
    echo $grade1["DSA"];
    echo "<br>";
    foreach ($myGrades as $key => $value) {
        echo "My key " . $key . " has " . $value . " grade <br>";
    };
    #1:04:34 Multi Dimensional Arrays
    echo "<br><br>";
    echo "Multi-Dimensional Arrays";
    echo "<br>";
    $gadgets = array(
        "Laptop" => array("Apple", "Linux", "Windows"),
        "Cellphone" => array("Xiaomi", "Samsung", "Apple", "Oppo"),
        "Camera" => array("Nikon", "Canon", "Red")
    );
    foreach ($gadgets as $gadgetType => $brands){
        echo "The types of the gadget is " . $gadgetType . " and here are the brands " . $brands . "<br>";
    };

    //Arithmetic Operators
    // echo "<br><br>";
    // $x = 5;
    // $y = 10;
    // echo $x % $y;

    //Assignment Operators
    // += -- Add and assign
    // -= -- Subtract and assign
    // *= Multiply and assign
    // /= -- Divide and assign
    // .= -- Concatenate and assign
    echo "<br><br>";
    echo "Assignment Operators <br>";
    $x = 10;
    $y = 3;
    // echo $x *= 10 . " <br>";
    echo $x .= $y;
    echo "<br>";
    echo $x;

    //Comparison Operators
    echo "<br><br>";
    $num1 = 4;
    $num2 = 0;
    #spaceship operator
    if ($num1 <=> $num2){
        echo "This is true";
    
    } else {
        echo "This is false";
    };
    echo "<br>";
    // Increment & Decrement Operators
    $number1 = 10;
    echo ++$number1;
    echo "<br>";
    echo --$number1;
    echo "<br>";
    echo $number1;
    // Logical Operators
    echo "<br><br>";
    $hand = false;
    $feet = true;
    echo "here";
    if ($hand xor $feet){
        echo "this is true right!";

    }else{
        echo "this is absolutely false!";
    };
    #1:51:58

    //Conditional Statement


    


?>
</body>
</html>