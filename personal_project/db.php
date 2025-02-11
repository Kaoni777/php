<?php
$host = "localhost";
$user = "root"; // Change if necessary
$password = ""; // Change if necessary
$database = "online_voting";

$conn = new mysqli($host, $user, $password, $database);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>