<?php
$con=mysqli_connect("localhost","root","root","myDB");

if (mysqli_connect_errno()) {
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
    exit();
}

// Perform a query, check for error
if (!mysqli_query($con,"INSERT INTO Persons (FirstName) VALUES ('Glenn')")) {
    echo("Error description: " . mysqli_error($con));
    echo("</br> Errorcode: " . mysqli_errno($con));
}

mysqli_close($con);
?>