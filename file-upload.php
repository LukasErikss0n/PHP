<?php
session_start();
 if (isset($_SESSION["username"])) {
    echo "success uploading the file";
 }