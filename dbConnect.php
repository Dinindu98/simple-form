<?php
$servername = "localhost";
$username = "root"; //username (in here i gave as root)
$password = ""; //password

// Create connection
$conn = new mysqli($servername, $username, $password);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
echo "Connected successfully";
?>