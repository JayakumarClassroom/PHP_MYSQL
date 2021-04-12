<?php
$con = mysqli_connect("localhost", "root", "root", "myDB");
if (!$con) {
    die('Could not connect: ' . mysqli_connect_error());
}

$result = mysqli_query($con, "SELECT Course, Location FROM student WHERE FirstName = 'Jaya'");
if (!$result) {
    echo 'Could not run query: ' . mysqli_error($con);
    exit();
}
//Assocaiate Array
$row = mysqli_fetch_assoc($result);
echo $row[Course];
echo "<br>";
echo $row[Location];
?>