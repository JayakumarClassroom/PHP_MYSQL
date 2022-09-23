<?php
$con = mysqli_connect("localhost", "root", "root");
if (!$con) {
    die('Could not connect: ' . mysqli_connect_error());
}
if (mysqli_select_db($con, "myDB")) {
    echo "Database Selected Successfully";
} else {
    echo "Error in Selecting Database:  " . mysqli_errno($con);
}

mysqli_close($conn);
?>
