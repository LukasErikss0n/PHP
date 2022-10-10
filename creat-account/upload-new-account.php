<?php
include "../server-connect.php";

if(isset($_POST['submit'])){

    $creat_username = $_POST['creatusername'];
    $creat_password = $_POST['creatpassword'];

    $hash_password = password_hash($creat_password, PASSWORD_DEFAULT);//: string

    $insert_account = "insert into account (username, user_password) values('$creat_username', '$hash_password')";
    $append_account = mysqli_query($con, $insert_account);
    header("location: ../index.php");

}


$con->close();
