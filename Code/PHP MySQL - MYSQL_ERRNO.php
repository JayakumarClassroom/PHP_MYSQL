<?php
$con = mysqli_connect("localhost", "wrong_user", "wrong_pwd");
if (!$con) {
    //MYSQL_ERRNO
    die('Could not connect: ' . mysqli_connect_errno());

}
mysqli_close($con);
?>