<?php
$con = mysqli_connect("localhost", "root", "root");
echo "MySQL server info: " . mysqli_get_server_info($con);
?>