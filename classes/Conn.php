<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 *
$server = "localhost";
$user = "root";
$password = "";
$dbName = "havanah";
$conn = new mysqli($server, $user, $password, $dbName);

***/
?>

<?php
$servername = "localhost";
$username = "root";
$password = "root";
$db = "tutorking";
$baseURL = "http://localhost:8888/tutorking/";

// Create connection
$conn = new mysqli($servername, $username, $password, $db);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
