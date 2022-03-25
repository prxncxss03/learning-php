<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>D3-exercise</title>
</head>
<body>
<?php
    //Exercise 1: Sorting Array
    function descendingOrder($unsortedArray){
        rsort($unsortedArray);
        return print_r($unsortedArray);
    };
    echo descendingOrder(array(4,8,2,9,10));
    echo "<br><br>";
    //Exercise 2: Birthday Countdown
    #date_default_timezone_set('Asia/Manila');
    // $dateNow = date_create(get_date('mon-mday-year'));
    // $myBirthday = date_create("11-19-2002");
    // $birthdayCountdown = $dateNow - $myBirthday;
    // echo $dateNow;
    // echo "Hello World!";

    // echo $dateNow;
    // echo "<br>";
    // echo $myBirthday;
    // echo "<br>";
    // echo $birthdayCountdown;

    $targetDays = mktime(0, 0, 0, 11, 19, 2022);
    $today = time();
    $differenceDays = ($targetDays - $today);
    $days = (int)($differenceDays / 86400);
    echo "Days till next birthday " . $days . "<br>";
    #3:52:57

    echo "<br><br>";
    //Generating random float numbers
    $randNumber = rand(0,100) / 10;
    echo $randNumber;
    
    echo "<br><br>";
    //Exercise 4: Lowercase check
    $str = "PriNcess YOW" . "<br><br>";
    function lowercaseCheck($string){
        return strtolower($string);
    }
    echo lowercaseCheck($str);
    //Exercise 5: Search inside of a text
    $barneySong = "Oh I like red! It's the color of an apple. I like orange, it's the color of an orange.";
    echo "text: <br>" . $barneySong . "<br>";
    // function searchText($string, $punctuations=0){
    //     // $pattern = "/\.|!|'/";
    //     // preg_match_all($pattern, $string, $matches);
    //     // echo "The text has " . count($matches[0]) . " punctuations.";
    //     for ($char = 0; $char < strlen($string);$char++){
    //         $listOfPunctuations = array(".", ",","?",";","!",":","'","(",")","[","]","\"","-","_","/","@","{","}","*");
    //         if (in_array($string[$char], $listOfPunctuations)){
    //             $punctuations++;
    //         }
    //     }
    //     echo "<br>";
    //     echo "The text has " . $punctuations . " punctuations.";
    // }
    // searchText($barneySong);
    function searchText($str, $punctuations=0){
        // $pattern = "/\.|!|'/";
        // preg_match_all($pattern, $string, $matches);
        // echo "The text has " . count($matches[0]) . " punctuations.";
        for ($char = 0; $char < strlen($str);$char++){
            $listOfPunctuations = array(".", ",","?",";","!",":","'","(",")","[","]","\"","-","_","/","@","{","}","*");
            if (in_array($str[$char], $listOfPunctuations)){
                $punctuations++;
            }
        }
        echo "<br>";
        echo "The text has " . $punctuations . " punctuations.";
    }
    searchText($barneySong);
    #3:58:07

    //Exercise 6: Lowest and highest values
    echo "<br><br>";
    $onlyNumbers = array(1, 2, 7, 19, 77);
    function minAndMax($array){
        $lowestValue = min($array);
        $highestValue = max($array);
        echo "The lowest value is " . $lowestValue . " and the highest value is " . $highestValue . " <br>";
    }
    minAndMax($onlyNumbers);

    //Exercise 7: String Repeat
    $str = "I love Python!";
    function stringRepeat($str,$times){
        echo str_repeat($str . "<br>",$times);
    }
    stringRepeat($str, 8);
?>
</body>
</html>