<?php
$con = mysqli_connect("localhost", "root", "root");
if (!$con) {
    die('Could not connect: ' . mysqli_connect_error());
}
if (mysqli_query($con, "DROP DATABASE myDBbb")) {
    echo "Database Dropped Successfully";
} else {
    echo "Error in dropping  Database:  " . mysqli_errno($con);
}

mysqli_close($conn);
?>
