<?php
    if (isset($_POST['submit'])){
        $file = $_FILES['file'];
        $name = $_FILES['file']['name']; // find file name
        $tmp_name = $_FILES['file']['tmp_name']; // find temporary name
        $size = $_FILES['file']['size']; // find file size
        $error = $_FILES['file']['error']; // find errors 

        //Explode from punctuation mark
        $tempExtension = explode('.', $name);

        $fileExtension = strtolower(end($tempExtension));

        //Allowed Extensions
        $isAllowed = array('jpg', 'jpeg', 'pdf', 'png');

        //0 = no error , 1 = error
        if (in_array($fileExtension, $isAllowed)){
            if ($error === 0){
                if ($size < 30000){
                    //to avoid overriding of files
                    $newFileName = uniqid('', true) . "." . $fileExtension;
                    $fileDestination = "d4-SUPERGLOBALS/uploads". $newFileName;
                    move_uploaded_file($tmp_name, $fileDestination);
                    header("Location: file.php?uploadedsuccess");
                } else{
                    echo "The file size is too big";
                }
            } else {
                echo "There was an error while uploading";
            }
        } else{
            echo "Sorry, your file type is not accepted";
        }


    }
?>