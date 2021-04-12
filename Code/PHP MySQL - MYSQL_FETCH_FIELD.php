<?php
$con = mysqli_connect("localhost", "root", "root", "myDB");
if (!$con) {
    die('Could not connect: ' . mysqli_connect_error());
}

$result = mysqli_query($con, "SELECT * from student");
while ($property = mysqli_fetch_field($result)) {
    echo "Field name: " . $property->name . "<br />";
    echo "Table name: " . $property->table . "<br />";
    echo "Default value: " . $property->def . "<br />";
    echo "Max length: " . $property->max_length . "<br />";
    echo "Not NULL: " . $property->not_null . "<br />";
    echo "Primary Key: " . $property->primary_key . "<br />";
    echo "Unique Key: " . $property->unique_key . "<br />";
    echo "Mutliple Key: " . $property->multiple_key . "<br />";
    echo "Numeric Field: " . $property->numeric . "<br />";
    echo "BLOB: " . $property->blob . "<br />";
    echo "Field Type: " . $property->type . "<br />";
    echo "Unsigned: " . $property->unsigned . "<br />";
    echo "Zero-filled: " . $property->zerofill . "<br /><br />";
}
mysqli_close($con);
?>