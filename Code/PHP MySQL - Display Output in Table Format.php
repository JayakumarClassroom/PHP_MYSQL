<html>
<body>
<?php 
$con = mysqli_connect("localhost", "root", "root", "myDB"); 
$query = "SELECT * FROM student where course = 'bca'";
echo '<table border="1" cellspacing="0" cellpadding="10"> 
      <tr> 
          <td> <font face="Arial" color="red"><b>RegNo</b></font> </td> 
          <td> <font face="Arial" color="red"><b>FirstName</b></font> </td> 
          <td> <font face="Arial"><b>LastName</b></font> </td> 
          <td> <font face="Arial"><b>Course</b></font> </td> 
          <td> <font face="Arial"><b>Location</b></font> </td> 
      </tr>';

if ($result = mysqli_query($con, $query)) {
    while ($row = mysqli_fetch_assoc($result)) {
        $field1name = $row["RegNo"];
        $field2name = $row["FirstName"];
        $field3name = $row["LastName"];
        $field4name = $row["Course"];
        $field5name = $row["Location"]; 

        echo '<tr> 
                  <td>'.$field1name.'</td> 
                  <td>'.$field2name.'</td> 
                  <td>'.$field3name.'</td> 
                  <td>'.$field4name.'</td> 
                  <td>'.$field5name.'</td> 
              </tr>';
    }
} 
?>
</body>
</html>