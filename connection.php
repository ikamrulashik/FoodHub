<?php
    $servername="localhost";
    $username="username";
    $password="password";
    $db_name="foodhub";

// Create connection
    $conn = mysqli_connect($servername, $username, $password, $db_name);

// Check connection
if ($conn -> connect_errno) {
    echo "Failed to connect to MySQL: " . $conn -> connect_error;
    exit();
} 
?>