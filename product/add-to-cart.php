<?php


$servername = "localhost";
$username = "root";
$password = "";
$db = "oneseat";
$conn = new mysqli($servername, $username, $password, $db);


if ($conn->connect_error) {
    die("" . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
}


?>