<?php
// Create connection
$con = mysqli_connect(localhost, "root", "root", "myDB");

// Check connection
if (!$con) {
    die("Connection failed: " . mysqli_connect_error());
} else {
    mysqli_query($con, "TRUNCATE TABLE student");
    echo "All the Data Removed from the Table";
    exit();
}

mysqli_close($con);
?>
