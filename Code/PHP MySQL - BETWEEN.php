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
echo "<h1> BETWEEN </h1>";

$sql = "SELECT firstname FROM MyGuests WHERE ID BETWEEN 10 AND 100";
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

$sql = "SELECT id,firstname FROM MyGuests WHERE ID BETWEEN 10 AND 100";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
  // output data of each row
  while($row = mysqli_fetch_assoc($result)) {
    echo "id : " . $row["id"]. " - Name : " . $row["firstname"]."<br>";
  }
} else {
  echo "0 results";
}

echo "<hr>";
echo "<h1> NOT BETWEEN </h1>";

$sql = "SELECT id,firstname FROM MyGuests WHERE ID NOT BETWEEN 10 AND 100";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
  // output data of each row
  while($row = mysqli_fetch_assoc($result)) {
    echo "id : " . $row["id"]. " - Name : " . $row["firstname"]."<br>";
  }
} else {
  echo "0 results";
}




mysqli_close($conn);
?>