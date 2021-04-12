<?php
// Create connection
$con = mysqli_connect(localhost, 'root', 'root', 'myDB');

// Check connection
if (!$con) {
    die('Connection failed: ' . mysqli_connect_error());
}

//AND OPERATOR --------------------------------------
echo '<h4>mySQL - AND operator</h4>';
$result = mysqli_query($con, "SELECT * from student WHERE course = 'mba' AND location='vellore'");
while ($row = mysqli_fetch_array($result, MYSQLI_NUM)) {
    printf('%s - %s - %s - %s -  %s -  %s - %s ', $row[0], $row[1], $row[2], $row[3], $row[4], $row[5], $row[6], $row[7]);
    printf('<br>');
}

print '<hr>';

//OR OPERATOR --------------------------------------

echo '<h4>mySQL - OR operator</h4>';
$result = mysqli_query($con, "SELECT * from student WHERE course = 'PHD' OR location='OHIO' OR age='30'");
while ($row = mysqli_fetch_array($result, MYSQLI_NUM)) {
    printf('%s - %s - %s - %s -  %s -  %s - %s ', $row[0], $row[1], $row[2], $row[3], $row[4], $row[5], $row[6], $row[7]);
    printf('<br>');
}

print '<hr>';

//NOT OPERATOR --------------------------------------
echo '<h4>mySQL - NOT operator</h4>';
$result = mysqli_query($con, "SELECT * from student WHERE NOT course = 'mba' AND location='vellore'");
while ($row = mysqli_fetch_array($result, MYSQLI_NUM)) {
    printf('%s - %s - %s - %s -  %s -  %s - %s ', $row[0], $row[1], $row[2], $row[3], $row[4], $row[5], $row[6], $row[7]);
    printf('<br>');
}
print '<hr>';
//TWO NOT OPERATOR --------------------------------------
echo '<h4>mySQL - NOT operator - TWO TIMES</h4>';
$result = mysqli_query($con, "SELECT * from student WHERE NOT course = 'mba' AND NOT location='vellore'");
while ($row = mysqli_fetch_array($result, MYSQLI_NUM)) {
    printf('%s - %s - %s - %s -  %s -  %s - %s ', $row[0], $row[1], $row[2], $row[3], $row[4], $row[5], $row[6], $row[7]);
    printf('<br>');
}
mysqli_close($conn);
