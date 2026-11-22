<?php
//connection
include "db.php";
// insert query
$sql="INSERT INTO students(name,email,phone,department) VALUES ('Abdur Rahman','rahman@gmail.com','01537890930','CSE')";
mysqli_query($conn,$sql);

?>