<?php
// Create connection
$con = mysqli_connect(localhost, 'root', 'root', 'myDB');

// Check connection
if (!$con) {
    die('Connection failed: ' . mysqli_connect_error());
}

//LIKE Function --------------------------------------
echo '<h4>mySQL - Like Function  B__% </h4>';

$result = mysqli_query($con, "SELECT RegNo, FirstName, Course from student WHERE COURSE LIKE 'B__%'");

//TWO UNDERSCORE = TWO CHARACTER
while ($row = mysqli_fetch_array($result, MYSQLI_NUM)) {
    printf('%s --  %s --  %s', $row[0], $row[1], $row[2]);
    echo '</font><br>';
}

print '<hr>';

//LIKE Function --------------------------------------
echo '<h4>mySQL - Like Function - %_C </h4>';
$result = mysqli_query($con, "SELECT RegNo, FirstName, Course from student WHERE COURSE LIKE '%_C'");

while ($row = mysqli_fetch_array($result, MYSQLI_NUM)) {
    printf('%s --  %s --  %s', $row[0], $row[1], $row[2]);
    echo '</font><br>';
}

print '<hr>';
mysqli_close($con);
?>