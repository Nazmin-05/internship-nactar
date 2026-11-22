<?php
$host="localhost";
$username="root";
$password="";
$database="student_db";
//create database connection.
$conn=mysqli_connect($host,$username,$password,$database);
if(!$conn){
    die("database connection fail".mysqli_connect_error);
}
echo("Connect Successfully.")
?>