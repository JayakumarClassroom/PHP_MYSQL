<?php
$con = mysqli_connect("localhost","root",""); 
if (!$con)
{
    die("Could not connect: " . mysqli_error()); 
}
mysqli_select_db("test");
mysqli_query("DELETE FROM student WHERE student_ID = 11"); 
$rc = mysqli_affected_rows();
echo "Records deleted: " . $rc;
mysqli_close($con); 
?>