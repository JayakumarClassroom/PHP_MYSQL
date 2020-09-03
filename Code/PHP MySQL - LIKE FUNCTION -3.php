<?php
$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "myDB";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

echo "<h3> UNDERSCORE Function </h3>";

$sql = "SELECT * FROM MyGuests where firstname like 'M__E'";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
  // output data of each row
  while($row = mysqli_fetch_assoc($result)) {
    echo "Name : " . $row["firstname"]."<br>";
  }
} else {
  echo "0 results";
}


echo "<hr>";
echo "<h3> NOT UNDERSCORE Function </h3>";

$sql = "SELECT * FROM MyGuests where firstname NOT like 'M__E'";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
  // output data of each row
  while($row = mysqli_fetch_assoc($result)) {
    echo "Name : " . $row["firstname"]."<br>";
  }
} else {
  echo "0 results";
}




mysqli_close($conn);
?>