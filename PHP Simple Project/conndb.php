<?php
$hostname = 'localhost';
$username = 'root';
$password = 'admin';
$databasename= 'university';

$conn = new mysqli("$hostname", "$username", "$password", "$databasename");


if ($conn->connect_error){
    die('Connection Failed'. $conn->connect_error);
}

else{
    //echo 'Successfully Connected';
}
?>