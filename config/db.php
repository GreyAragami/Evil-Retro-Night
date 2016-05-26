<?php
$servername = "dt5.ehb.be";
$username = "AWD078";
$password = "56391724";
$dbname = "AWD078";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection

if ($conn->connect_errno) {
    die("Connection failed: " . $conn->connect_error);
}