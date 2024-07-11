<?php
session_start();

// Database connection
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "oneseat";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Fetch product ID and quantity from POST data
$product_id = $_POST['product_id'];
$quantity = $_POST['quantity'];

// Retrieve cart for the current user (if user is logged in)
// $user_id = $_SESSION['user_id']; // Example: assuming user ID is stored in session
$user_id = $_SESSION['user_id'];

// Check if the user has an active cart
$sql = "SELECT * FROM cart WHERE user_id = '$user_id' AND cart_status = 'active'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // Active cart exists, update existing cart
    $cart_data = $result->fetch_assoc();
    $existing_product_ids = $cart_data['product_ids'];
    $existing_quantities = $cart_data['quantities'];

    // Convert string data to arrays
    $product_ids_array = explode(',', $existing_product_ids);
    $quantities_array = explode(',', $existing_quantities);

    // Check if product already exists in the cart
    $index = array_search($product_id, $product_ids_array);

    if ($index !== false) {
        // Product already in cart, update quantity
        $quantities_array[$index] += $quantity;
    } else {
        // Product not in cart, add new product
        $product_ids_array[] = $product_id;
        $quantities_array[] = $quantity;
    }

    // Convert arrays back to strings
    $updated_product_ids = implode(',', $product_ids_array);
    $updated_quantities = implode(',', $quantities_array);

    // Update cart in database
    $update_sql = "UPDATE cart SET product_ids = '$updated_product_ids', quantities = '$updated_quantities' WHERE user_id = '$user_id' AND cart_status = 'active'";

    if ($conn->query($update_sql) === TRUE) {
        header("Location: page.php?id=$product_id");
    } else {
        echo "Error updating cart: " . $conn->error;
    }
    header("Location:/oneseat/shoping_cart/cart.php");
} else {
    // No active cart found, create a new cart entry
    $insert_sql = "INSERT INTO cart (user_id, product_ids, quantities, cart_status) VALUES ('$user_id', '$product_id', '$quantity', 'active')";

    if ($conn->query($insert_sql) === TRUE) {
        header("Location: page.php?id=$product_id");
    } else {
        echo "Error creating new cart: " . $conn->error;
    }
    header("Location:/oneseat/shoping_cart/cart.php");
}
// Update product quantity in the product table
$product_update_sql = "UPDATE product SET product_quantity = product_quantity - $quantity WHERE product_id = $product_id";

if ($conn->query($product_update_sql) !== TRUE) {
    echo "Error updating product quantity: " . $conn->error;
    $conn->close();
    exit();
}
$conn->close();
// header("Location: page.php");
?>