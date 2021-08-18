<?php
$host = "localhost";
$username = "u0_a397";
$password = "";
$db = "profile";

$connect = mysqli_connect($host, $username, $password,$db);

if ($connect ==false) {
    echo "database not connected";

}
