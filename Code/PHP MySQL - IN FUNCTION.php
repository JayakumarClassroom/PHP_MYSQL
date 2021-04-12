<?php
// Create connection
$con = mysqli_connect(localhost, 'root', 'root', 'myDB');

// Check connection
if (!$con) {
    die('Connection failed: ' . mysqli_connect_error());
}

//IN Function --------------------------------------
echo '<h4>mySQL - IN Function </h4>';
$result = mysqli_query($con, "SELECT RegNo, FirstName, Course from student WHERE COURSE IN ('BTECH','MCA')");

while ($row = mysqli_fetch_array($result, MYSQLI_NUM)) {
    printf('%s --  %s --  %s', $row[0], $row[1], $row[2]);
    echo '<br>';
}

print '<hr>';

//NOT IN Function --------------------------------------
echo '<h4>mySQL - NOT IN Function </h4>';
$result = mysqli_query($con, "SELECT RegNo, FirstName, Course from student WHERE COURSE NOT IN ('BTECH','MCA', 'BCA','BSC','MS','MBA')");

while ($row = mysqli_fetch_array($result, MYSQLI_NUM)) {
    printf('%s --  %s --  %s', $row[0], $row[1], $row[2]);
    echo '<br>';
}

print '<hr>';

mysqli_close($con);
?>