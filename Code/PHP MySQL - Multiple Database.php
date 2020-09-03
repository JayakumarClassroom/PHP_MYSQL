//Multiple databases can be used at a time.

<?php
$con = mysqli_connect(“localhost","root","");

$db1 = mysqli_select_db("library"); //DB-1
$db2 = mysqli_select_db("lib"); //DB-2

$result1 = mysqli_query("select * from book", $db1);
$result2 = mysqli_query("select * from libbook", $db2);
mysqli_close($con);
?>