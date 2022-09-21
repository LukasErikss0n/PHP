<?php
include "../server-connect.php";

if(isset($_POST['submit'])){

    $creat_username = $_POST['creatusername'];
    $creat_password = $_POST['creatpassword'];

    $insert_account = "insert into account (username, user_password) values('$creat_username', '$creat_password')";
    $append_account = mysqli_query($con, $insert_account);
    header("location: ../index.php");

}


$con->close();
