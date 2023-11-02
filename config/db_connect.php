<?php
$servername = "localhost";
$database = "tour_travels";
$username = "phpmyadmin";
$password = "root";
 
// Create connection
 
$conn = mysqli_connect($servername, $username, $password, $database);
 
// Check connection
 
if (!$conn) {
 
    die("Connection failed: " . mysqli_connect_error());
 
}
else{
    // echo"connected successfuly";
}
