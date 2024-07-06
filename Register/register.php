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
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $email = $_POST['email'];
    $pwd = $_POST['password'];

    $sql = "INSERT INTO user (first_name, last_name, email, password) VALUES ('$fname', '$lname', '$email', '$pwd')";
    $result = $conn->query($sql);

    if ($result === true) {
        echo "successfully registered! ";
        header("Location:/oneseat/login/login_form.php");
    } else {
        echo "Error: " . $conn->error;

    }
}


?>