<?php
mysqli_connect("localhost", "jay", "") or die(mysqli_connect_error()); 
echo "Connection to the server was successful!";
mysqli_select_db("myDB");
echo "<br/> Database was selected"; 
?>