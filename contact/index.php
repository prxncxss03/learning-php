<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="style.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div class="heading">
        <h1>Contact Us</h1>
        <p>We're happy to serve you</p>
    </div>
    <form action="contact/contact.php" method="post">
        <input type="text" name="name" placeholder="Full Name">
        <input type="text" name="email" placeholder="Email">
        <input type="text" name="subject" placeholder="Subject">
        <textarea name="message" placeholder="Enter message" id="" cols="30" rows="10"></textarea>
        <button type="submit" name="submit">SEND E-MAIL</button>

    </form>
<?php
//5:36:17
?>
    
</body>
</html>