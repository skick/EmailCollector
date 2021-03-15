<?php

//Configuration for connecting to MySQL server
$dbServername = "localhost";
$dbUsername = "root";
$dbPassword = "";
$dbName = "emails";

//Connection variable for other files
$conn = @mysqli_connect($dbServername, $dbUsername, $dbPassword, $dbName);
