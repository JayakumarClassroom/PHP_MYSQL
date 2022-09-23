<?php
$con = mysqli_connect("localhost", "root", "root", "myDB");
if (!$con) {
    die("Could not connect: " . mysqli_connect_error($con));
}
$sql = "DELETE FROM student WHERE FirstName = 'Jaya'";
$exe = mysqli_query($con, $sql);
$rc = mysqli_affected_rows($con);
echo "Records deleted: " . $rc;
mysqli_close($con);
?>