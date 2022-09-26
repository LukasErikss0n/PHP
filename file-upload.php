<?php
session_start();
 if (isset($_SESSION["username"])) {
    if(isset($_POST['submit'])){
        $file = $_FILES['file'];

        $fileName = $_FILES['file']['name'];
        $fileTempName = $_FILES['file']['tmp_name'];
        $fileSize = $_FILES['file']['size'];
        $fileError = $_FILES['file']['error'];
        $fileType = $_FILES['file']['type'];

        $fileExtensionUpper = explode('.', $fileName);
        $fileActualExtensionLower = strtolower(end($fileExtensionUpper));

        $allowed = array ('jpg');

        if (in_array($fileActualExtensionLower, $allowed)) {
            if ($fileError === 0) {
                if ($fileSize < 5000000) {
                    $fileDestination = 'uploads/ ' . $fileName;
                    move_uploaded_file($fileTempName, $fileDestination);
                    header("location: logdin.php?upploadsuccess");


                } else {
                    echo "your file is to big";
                }
            } else {
                echo "there was an error uploading your file";
            }
        }else {
            echo "you cannot upload files of this type";
        }

    }
} else{
    echo "please login before you uppload";
}



//move_uploaded_file($_FILES)

