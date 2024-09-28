<?php
session_start(); // Start the session

// Database connection
$conn = new mysqli("localhost", "root", "", "secasa");
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Check if email is set
if (!isset($_POST['email'])) {
    $_SESSION['error_message'] = "Access Denied. Email not set.";
    header("Location: error.php");
    exit;
}

// Get email from POST request
$email = $_POST['email'];
$_SESSION['email'] = $email; // Store email in session for future use, but do not display it

// Function to check if user is admin in the 'stpauls' table
function isStPaulsAdmin($email, $conn) {
    $sql = "SELECT admin FROM stpauls WHERE email = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("s", $email);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        return $row['admin'] == 1; // Return true if user is an admin in stpauls
    }
    
    return false; // Not an admin
}

// Validate if user is an admin in the 'stpauls' table
if (isStPaulsAdmin($email, $conn)) {
    // User is an admin in stpauls, redirect to saint-specific send page
    header("Location: stpauladmin-form.php");
    exit;
} else {
    $_SESSION['error_message'] = "Access Denied. You are not an admin.";
    header("Location: error.php"); // Redirect to error page
    exit;
}

$conn->close();
?>
