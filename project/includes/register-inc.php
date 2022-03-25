<?php
// para lang to sa html yung closing tag
//check if the user clicks the button using isset function
//the method is post and the name is submit
if (isset($_POST['submit'])){
    //call the connection to our database
    //add the db connection
    require'database.php';
    $username = $_POST['username'];
    $password = $_POST['password'];
    $confirmPassword= $_POST['confirmPassword'];

    // check if the fields are filled out
    if (empty($username) || empty($password) || empty($confirmPassword)) {
        header("Location: ../register.php?error=emptyfields&username=".$username);
        exit();
        // search for the string for pattern
        //avoid having weird usernames
    } elseif(!preg_match("/^[a-zA-Z0-0]*/","$username")) {
        echo "not yet";
        header("Location: ../register.php?error=invalidusername&username=".$username);
        exit();
    } elseif($password !== $confirmPassword) {
        echo "not yet";
        header("Location: ../register.php?error=passworddonotmatch&username=".$username);
        exit();
        //we want to connect the database and check if it's already stored
    } else {
        //use prepared statements
        $sql = "SELECT username FROM users WHERE username = ?";
        //statement
        //takes db connection
        $statement = mysqli_stmt_init($conn);
        //check for errors
        if (!mysqli_stmt_prepare($statement,$sql)){
            header("Location: ../register.php?error=sqlerror&username=".$username);
        exit();
        } else{
            //if there's no error we want to continue
            // bind the statement
            // s - stands for string i - integer b - boolean
            mysqli_stmt_bind_param($statement, "s",$username);
            mysqli_stmt_execute($statement);
            mysqli_stmt_store_result($statement);
            $rowCount = mysqli_stmt_num_rows($statement);

            if ($rowCount > 0) {
                header("Location: ../register.php?error=usernametaken");
                exit();
            } else{
                $sql = "INSERT INTO users (username, password) VALUES (?,?)";
                $statement = mysqli_stmt_init($conn);
                //check for errors
                if (!mysqli_stmt_prepare($statement,$sql)){
                    header("Location: ../register.php?error=sqlerror&username=".$username);
                    exit();
                } else {

                    // hash the password
                    $hashedPass = password_hash($password, PASSWORD_DEFAULT);
                    ///should be in order
                    mysqli_stmt_bind_param($statement, "ss",$username,$hashedPass);
                    mysqli_stmt_execute($statement);
                        header("Location: ../register.php?success=registered");
                        exit();
                    

                }
            } 

        }


    }
    // close the stament
    mysqli_stmt_close($stament);
    // close the connection
    mysqli_close($conn);
}

?>
