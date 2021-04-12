<?php
$con = mysqli_connect("localhost", "root", "root", "myDB");
if (!$con) {
    die('Could not connect: ' . mysqli_connect_error());
}
//ASCENDING ORDER
$result = mysqli_query($con, "SELECT * from student ORDER BY RegNo ASC");
//DESCENDING ORDER
$result = mysqli_query($con, "SELECT * from student ORDER BY RegNo DESC");

while ($row = mysqli_fetch_array($result, MYSQLI_NUM)) {
    printf("%s - %s - %s - %s -  %s -  %s - %s ", $row[0], $row[1], $row[2], $row[3], $row[4], $row[5], $row[6], $row[7]);

    printf("<br>");
}
mysqli_close($con);
?>