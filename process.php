<?php
include "database.php";

if (isset($_POST['submit'])){
    $user = mysqli_real_escape_string($connection,$_POST['user']);
    $msg = mysqli_real_escape_string($connection,$_POST['message']);
//    Set TimeZone
    date_default_timezone_set('Asia/Dhaka');
    $time = date('h:i:s a', time());

    if (!isset($user) || $user == "" || !isset($msg) || $msg == ""){
        $error = "Please fill your name and message";\
        header("Location: index.php?error=".urlencode($error));
        exit();
    }else{
        $query = "INSERT INTO shouts (user, message, time) VALUES ('$user', '$msg', '$time')";
        if (!mysqli_query($connection, $query)){
            die("Error". mysqli_error($connection));
        }else{
            header("Location: index.php");
        }
    }
}