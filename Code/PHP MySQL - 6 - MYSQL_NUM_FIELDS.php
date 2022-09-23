<?php
$con = mysqli_connect("localhost", "root", "root", myDB);
if (!$con) {
    die('Could not connect: ' . mysqli_connect_error());
}

$result = mysqli_query($con, "SELECT * FROM student");
if (!$result) {
    echo 'Could not run query: ' . mysqli_error($con);
    exit();
}
print mysqli_num_fields($result);

echo "<br><hr>";
$result = mysqli_query($con, "SELECT RegNo, FirstName FROM student");
if (!$result) {
    echo 'Could not run query: ' . mysqli_error($con);
    exit();
}
print mysqli_num_fields($result);
?>