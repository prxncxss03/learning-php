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
    // $personalInfo = array("Name" => "Princess", "Age" => 19, "City" => "Iriga City");
    // $moreInfo = array("Language" => Filipino, "Grade" => 3.0);
    
    // $personalInfo = array_merge($personalInfo, $moreInfo);
    // foreach ($personalInfo as $key => $value){
    //     echo $key . ": " . $value . " <br>";
    // };
    // echo "Hello World";
    //Exercise 3: Calculator
    $num1 = 13;
    $num2 = 4;

    function addNumbers($num1, $num2){
        $ans = $num1 + $num2;
        echo "Addition of $num1 and $num2 is $ans";
        return $ans;
    }

    function subtractNumbers($num1, $num2){
        $ans = $num1 - $num2;
        echo "Subtraction of $num1 and $num2 is $ans";
        return $ans;

    }

    function multiplyNumbers($num1, $num2){
        $ans = $num1 * $num2;
        echo "Multiplicity of $num1 and $num2 is $ans";
        return $ans;
    }

    function divideNumbers($num1, $num2){
        $ans = $num1 / $num2;
        echo "Division of $num1 and $num2 is $ans";
        return $ans;
    }
    addNumbers($num1, $num2);
    subtractNumbers($num1, $num2);
    multiplyNumbers($num1, $num2);
    divideNumbers($num1, $num2);
?>
</body>
</html>