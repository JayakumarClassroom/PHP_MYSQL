<?php
$con = mysqli_connect("localhost", "root", "root");
if (!$con) {
    die('Could not connect: ' . mysqli_connect_error());
}
$sql = "CREATE DATABASE myDB";
if (mysqli_query($con, $sql)) {
    echo "Database created successfully";
} else {
    echo "Error creating database:  " . mysqli_errno($con);
}

mysqli_close($conn);
?>