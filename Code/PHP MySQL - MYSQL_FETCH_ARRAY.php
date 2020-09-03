<?php
$con = mysqli_connect("localhost", "root", ""); 
if (!$con)
{
    die('Could not connect: ' . mysqli_error()); 
}

$db_selected = mysqli_select_db("test",$con);

$result = mysqli_query("SELECT * from student",$con); 
print($result);
print ("<br>");
print_r(mysqli_fetch_array($result));
print ("<br>");
while ($row = mysqli_fetch_array($result, MYSQL_NUM)) 
{
    printf("student_ID: %u name: %s batch: %s course: %s", $row[0], $row[1], $row[2],$row[3]);
    print("<br>"); 
}
mysqli_close($con); 
?>