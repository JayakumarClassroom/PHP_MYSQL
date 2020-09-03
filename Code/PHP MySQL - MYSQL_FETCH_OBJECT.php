<?php
$con = mysqli_connect("localhost", "root", ""); 
if (!$con)
{
    die('Could not connect: ' . mysqli_error()); 
}
$db_selected = mysqli_select_db("test",$con); $sql = "SELECT * from student";
$result = mysqli_query($sql,$con);
while ($row = mysqli_fetch_object($result)) 
{
    echo $row->name . "<br />"; 
}
mysqli_close($con); 
?>