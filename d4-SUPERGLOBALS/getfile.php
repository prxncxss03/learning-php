<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Get File</title>
</head>
<body>
<?php
    $filePath = "./uploads/file.txt";
    $output = file_get_contents($filePath); //get anything from a file
    $ages = explode("\n", $output);

    $totalAge = 0;
    $i = 0;
    foreach($ages as $value){
        echo $value . "<br>";
        $totalAge += $value;
        $i++;
    }
    echo "The average is " . ($totalAge/$i) . " <br>";
?>
</body>
</html>