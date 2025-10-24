<?php
// Database settings for Project Part 2

$host = "localhost";
$user = "root";
$pwd  = "";
$sql_db = "dsv_db";

// Establish connection
$conn = @mysqli_connect($host, $user, $pwd, $sql_db);

// Optional: simple connection check
if (!$conn) {
    die("Database connection failed: " . mysqli_connect_error());
}
?>
