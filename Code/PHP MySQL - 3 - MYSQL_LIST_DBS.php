<?php
$con = mysqli_connect("localhost", "root", "root");
if (!$con) {
    die('Could not connect: ' . mysqli_connect_error());
} else {
    echo "connected";
}
$db_list = mysqli_query($con, "SHOW DATABASES");
echo "<hr>";
while ($db = mysqli_fetch_object($db_list)) {
    echo $db->Database . "<br />";
}

mysqli_close($con);
?>