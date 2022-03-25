

<?php
    // $sql = "SELECT * FROM users WHERE id=4";
    // $result = mysqli_query($conn, $sql);
    // $rowCount = mysqli_num_rows($result);
    // if ($rowCount > 0){
    //     while($row = mysqli_fetch_assoc($result)){
    //         echo $row['username'] . " " . $row['password'] .  "<br>";
    //     }
    // } else{
    //     echo "No results found";
    // }

    require_once 'includes/header.php';
?>

<div class="login-wrapper">
    <!-- method - specifies the HTTP method in submitting the form -->
    <form action="/feb-php/project/includes/register-inc.php" method="post">
        <input type="text" name="username" placeholder="username" id="">
        <input type="password" name="password" placeholder="password" id="">
        <input type="password" name="confirmPassword" placeholder="Confirm Password" id="">
        <button type="submit" name="submit">REGISTER</button>
    </form>
</div>


<?php
    require_once 'includes/footer.php';
?>
