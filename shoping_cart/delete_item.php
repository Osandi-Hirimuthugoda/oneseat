<?php
session_start();
// Database connection
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "oneseat"; // Replace with your database name

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Get product ID and quantity from POST request
$product_id = intval($_POST['product_id']);
$quantity = intval($_POST['quantity']);

//$user_id = $_SESSION['user_id']; // Example: assuming user ID is stored in session
$user_id = $_SESSION['user_id'];

// Update the product quantity in the product table
$product_sql = "UPDATE product SET product_quantity = product_quantity + $quantity WHERE product_id = $product_id";
$conn->query($product_sql);

// Remove the product from the cart
$cart_sql = "SELECT * FROM cart WHERE user_id = $user_id AND cart_status = 'active'";
$cart_result = $conn->query($cart_sql);

if ($cart_result->num_rows > 0) {
    $row = $cart_result->fetch_assoc();
    $product_ids = explode(',', $row['product_ids']);
    $quantities = explode(',', $row['quantities']);

    // Find the index of the product to remove
    $index = array_search($product_id, $product_ids);
    if ($index !== false) {
        // Remove the product ID and quantity from the arrays
        array_splice($product_ids, $index, 1);
        array_splice($quantities, $index, 1);

        // Update the cart in the database
        $new_product_ids = implode(',', $product_ids);
        $new_quantities = implode(',', $quantities);
        $update_cart_sql = "UPDATE cart SET product_ids = '$new_product_ids', quantities = '$new_quantities' WHERE user_id = '$user_id' AND cart_status = 'active'";
        $conn->query($update_cart_sql);
    }
}

$conn->close();

// Redirect back to the cart page
header("Location: cart.php");
exit();
?>