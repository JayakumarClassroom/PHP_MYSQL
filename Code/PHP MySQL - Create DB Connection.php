<?php
$conn = mysqli_connect("localhost", "jay", "");
if (!$conn) {
    die("Connection failed:".mysqli_connect_error());
}
else{
    echo "Connected successfully";
}
?>
