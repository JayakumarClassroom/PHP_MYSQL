<?php
$con = mysqli_connect("localhost", "root", "root", "myDB");
if (!$con) {
    die('Could not connect: ' . mysqli_connect_error());
}

echo "<h1>Numeric Array</h1>";
//Numeric Array
$sql = "SELECT * from student WHERE Course='PhD'";
$result = mysqli_query($con, $sql);
while ($row = mysqli_fetch_array($result, MYSQLI_NUM)) {
    echo "<br><br>";
    print_r($row);
}

echo "<br><br><hr><hr>";
echo "<h1>Associate Array</h1>";
//Associate Array
$sql1 = "SELECT * from student WHERE Course='MBA'";
$result1 = mysqli_query($con, $sql1);
while ($row1 = mysqli_fetch_array($result1, MYSQLI_ASSOC)) {
    echo "<br><br>";
    print_r($row1);
}
echo '<br><br><hr><hr>';
echo "<h1>BOTH Array</h1>";
//BOTH(NUMERIC and ASSOCIATIVE) Array
$sql = "SELECT * from student WHERE Course='PhD'";
$result = mysqli_query($con, $sql);
while ($row = mysqli_fetch_array($result, MYSQLI_BOTH)) {
    echo "<br><br>";
    print_r($row);
}

mysqli_close($con);
?>