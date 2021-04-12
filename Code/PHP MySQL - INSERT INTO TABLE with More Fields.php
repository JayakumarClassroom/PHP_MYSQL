<?php
$conn = mysqli_connect("localhost", "root", "root", "myDB");
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
//FIRST Method
$sql = "INSERT INTO student (RegNo, FirstName, LastName, Age, Email, Location, Course) VALUES ('1001','Jaya','Kumar','30','jayakumars@vit.ac.in','vellore','Btech')";

if (mysqli_query($conn, $sql)) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

//SECOND METHOD
mysqli_query($conn, "INSERT INTO student VALUES('1002','Mike','Sam','10','sammike@gmail.com','chennai','BCA')");
mysqli_query($conn, "INSERT INTO student VALUES('1003','Steve','Jobs','50','steve@vit.ac.in','Bangalore','MCA')");
mysqli_query($conn, "INSERT INTO student VALUES('1004','Andrew','Mika','22','andrew@vit.ac.in','California','MS')");
mysqli_query($conn, "INSERT INTO student VALUES('1005','Mariyam','Mariya','25','Mariyam@vit.ac.in','istanbul','BSC')");
mysqli_query($conn, "INSERT INTO student VALUES('1006','Ash','win','5','ash@vit.ac.in','NewYork','MSC')");
mysqli_query($conn, "INSERT INTO student VALUES('1007','Diya','Jay','15','diya@vit.ac.in','London','PhD')");
mysqli_query($conn, "INSERT INTO student VALUES('1008','Sri','M','25','sri@vit.ac.in','Ohio','MBA')");
mysqli_query($conn, "INSERT INTO student VALUES('1009','Ashwin','win','5','ash@vit.ac.in','Vellore','MSC')");
mysqli_query($conn, "INSERT INTO student VALUES('1010','DiyaAishwaryah','Jay','15','diya@vit.ac.in','Vellore','PhD')");
mysqli_query($conn, "INSERT INTO student VALUES('1011','Sree','M','25','sri@vit.ac.in','Vellore','MBA')");

mysqli_close($conn);
?>