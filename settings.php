<?php
$host = "localhost";
$user = "root";
$pwd = "";
$sql_db = "dsv_database";

$conn = @mysqli_connect($host, $user, $pwd, $sql_db);
if (!$conn) {
    die("<p>Error: Unable to connect to the database.</p>");
}
?>
