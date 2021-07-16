<?php
$server = "localhost";
$username = "root";
$password = "";
$database = "sp_koi";

$kon=mysqli_connect($server,$username,$password) or die("Connection Error");
mysqli_select_db($kon,$database) or die ("Database Connection Error");

?>