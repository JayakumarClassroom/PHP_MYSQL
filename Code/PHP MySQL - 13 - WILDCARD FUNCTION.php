<?php
// Create connection
$con = mysqli_connect(localhost, 'root', 'root', 'myDB');

// Check connection
if (!$con) {
    die('Connection failed: ' . mysqli_connect_error());
}


// ONE (_) UNDERSCORE = ONE CHARACTER


//WILDCARD Function --------------------------------------
echo '<h4>mySQL - WILDCARD Function  B___ </h4>';
$result = mysqli_query($con, "SELECT RegNo, FirstName, Course from student WHERE COURSE LIKE 'B__'");
//TWO UNDERSCORE - TWO CHARACTERS
while ($row = mysqli_fetch_array($result, MYSQLI_NUM)) {
    printf('%s --  %s --  %s', $row[0], $row[1], $row[2]);
    echo '<br>';
}

print '<hr>';

//WILDCARD Function --------------------------------------
echo '<h4>mySQL - WILDCARD Function - _CA </h4>';
$result = mysqli_query($con, "SELECT RegNo, FirstName, Course from student WHERE COURSE LIKE '_CA'");
//ONE UNDERSCORE - ONE CHARACTERS
while ($row = mysqli_fetch_array($result, MYSQLI_NUM)) {
    printf('%s --  %s --  %s', $row[0], $row[1], $row[2]);
    echo '<br>';
}

print '<hr>';

//WILDCARD Function --------------------------------------
echo '<h4>mySQL - WILDCARD Function - _C_ </h4>';
$result = mysqli_query($con, "SELECT RegNo, FirstName, Course from student WHERE COURSE LIKE '_C_'");
//ONE UNDERSCORE - ONE CHARACTERS
while ($row = mysqli_fetch_array($result, MYSQLI_NUM)) {
    printf('%s --  %s --  %s', $row[0], $row[1], $row[2]);
    echo '<br>';
}

print '<hr>';

//WILDCARD Function --------------------------------------
echo '<h4>mySQL - WILDCARD Function - V_ll_r_ </h4>';
$result = mysqli_query($con, "SELECT RegNo, FirstName, Location from student WHERE LOCATION LIKE 'V_ll_r_'");
//ONE UNDERSCORE - ONE CHARACTERS
while ($row = mysqli_fetch_array($result, MYSQLI_NUM)) {
    printf('%s --  %s --  %s', $row[0], $row[1], $row[2]);
    echo '<br>';
}

print '<hr>';

mysqli_close($con);
?>