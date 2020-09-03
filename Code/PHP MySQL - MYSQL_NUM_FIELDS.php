<?php
$con = mysqli_connect("localhost", "root", ""); 
if (!$con)
{
    die('Could not connect: ' . mysqli_error()); 
}
$db_selected = mysqli_select_db("test",$con);
$result = mysqli_query("SELECT course,batch FROM student WHERE name = 'student5'");

if (!$result)
{
    echo 'Could not run query: ' . mysqli_error();
    exit; 
}
print (mysqli_num_fields($result)); 
?>