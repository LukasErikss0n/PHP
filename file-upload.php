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

        $allowed = array ('jpg', 'png');

        if (in_array($fileActualExtensionLower, $allowed)) {
            if ($fileError === 0) {
                if ($fileSize < 500000000) { //ta bort 2 nollor

                    $fileDestination = 'uploads/ ' . $fileName;
                    move_uploaded_file($fileTempName, $fileDestination);
                    $myfile = fopen("textfile.txt", "a") or die("Unable to open file!");
                    $txt = $_SESSION['username'] .": " . $fileName . "\n";
                    fwrite($myfile, $txt);
                    fclose($myfile);
                    header("location:logdin.php?upploadsuccess");

                } else {
                    echo "your file is to big";
                }
            }else {
                echo "there was an error uploading your file";
            }
        }else {
            echo "you cannot upload files of this type";
        }

    }
   
}else{
    echo "please login before you uppload";
}





