<?php
//Connection
$con = mysqli_connect("localhost", "root", "root");
if (!$con) {
    die('Could not connect: ' . mysqli_error());
} else {
    echo "Connection Connected <br>";
}

//Database Selection

//mysqli_select_db($con, "myDBdd");
if (mysqli_select_db($con, "myDB")) {
    echo "Database Selected Successfully <br>";
} else {
    echo "Error in Selecting the Database <br>", mysqli_errno($con);
}

//Table Creation

$sql = "create table student (RegNo varchar(10), FirstName varchar(25), LastName varchar(25), Age Int(3), Email varchar(25), Location Varchar(25), Course varchar(10))";

if (!mysqli_query($con, $sql)) {
    die('Error: ' . mysqli_error($con));
}
echo "Table Created Successfully";

mysqli_close($con);
?>
