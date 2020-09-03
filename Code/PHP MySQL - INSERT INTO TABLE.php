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

$sql = "INSERT INTO MyGuests (id, firstname, lastname, email)
VALUES (2, 'John', '', 'john@example.com')";

$sql1= "INSERT INTO MyGuests VALUES
('2','Jay','kumar','iamjayakumars@gmail.com','2020-09-02 22:03:30')";

$sql2= "INSERT INTO MyGuests (id, firstname, lastname) 
VALUES (13,'mike', 'jack' )";


if (mysqli_query($conn, $sql)) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_query($conn,$sql1);
mysqli_query($conn,$sql2);


mysqli_close($conn);
?>