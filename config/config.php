<?php
$host = "remotemysql.com:3306";
$username = "riJE0Jcpoi";
$password = "SPgJT0HkwN";
$db = "riJE0Jcpoi";

$connect = mysqli_connect($host, $username, $password,$db);

if ($connect ==false) {
    echo "database not connected";

}
