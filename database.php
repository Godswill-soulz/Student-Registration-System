<?php
$host="localhost";
$userName="root";
$password="";
$dbname="student_db";

$conn = new mysqli($host, $userName, $password, $dbname);
if ($conn->connect_error){
    die("Connection failed:".$conn->connect_error);
}
?>