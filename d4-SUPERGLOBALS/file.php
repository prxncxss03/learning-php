<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>File</title>
</head>
<body>
<?php
//$_FILES
//How to upload files
//1. Upload it to the root
//2. Directly to the database


// echo $_FILES['file']['name']. "<br>";
// echo $_FILES['file']['type'] . "<br>";
// echo $_FILES['file']['tmp_name'] . "<br>"; //temporary location
// echo $_FILES['file']['error'] . "<br>"; //temporary location

//enctype = multipart/form-data
//specifies how the form data should be encoded
?>
<form action="upload.php" method="post" enctype="multipart/form-data">
    <input type="file" name="file" >
    <button type="submit">SUBMIT</button>

</form>
</body>
</html>