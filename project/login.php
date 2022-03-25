
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
    <h1>login</h1>
    <p>No account? <a href="register.php">Register here</a></p>
    <!-- method - specifies the HTTP method in submitting the form -->
    <form action="/feb-php/project/includes/login-inc.php" method="post">
        <input type="text" name="username" placeholder="username" >
        <input type="password" name="password" placeholder="password">
        <button type="submit" name="submit">LOG IN</button>
    </form>
</div>


<?php
    require_once 'includes/footer.php';
?>
