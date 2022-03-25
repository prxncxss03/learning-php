<?php
    if(isset($_POST['submit'])){
        require 'database.php';
        $username = $_POST['username'];
        $password = $_POST['password'];
        if ((empty($username)) || empty($password) ) {
            header("Location: ../index.php?error=emptyfields");
            exit();
        } else{
            $sql = "SELECT * FROM users WHERE username = ?";
            $statement = mysqli_stmt_init($conn);

            if(!mysqli_stmt_prepare($statement,$sql)){
                header("Location: ../index.php?error=sqlerror");
                exit(); 
            } else{
                // we can bind if there's a match
                // bind param should be equal to the sql statement
                mysqli_stmt_bind_param($statement, "s", $username);
                mysqli_stmt_execute($statement);
                $result = mysqli_stmt_get_result($statement);
                // check if we get a result and store the result in a var  
                if($row = mysqli_fetch_assoc($result)){
                    // fetch everything in a variable result in an associative array and store it in row
                    $passCheck = password_verify($password, $row['password']);
                    if ($passCheck == false){
                        header("Location: ../index.php?error=wrongpass");
                        exit(); 
                    } elseif ($passCheck == true){
                        session_start();
                        $_SESSION['sessionId'] = $row['id'];
                        // hindi natin isasave pass kasi sensitive
                        $_SESSION['sessionUser'] = $row['username'];
                        header("Location: ../index.php?success=loggedin");
                        exit(); 
                    } else {
                        header("Location: ../index.php?error=wrongpass");
                        exit(); 
                    }

                } else {
                    header("Location: ../index.php?error=nouser");
                    exit(); 
                }
            }
        }
    } else {
        header("Location: ../index.php?error=accessforbidden");
        exit();
    }

?>