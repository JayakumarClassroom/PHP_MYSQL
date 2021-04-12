<?php
$con = mysqli_connect("localhost", "root", "root", "myDB");
if (!$con) {
    die('Could not connect: ' . mysqli_connect_error());
}

$result = mysqli_query($con, "SELECT * from student");
print_r($result);
echo "<br><br>";
//print_r(mysqli_fetch_array($result));
echo "<br><hr><br>";
// MYSQLI_NUM => Numeric array
// %S -> String
// %d -> Numeric
while ($row = mysqli_fetch_array($result, MYSQLI_NUM)) {
    printf("FirstName: %s  - LastName: %s  - Age: %s ", $row[0], $row[1], $row[2]);
    //printf("%s %s %s ", $row[0], $row[1], $row[2]);

    printf("<br>");
}
mysqli_close($con);
?>