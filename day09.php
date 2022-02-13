<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Day 09</title>
</head>
<body>
<?php
    if (isset($_POST['submit'])){
        $myFile = fopen("d4-SUPERGLOBALS/uploads/file.txt", "w");
        $txt = "I am " . $_POST['age'] . " years old" . "\n";
        fwrite($myFile,$txt);
        fclose($myFile);
    }

?>
<form method="post" >
    <input type="text" name="age">
    <input type="submit" name="submit">
</form>
</body>
</html>