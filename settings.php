<?php
// Database connection configuration
$host = "localhost";
$user = "root";
$pwd = "";
$sql_db = "dsv_db"; 

// Create the connection
$conn = @mysqli_connect($host, $user, $pwd, $sql_db);

// Check connection
if (!$conn) {
    die("<p>Database connection failed: " . mysqli_connect_error() . "</p>");
}
?>
