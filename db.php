<?php

require "config/constants.php";

$servername = "local host";
$username = "root";
$password = "";
$db = "db_ecommerce";

// Create connection
$con = mysqli_connect($servername, $username, $password,$db);

// Check connection
if (!$con) {
    die("Connection failed: " . mysqli_connect_error());
}


?>