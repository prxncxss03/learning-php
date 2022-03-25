
<?php
    require_once 'includes/database.php';
    // $sql = "SELECT * FROM users WHERE id = 1";
    // $result = mysqli_query($conn, $sql);
    // $rowCount = mysqli_num_rows($result);

    // if($rowCount > 0){
    //     // if the row has more than 0 rows, we will print it as associative array
    //     while($row = mysqli_fetch_assoc($result)){
    //         echo $row['username'] . $row['password'] . "<br>";

    //     }
    // } else{
    //     echo "no results found";
    // }


    require_once 'includes/header.php';
?>
<?php
    if (isset($_SESSION['sessionId'])){
        echo "You are logged in";
    } else  {
        echo "Home";
    }
?>
<h1>Home</h1>
<?php
    require_once 'includes/footer.php';
?>
