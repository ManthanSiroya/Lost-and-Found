<?php
$servername = "sql305.infinityfree.com";
$username = "if0_40773178";
$password = "teamexplorers";   // EMPTY for XAMPP
$database = "if0_40773178_lostfound";

$conn = new mysqli($servername, $username, $password, $database);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}