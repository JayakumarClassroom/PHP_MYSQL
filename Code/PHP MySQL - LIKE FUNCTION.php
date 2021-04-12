<?php
// Create connection
$con = mysqli_connect(localhost, 'root', 'root', 'myDB');

// Check connection
if (!$con) {
    die('Connection failed: ' . mysqli_connect_error());
}


//  % - Zero or More Characters


//LIKE Function --------------------------------------
echo '<h4>mySQL - Like Function  B% </h4>';

$result = mysqli_query($con, "SELECT RegNo, FirstName, Course from student WHERE COURSE LIKE 'B%'");

while ($row = mysqli_fetch_array($result, MYSQLI_NUM)) {
    printf('%s --  %s --  %s', $row[0], $row[1], $row[2]);
    echo '</font><br>';
}

print '<hr>';

//LIKE Function --------------------------------------
echo '<h4>mySQL - Like Function - %H </h4>';
$result = mysqli_query($con, "SELECT RegNo, FirstName, Course from student WHERE COURSE LIKE '%H'");
while ($row = mysqli_fetch_array($result, MYSQLI_NUM)) {
    printf('%s --  %s --  %s', $row[0], $row[1], $row[2]);
    echo '</font><br>';
}

print '<hr>';

//LIKE Function --------------------------------------
echo '<h4>mySQL - Like Function - %C% </h4>';
$result = mysqli_query($con, "SELECT RegNo, FirstName, Course from student WHERE COURSE LIKE '%C%'");
while ($row = mysqli_fetch_array($result, MYSQLI_NUM)) {
    printf('%s --  %s --  %s', $row[0], $row[1], $row[2]);
    echo '</font><br>';
}

print '<hr>';

//LIKE Function --------------------------------------
echo '<h4>mySQL - Like Function - B%H </h4>';
$result = mysqli_query($con, "SELECT RegNo, FirstName, Course from student WHERE COURSE LIKE 'B%H'");
//STARTS WITH B ENDS WITH H
while ($row = mysqli_fetch_array($result, MYSQLI_NUM)) {
    printf('%s --  %s --  %s', $row[0], $row[1], $row[2]);
    echo '</font><br>';
}
print '<hr>';

//LIKE Function --------------------------------------
echo '<h4>mySQL - Like Function - %CA </h4>';
$result = mysqli_query($con, "SELECT RegNo, FirstName, Course from student WHERE COURSE LIKE '%CA'");

while ($row = mysqli_fetch_array($result, MYSQLI_NUM)) {
    printf('%s --  %s --  %s', $row[0], $row[1], $row[2]);
    echo '</font><br>';
}
print '<hr>';

mysqli_close($con);
?>