<?php
$host = "localhost";
$username = "root";
$password = "";
$db = "profile";

$connect = mysqli_connect($host, $username, $password,$db);

if ($connect ==false) {
    echo "database not connected";

}