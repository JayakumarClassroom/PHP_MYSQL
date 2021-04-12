<?php
$con = mysqli_connect("localhost", "root", "root", "myDB");
if (!$con) {
    die('Could not connect: ' . mysqli_connect_error());
}
//ASCENDING ORDER
$result = mysqli_query($con, "SELECT RegNo, Course from student ORDER BY RegNo");
//DESCENDING ORDER
// $result = mysqli_query($con, "SELECT RegNo, Course from student ORDER BY RegNo DESC");

while ($row = mysqli_fetch_array($result, MYSQLI_NUM)) {
    printf("%s - %s", $row[0], $row[1]);

    printf("<br>");
}
mysqli_close($con);
?>