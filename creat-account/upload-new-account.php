<?php
include "../server-connect.php";

if(isset($_POST['submit'])){

    $creat_username = $_POST['creatusername'];
    $creat_password = $_POST['creatpassword'];
    echo $creat_password;

    if($creat_username !== "" && $creat_password !== "") {
        $stmt = $con->prepare("SELECT id, username, user_password from account where username = ?");
        $stmt->bind_param("s", $creat_username);
        $stmt->execute();
        $result = $stmt->get_result();

        if (!mysqli_num_rows($result) > 0) {
            $hash_password = password_hash($creat_password, PASSWORD_DEFAULT);//: string
            $insert_account = "insert into account (username, user_password) values('$creat_username', '$hash_password')";
            $append_account = mysqli_query($con, $insert_account);
            header("location: ../index.php");
            
        }else{
            header("location: ../creat-account/creat-loggin.php?error=invalid");

            //echo "<a href='../index.php' class='go-back'>Go back</a>";
            //echo "<br>";
            //echo "username already exist";
        }

    }else {
            header("location: ../creat-account/creat-loggin.php?error=empty");
            //echo "Error" . "please full in the fields";
            //echo "värden måste vara i fyllda";
        }

}   


$con->close();
