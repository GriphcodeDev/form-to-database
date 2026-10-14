<?php
$conn = new mysqli("localhost", "griphcode", "12345", "mydata");

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}