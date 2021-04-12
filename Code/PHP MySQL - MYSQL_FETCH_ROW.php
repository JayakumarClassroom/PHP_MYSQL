<?php
$con = mysqli_connect("localhost", "root", "root", "myDB");
if (!$con) {
    die('Could not connect: ' . mysqli_connect_error());
}

$result = mysqli_query($con, "SELECT Course,FirstName FROM student WHERE Location = 'Ohio'");
if (!$result) {
    echo 'Could not run query: ' . mysqli_error($con);
}
$row = mysqli_fetch_row($result);
echo "<b>Course : </b>" . $row[0];
echo "<br>";
echo "<b>FirstName: </b>" . $row[1];
?>