<?php
$con = mysqli_connect("localhost", "root", ""); 
if (!$con)
{
    die('Could not connect: ' . mysqli_error()); 
}
$db_list = mysqli_list_dbs($con);
while ($db = mysqli_fetch_object($db_list))
{
    echo $db->Database . "<br />";
}
mysqli_close($con); 
?>