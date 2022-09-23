<?php
// Create connection
$con = mysqli_connect(localhost, 'root', 'root', 'myDB');

// Check connection
if (!$con) {
    die('Connection failed: ' . mysqli_connect_error());
}

//Min Function --------------------------------------
echo '<h4>mySQL - Minimum Function - AGE</h4>';
$result = mysqli_query($con, 'SELECT MIN(Age) from student');

while ($row = mysqli_fetch_array($result, MYSQLI_NUM)) {
    echo '<font color ="blue"> Minimum Value is : ', $row[0];
    echo '</font><br>';
}

print '<hr>';

//Max Function --------------------------------------
echo '<h4>mySQL - Maximum Function - AGE</h4>';
$result = mysqli_query($con, 'SELECT MAX(Age) from student');
while ($row = mysqli_fetch_array($result, MYSQLI_NUM)) {
    echo '<font color ="blue"> Maximum Value is : ', $row[0];
    echo '</font><br>';
}

print '<hr>';

mysqli_close($con);
?>