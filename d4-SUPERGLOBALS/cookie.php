<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cookie</title>
</head>
<body>
<?php
//COOKIE - small file that the webserver stores in the client computer

//Arguments of cookies
//Name
//Value
//Expire - if you do not include an expiration date, the cookie will only be stored for the current session
//Path
//Domain
//Security
$month_time = time() + (86400 * 30);
setcookie("name", "Dary", $month_time);
print_r($_COOKIE);

echo "<br>";
echo $_COOKIE['name'];
?>
    
</body>
</html>