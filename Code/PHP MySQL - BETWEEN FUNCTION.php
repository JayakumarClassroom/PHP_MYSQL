<?php
// Create connection
$con = mysqli_connect(localhost, 'root', 'root', 'myDB');

// Check connection
if (!$con) {
    die('Connection failed: ' . mysqli_connect_error());
}

//BETWEEN Function --------------------------------------
echo '<h4>mySQL - BETWEEN Function </h4>';
$result = mysqli_query($con, 'SELECT RegNo, AGE from student WHERE AGE BETWEEN 20 AND 30');
while ($row = mysqli_fetch_array($result, MYSQLI_NUM)) {
    printf('%s ----  %s', $row[0], $row[1]);
    echo '<br>';
}

print '<hr>';

//NOT BETWEEN Function --------------------------------------
echo '<h4>mySQL - NOT BETWEEN Function </h4>';
$result = mysqli_query($con, 'SELECT RegNo, AGE from student WHERE AGE NOT BETWEEN 20 AND 30');
while ($row = mysqli_fetch_array($result, MYSQLI_NUM)) {
    printf('%s ----  %s', $row[0], $row[1]);
    echo '<br>';
}

print '<hr>';

// BETWEEN - TEXT VALUE Function --------------------------------------
echo '<h4>mySQL - BETWEEN - TEXT VALUE Function </h4>';
$result = mysqli_query($con, "SELECT RegNo, FIRSTNAME from student WHERE FIRSTNAME BETWEEN 'A' AND 'D'");
while ($row = mysqli_fetch_array($result, MYSQLI_NUM)) {
    printf('%s ----  %s', $row[0], $row[1]);
    echo '<br>';
}

print '<hr>';

//NOT BETWEEN  - TEXT VALUE Function --------------------------------------
echo '<h4>mySQL - NOT BETWEEN Function </h4>';
$result = mysqli_query($con, "SELECT RegNo, FIRSTNAME from student WHERE FIRSTNAME NOT BETWEEN 'A' AND 'P'");
while ($row = mysqli_fetch_array($result, MYSQLI_NUM)) {
    printf('%s ----  %s', $row[0], $row[1]);
    echo '<br>';
}

print '<hr>';

//BETWEEN  - DATE Function --------------------------------------
echo '<h4>mySQL - DATE BETWEEN Function </h4>';
$result = mysqli_query($con, "SELECT RegNo, FIRSTNAME from student WHERE FIRSTNAME BETWEEN '2020-01-01' AND '2021-03-31' ");
while ($row = mysqli_fetch_array($result, MYSQLI_NUM)) {
    printf('%s ----  %s', $row[0], $row[1]);
    echo '<br>';
}

print '<hr>';

mysqli_close($con);
?>