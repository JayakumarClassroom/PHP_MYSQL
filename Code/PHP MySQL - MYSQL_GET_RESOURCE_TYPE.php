<?php
// prints: mysql link
$c = mysqli_connect("localhost", "root", ""); 
echo $c;
echo get_resource_type($c) . "<br>";
// prints: file
$fp = fopen("foo", "w");
echo $fp;
echo get_resource_type($fp) ;
?>