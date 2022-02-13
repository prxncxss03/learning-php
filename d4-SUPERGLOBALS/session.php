<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Session</title>
</head>
<body>
<?php
    //SESSION - good to use for sensitive information
    //a session existis a long as the browser is open

    session_start();


    //storing information
    $_SESSION['Name'] = "Princess";
    $_SESSION['Age'] = 19;

    echo "Hi " . $_SESSION['Name'];

    //destroy a session
    session_destroy();
   

?>
</body>
</html>