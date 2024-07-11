<?php 

session_start();

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "oneseat"; // Replace with your database name

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$user_id = $_SESSION['user_id'];

$release_cart_sql = "DELETE FROM cart WHERE user_id = '$user_id'";
$release_cart_result = $conn->query($release_cart_sql);


$_SESSION['status'] = 'Placed the order successfully';
header("Location: /oneseat/index/oneseat.php");

?>