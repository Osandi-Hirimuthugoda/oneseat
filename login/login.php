<?php

session_start();

$servername = "localhost";
$username = "root";
$password = "";
$db = "oneseat";
$conn = new mysqli($servername, $username, $password, $db);


if ($conn->connect_error) {
    die("" . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST['email'];
    $pwd = $_POST['password'];

    $sql = "SELECT password, user_id FROM user where email='$email'";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        $pass = $row["password"];

        if ($pwd === $pass) {
            $_SESSION['user_id'] = $row["user_id"];
            header("Location: /oneseat/index/oneseat.php");
        } else {
            echo '<script>window.location.href = "/oneseat/login/login_form.php";alert("Invalid password");</script>';
        }
    } else {
        echo '<script>window.location.href = "/oneseat/login/login_form.php";alert("User not found");</script>';
    }

}


?>