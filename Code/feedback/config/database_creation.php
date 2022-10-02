<?php
define('DB_HOST', 'localhost');
define('DB_USER', 'root');
define('DB_PASS', 'root');

$con = new mysqli(DB_HOST, DB_USER, DB_PASS);
if (!$con) {
    die('Could not connect: ' . mysqli_connect_error());
}

$sql = "CREATE DATABASE FeedbackDB";
mysqli_query($con, $sql);

mysqli_select_db($con, "FeedbackDB");
//Table Creation
$sql = "create table feedback (
    id int NOT NULL AUTO_INCREMENT,
    name varchar(50), 
    email varchar(100), 
    body varchar(300), 
    DateofReg TIMESTAMP, 
    PRIMARY KEY (Id))";

if (!mysqli_query($con, $sql)) {
    die('Error: ' . mysqli_errno($con));
}
echo "Table Created Successfully";

mysqli_close($con);