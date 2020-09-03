<?php
$link = mysqli_connect("localhost", "root", ""); 
mysqli_select_db("test", $link);
$result = mysqli_query("SELECT * FROM student", $link); 
$num_rows = mysqli_num_rows($result);
echo "$num_rows Rows\n"; 
?>