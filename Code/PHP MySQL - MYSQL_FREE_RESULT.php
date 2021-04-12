<?php
$con = mysqli_connect("localhost", "root", "root", myDB);
if (!$con) {
    die('Could not connect: ' . mysqli_connect_error());
}
$sql = "SELECT * from student";
$result = mysqli_query($con, $sql);
print_r(mysqli_fetch_row($result));
print "<hr>";
// Free memory
mysql_free_result($result);
print_r(mysqli_fetch_row($result)); //mysql_free_result($result);
print "<br>";
mysql_close($con);
?>