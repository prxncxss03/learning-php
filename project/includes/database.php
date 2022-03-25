<?php

//parameter to connect to a DB
$dbHost = "localhost"; // if your using a web server you need to change it.
$dbUser= "root";
$dbPass= "";
$dbName= "php_tutorial";

//Connection to database
//mysql improved version
$conn = mysqli_connect($dbHost, $dbUser, $dbPass, $dbName);
if (!$conn){
    die("Database connection failed");
} 
?>