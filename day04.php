<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Day 04</title>
</head>
<body>
<?php
//Superglobals
//GLOBALS - access global variables
//$_POST
//$_GET
//$_SERVER
//$_COOKIE
//$_SESSION
//$_FILES

    $x = 100;
    $y = 200;
    
    function add(){
        $GLOBALS['z'] = $GLOBALS['x'] + $GLOBALS['y'];

    }
    echo add();
    echo $z;
    echo "<br>";

    //POST - collect data from the HTML form (invisible)
    if (isset($_POST)){
        echo $_POST['name'] . ", your form is submitted";
    }
    echo "<br>";
    print_r($_POST);

    //GET - data will be visible in the URL
    
?>
<form action="day04.php" method="post">
    <input type="text" name="name">
    <input type="text" name="age">
    <button type="submit">Submit</button>
</form>
</body>
</html>