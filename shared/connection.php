<?php

//Server Information
$servername = '';
$username = '';
$password = '';
$dbname = '';

// Initiate Connection
$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
    echo "Connection Failed";
}

// Global cookie name
$cookie = 'username';
