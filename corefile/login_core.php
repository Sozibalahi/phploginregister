<?php
require_once("../config/config.php");
//get user input 
$email = $_REQUEST["email"];
$password = $_REQUEST["password"];


$selectData = "SELECT * FROM users WHERE email='$email' AND password='$password'";
$query = mysqli_query($connect,$selectData);

if ($query ==true) {
    $dataCount = mysqli_num_rows($query);
    if ($dataCount===1) {
        setcookie("myuser", $email,time()+(68400*20));
        header("Location:../dashbord.php");
    }
}