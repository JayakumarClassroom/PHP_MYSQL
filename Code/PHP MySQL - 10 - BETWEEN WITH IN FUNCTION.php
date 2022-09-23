<?php
// Create connection
$con = mysqli_connect('localhost', 'root', 'root', 'myDB');

// Check connection
if (!$con) {
    die('Connection failed: ' . mysqli_connect_error());
}


//BETWEEN with IN Function --------------------------------------
echo '<h4>mySQL - BETWEEN with IN Function  </h4>';
$result = mysqli_query($con, "SELECT RegNo, AGE from student WHERE AGE BETWEEN 20 AND 30 AND COURSE IN ('MBA')");
while ($row = mysqli_fetch_array($result, MYSQLI_NUM)) {
    printf('%s ----  %s', $row[0], $row[1]);
    echo '<br>';
}

print '<hr>';

//BETWEEN with NOT IN Function --------------------------------------
echo '<h4>mySQL - BETWEEN with NOT IN Function  </h4>';
$result = mysqli_query($con, "SELECT RegNo, AGE from student WHERE AGE BETWEEN 20 AND 30 AND COURSE NOT IN ('MBA')");
while ($row = mysqli_fetch_array($result, MYSQLI_NUM)) {
    printf('%s ----  %s', $row[0], $row[1]);
    echo '<br>';
}

print '<hr>';


//BETWEEN with NOT IN Function - OR OPERATOR --------------------------------------
echo '<h4>mySQL - BETWEEN with NOT IN Function - OR OPERATOR  </h4>';

$result = mysqli_query($con, "SELECT COURSE, AGE from student WHERE AGE BETWEEN 20 AND 30 OR COURSE NOT IN ('MBA')");

while ($row = mysqli_fetch_array($result, MYSQLI_NUM)) {
    printf('%s ----  %s', $row[0], $row[1]);
    echo '<br>';
}

mysqli_close($con);
?>