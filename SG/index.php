
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Index</title>
</head>
<body>
<ul>
    <li><a href="index.php">HOME</a></li>
    <li><a href="contact.php">CONTACT</a></li>
</ul>
<?php
    echo $_SESSION['username'] = "princesspocs";

    if (isset($_SESSION['username'])){
        echo "You are not logeed in";
    } else{
        echo "You are logged in";
    }

?>
</body>
</html>