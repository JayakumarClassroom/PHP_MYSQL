<?php
$con = mysqli_connect("localhost", "root", "root", "myDB");
if (!$con) {
    die('Could not connect: ' . mysqli_connect_error());
} 

$sql = "SELECT * from student";
$result = mysqli_query($con, $sql);
while ($row = mysqli_fetch_object($result)) {
    echo $row->FirstName . "<br />";
}
mysqli_close($con);
?>