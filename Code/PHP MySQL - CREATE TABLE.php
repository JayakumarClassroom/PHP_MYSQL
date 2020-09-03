 <?php
 $servername = "localhost";
 $username = "jay";
 $password = "";
 $dbname = "myDB";
 
 // Create connection
 $conn = mysqli_connect($servername, $username, $password, $dbname);
 // Check connection
 if (!$conn) {
	die("Connection failed: " . mysqli_connect_error());
}

// sql to create table
$sql = "CREATE TABLE MyGuests (
	id INT(6),
	firstname VARCHAR(30),
	lastname VARCHAR(30),
	email VARCHAR(50),
	reg_date TIMESTAMP
	)";
	
	if (mysqli_query($conn, $sql)) {
		echo "Table MyGuests created successfully";
	} else {
		echo "Error creating table: " . mysqli_error($conn);
	}
	
	mysqli_close($conn);
	?>