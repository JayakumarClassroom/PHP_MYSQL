<?php
$con = mysqli_connect("localhost", "root", ""); 
if (!$con)
{
    die('Could not connect: ' . mysqli_error());
}
$db_selected = mysqli_select_db("test",$con);
$sql = "SELECT * from student";
$result = mysqli_query($sql,$con);
print_r(mysqli_fetch_row($result));
print ("<br>");
// Free memory
mysqli_free_result($result); 
print(mysqli_num_rows($result));
$db_selected = mysqli_select_db("asection",$con);
$sql = "SELECT * from student";
$result = mysqli_query($sql,$con);
print_r(mysqli_fetch_row($result)); //mysqli_free_result($result);
print ("<br>");
print(mysqli_num_rows($result));
mysqli_close($con);
?>