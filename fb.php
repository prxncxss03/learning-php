<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Facebook</title>
</head>
<body>
<?php
    function likes($names){
        $array_length = count($names);
        if ($array_length == 0){
            return "no one likes this";
        } else if ($array_length == 1) {
            return $names[0] . " likes this";
        } else if ($array_length == 2) {
            return $names[0] . " and " . $names[1] . " like this";
        } else if ($array_length == 3) {
            return $names[0] . ", " . $names[1] . " and " . $names[2] . " like this";
        } else {
            return $names[0] . ", " . $names[1] . " and " . (count($names) - 2) . " others like this";
        }
        
    }
    echo likes(array("Princess", "Jeanette", "Raven", "Edvit", "Mario"));
?>
</body>
</html>