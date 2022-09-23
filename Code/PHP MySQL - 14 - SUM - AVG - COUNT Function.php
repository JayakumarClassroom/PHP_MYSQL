<?php
// Create connection
$con = mysqli_connect(localhost, 'root', 'root', 'myDB');

// Check connection
if (!$con) {
    die('Connection failed: ' . mysqli_connect_error());
}

//COUNT Function --------------------------------------
echo '<h4>mySQL - COUNT Function</h4>';
$result = mysqli_query($con, 'SELECT COUNT(Age) from student');
while ($row = mysqli_fetch_array($result, MYSQLI_NUM)) {
    echo '<font color ="blue"> Total Count is : ', $row[0];
    echo '</font><br>';
}

print '<hr>';

//AVERAGE Function --------------------------------------
echo '<h4>mySQL - AVERAGE Function</h4>';
$result = mysqli_query($con, 'SELECT AVG(Age) from student');
while ($row = mysqli_fetch_array($result, MYSQLI_NUM)) {
    echo '<font color ="blue"> Average is : ', $row[0];
    echo '</font><br>';
}

print '<hr>';

//SUM Function --------------------------------------
echo '<h4>mySQL - SUM Function</h4>';
$result = mysqli_query($con, 'SELECT SUM(Age) from student');
while ($row = mysqli_fetch_array($result, MYSQLI_NUM)) {
    echo '<font color ="blue"> Sum is : ', $row[0];
    echo '</font><br>';
}

print '<hr>';

mysqli_close($con);
?>