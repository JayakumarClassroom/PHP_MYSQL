<?php
$conn = mysqli_connect("localhost", "root", "root", "myDB");
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$sql = "INSERT INTO student (FirstName, LastName, Age)
VALUES ('Jaya', 'Kumar', 30)";

if (mysqli_query($conn, $sql)) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
mysqli_close($conn);
?>