<?php
require_once("../config/config.php");

$name = $_REQUEST["name"];
$birthday = $_REQUEST["birthday"];
$gender = $_REQUEST["gender"];
$email = $_REQUEST["email"];
$phone = $_REQUEST["phone"];


$insertData = "INSERT INTO users(name,birthday,gender,email,phone) VALUES ('$name','$birthday','$gender','$email','$phone')";
$query = mysqli_query($connect,$insertData);
if ($query == true) {
   header("location:../index.php?done");
}else {
    echo "Data not inserted successfully";
}















