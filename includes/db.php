<?php
session_start(); // Start the session

$servername = "localhost";
$username = "root"; // Default username for XAMPP
$password = ""; // Default password for XAMPP
$dbname = "fothebys";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Check for a role in the session
if (isset($_SESSION['role'])) {
    $role = $_SESSION['role']; // Get the role from the session

    // Example query using the role
    $sql = "SELECT * FROM users WHERE user_role = ?";
    $stmt = $conn->prepare($sql);

    if (!$stmt) {
        die("SQL error: " . $conn->error); // Debug SQL errors
    }

    $stmt->bind_param("s", $role); // Bind the role parameter
    $stmt->execute();
    $result = $stmt->get_result();
} else {
    // If role is not set in the session, you may handle it as needed
    // die("Role is not set in the session."); // Uncomment if you want an error here
}
?>
