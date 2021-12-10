<?php
$serverName = "localhost";
$userName = "root";
$password = "";
$dbname = "musify";

//create connection
$connection = mysqli_connect($serverName, $userName, $password, $dbname);

if (!$connection) {
    die("connection failed " . mysqli_connect_error());
}

// echo "connection successful";
