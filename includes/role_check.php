<?php
session_start(); // Start the session if not already started

// Function to check user role
function checkRole($allowedRoles) {
    // Ensure a role is set in the session
    if (!isset($_SESSION['role'])) {
        die("Access denied: Role not set."); // Exit if the role is not set
    }

    // Check if the user's role matches one of the allowed roles
    if (!in_array($_SESSION['role'], $allowedRoles)) {
        die("Access denied: You do not have permission to view this page."); // Exit if access is denied
    }
}
?>
