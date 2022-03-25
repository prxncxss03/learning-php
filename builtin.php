<?php
    $numbers = array(100,432,8,987, 19);
    echo "Exercise 1: Sorting array" . "<br>";
    function descendingOrder($array){
        rsort($array);
        for($i = 0; $i<count($array);$i++){
            echo $array[$i] . " ";
        }
        
    }

    echo descendingOrder($numbers);

    echo "<br><br>";
    echo "Exercise 2: Birthday countdown" . "<br>";
    $birthday = mktime(0,0,0,11,19,2022);
    $today = time();
    function birthdayCountdown($birthday, $today){
        $difference = ($birthday - $today);
        $countdown = (int) ($difference/86400);
        return $countdown;
    }
    echo birthdayCountdown($birthday, $today);

    echo "<br><br>";
    echo "Exercise 3: Generating random float numbers" . "<br>";
    function randNumber(){
        $floatingNumber = (rand() / 1000000);
        return $floatingNumber;
    }
    echo randNumber();

    echo "<br><br>";
    echo "Exercise 4: Lowercase check" . "<br>";
    $str = "PYTHON IS ONE OF THE MOST POPULAR AND FASTEST-GROWING PROGRAMMING LANGUAGES. <br> INHERENTLY, IT IS INTERPRETED, HIGH-LEVEL, GENERAL-PURPOSE, AND OBJECT-ORIENTED SCRIPTING LANGUAGE";
    function lowercaseCheck($str){
        return strtolower($str);
    }
    echo lowercaseCheck($str);

    echo "<br><br>";
    echo "Exercise 5: Search inside of a text" . "<br>";
    $str = "It is popular not only among software engineers, but also among specialists in other fields: mathematics, data analysis, science, accounting, and network engineering. Likewise, Python cliques with young people because it’s a very beginner-friendly scripting language.";
    function searchText($str, $punctuation){
        $counter = 0;
        for($x = 0; $x < strlen($str); $x++){
            if ($str[$x] == $punctuation){
                $counter++;
            }
        }
        echo "The text has " . $counter . " punctuations.";
    }
    searchText($str, ",");

    echo "<br><br>";
    echo "Exercise 6: Lowest and highest values" . "<br>";
    $onlyNumbers = array(20, 5, 100, 2, 50);
    function minAndMax($array){
        echo "The lowest value is " . min($array) . " and the highest value is ". max($array);
    }
    minAndMax($onlyNumbers);

    echo "<br><br>";
    echo "Exercise 7: String repeat" . "<br>";
    $text = "I love Python!";
    function repeatString($string, $times){
        echo str_repeat($string . "<br>",$times);
    }
    repeatString($text, 8);
?>  