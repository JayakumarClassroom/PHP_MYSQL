INSERT INTO TABLE FORM
<html>

<body>
    <form action="insertinto_table.php" method="post">
        firstname: <input type="text" name="firstname" />
        lastname:<input type="text" name="lastname" />
        Age: <input type="text" name="age" />
        <input type="submit" name="submit" value="Submit" />
    </form>
</body>

</html>

// INSERT INTO TABLE PHP
<?php
$con = mysqli_connect("localhost","root",""); 
if (!$con)
{
    die('Could not connect: ' . mysqli_error()); }
    mysqli_select_db("sample", $con);
    $sql="INSERT INTO student (FirstName, LastName, Age) VALUES ('$_POST[firstname]','$_POST[lastname]','$_POST[age]')";
    if (!mysqli_query($sql,$con))
    {
        die('Error: ' . mysqli_error());
    }
    echo "1 record added";
    mysqli_close($con)
    ?>