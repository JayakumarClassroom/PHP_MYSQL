<?php
$con = mysqli_connect("localhost", "root", "root", "myDB");
$result = mysqli_query($con, "SELECT * FROM student");
$num_rows = mysqli_num_rows($result);
echo "$num_rows Rows\n";
?>