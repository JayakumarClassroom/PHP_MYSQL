INSERT INTO TABLE FORM
<html>

<body>
    <form action="mysql.php" method="post">
        firstname: <input type="text" name="firstname" />
        <br> lastname: <input type="text" name="lastname" />
        <br> Age: <input type="text" name="age" />
        <br>
        <input type="submit" name="submit" value="Submit" />
    </form>
</body>

</html>

// INSERT INTO TABLE PHP
<?php
$con = mysqli_connect("localhost", "root", "root", "myDB");
if (!$con) {
    die("Connection failed: " . mysqli_connect_error($con));
}
//Inserting to Database via HTML Table
$sql = "INSERT INTO student (FirstName, LastName, Age) VALUES ('$_POST[firstname]','$_POST[lastname]','$_POST[age]')";
if (!mysqli_query($con, $sql)) {
    die('Error: ' . mysqli_error($con));
}
echo "1 record added";
mysqli_close($con);
?>