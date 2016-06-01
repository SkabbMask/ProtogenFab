<?php

$servername = "antonnordenfur.com.mysql";
$username = "antonnordenfur_";
$password = "xfV5Hvig";
$dbname = "antonnordenfur_";

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

?>