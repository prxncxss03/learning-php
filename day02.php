<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Day 02</title>
</head>
<body>
<?php
//Conditional Statement - Switch

$role = "Admin";

switch ($role) {
    case 'Visitor':
        echo "Welcome Visitor";
    break;
    case 'Admin':
        echo "Welcome Admin";
    break;
    case 'SuperAdmin':
        echo "Welcome Superadmin";
    break;
    case 'Boss':
        echo "Welcome Boss";
    break;
    default:
        echo "User has no role!";
}
    echo "<br>";
    //While loop - Don't know the number of iterations
    //Do-while loop - First do, then while
    //For loop
    //Foreach loop
    $x = 1;
    while ($x <= 10 ){
        echo $x . "<br>";
        $x++;
    };

    //Do-while loop
    $cookie = 1;
    do {
        echo "I love cookies! <br>";
        $cookie +=5;
        
    } while ($cookie <=10);
    //For loop
    echo "<br>";
    /*
    for (initialization; condition; counter){

    }
    */
    for ($x = 10; $x > 0; $x--){
        echo "The number is " . $x . "<br>";
    }
    echo "<br>";
    //Going to the bank on the 1st of January
    //Want to deposit 1000 dollars
    //Interest rate is 5%
    // Withdraw it after 5 years
    //Calculate the end capital
    /* 
        1000 x 0.05
        x 5
        
    */
    $x = 1000;
    $capital = 0;
    for ($y = 1; $y <=5; $y++){
        $x += ($x * 0.05);
        echo "The total amount after " . $y . " is " . $x . ".<br>";
    };
    echo "<br>";
    //Foreach loop- iterate over variables (array lang siya gagana)
    $names = array("Princess", "Raven", "Prince");
    foreach ($names as $name) {
        echo "The name is " . $name . ".<br>";

    }
    echo "<br><br>";
    $person = array("Name" => "Princess", "Age" => 19, "Gender" => "Female");
    foreach ($person as $key => $value){
        echo $key . ": " .$value;
        echo "<br>";
    };
    echo "<br><br>";
    echo "Functions <br>";
    //Functions
    // a function is a block ofn code written in a program to perform some
    //specific task.

    //Two major types of functions
    //Built-in function
    //User-defined function

    //Camelcase 
    //myFuction();
    
    //Lowercase
    //All lowercase, underscore inbetween
    //my_function();

    //Pascal case
    //Every word is capitalized
    //MyFunction();

    function myFunction(){
        $greet = "hello";
        echo $greet;
    };
    myFunction();

    echo "<br><br>";
    function calculator($num1, $num2=4){
        $answer = $num1 * $num2;
        echo $num1 . " x " . $num2 . " = " . $answer . "<br>"; 
    };
    calculator(5);
    #2:34:11
    echo "<br>";

    function add($num1, $num2){
        $result = $num1 + $num2;
        return $result;
    }
    echo "The number is: " . add(4,3);
    function subtract($num1, $num2){
        return $num2 - $num1;
    }
    echo "<br><br>";
    echo "The difference of the two numbers is: " . subtract(4,9);

    #2:36:49
    //Pass by reference
    //di ko maintindihan haha

    //contansts
    //funciton - define()
    //keyword - CONST
    $UNIQUE_NAME = "Princess Evangeline";
    
    //Constants are always in uppercase
    //name has the same rules as variables
    define("I_LOVE_PYTHON", "PYTHON LAB LAB");
    echo I_LOVE_PYTHON;

    //CONST
    const MY_NAME = "Princess Evangeline";
    echo "<br>";
    echo MY_NAME;
    echo "<br><br>";
    //Built in Functions
    //String Functions
    //Math Functions
    //Date Functions
    //Array Functions
    //Random number Functions

    echo ceil(1.4);
    echo "<br>";
    echo floor(0.4);
    //Round
    echo "<br>";
    echo round(0.56291, 3);
    echo "<br>";
    echo exp(4);
    //String Functions
    echo "<br>";
    $greetings = "Hello Princess!";
    //length of the string
    echo strlen($greetings);
    //string word count
    echo "<br>";
    $firstName = "My first name is Princess";
    echo str_word_count($firstName);

    //How to find text within a s tring
    echo "<br>";
    $email = "pocon.evangeline@gmail.com";
    if (strpos($email, "@")){
        echo "This is as valid email";
    } else {
        echo "This is not a valid email";
    }
    echo "<br>";

    //Ucwords = Every first letter of a word is capitalize
    echo ucwords("what is your name? <br>");
    //Whole s tring to uppercase
    echo strtoupper("Hello princess! <br>");
    //Whole string to lowercase
    echo strtolower("It is in The lOwer CaSe! <br>");

    // Array built-in functions
    echo "<br><br>";
    $personalInfo = array("Name" => "Princess", "Age" => 19, "City" => "Iriga City");
    $moreInfo = array("Language" => "Filipino", "Grade" => 3);
    
    $personalInfo = array_merge($personalInfo, $moreInfo);
    foreach ($personalInfo as $key => $value){
        echo $key . ": " . $value . "<br>";
    };
    print_r($personalInfo);
    //function that only keys
    echo "<br><br>";
    print_r(array_keys($personalInfo));
    echo "<br>";
    print_r(array_values($personalInfo));
    echo "<br>";

    //Add a value in array
    $cars = array("Volkswagen", "Audi", "Mercedes");
    array_push($cars, "Ford");

    print_r($cars);

    echo "<br><br>";
    //Search inside an array
    echo array_search("Audi", $cars);
    echo "<br>";
    //Count Function - count the number of items in array
    echo count($cars);
    #3:35:13


  

    


?>
</body>
</html>