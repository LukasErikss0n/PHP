<?php
include "server-connect.php";

if(isset($_POST['submit'])){
    $input_name = $_POST['username'];
    $input_password = $_POST['password'];
    if($input_name === "" or $input_password === ""){
        $input_name = "incorrect";
        $input_password = "nopasswordfound";
    }

    $user_info = "SELECT id, username, user_password from account where username = '$input_name'";
    $result = $con->query($user_info);

    if (mysqli_num_rows($result) > 0) {
        $obj = mysqli_fetch_assoc($result);
        $name = $obj['username'];
        $id = $obj['id'];
        $password = $obj['user_password'];

        if($name === $input_name && $password === $input_password){
            session_start();
            $_SESSION["username"] = $input_name;
            header("location:logdin.php");

        }else{
            echo "no account found by the name " . $input_name. " pleas try again ";
            echo "<a href = 'index.php'>go back</a>";
        }
         
    } else {
        echo "no account found, incorrect password or username";
        echo "<a href = 'index.php'>go back</a>";
    }
    
    $con->close();

}