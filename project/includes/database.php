<?php

//parameter to connect to a DB
$dbHost = "localhost";
$dbUser= "root";
$dbPass= "";
$dbName= "php_tutorial";

//Connection to database
//mysql improved version
$conn = mysqli_connect($dbHost, $dbUser, $dbPass, $dbName);
if ($conn){

} else {
    die("Database connection failed");
}

?>