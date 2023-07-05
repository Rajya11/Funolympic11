<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "user";


// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}
// echo "Connected successfully";

// Select the registration table
mysqli_select_db($conn, "register");

// Proceed with your database operations
// ...
