if ($stmt->execute()) {
    // Registration successful, redirect to the thank you page
    header("Location: thank_you.php");
    exit(); // Terminate the script to prevent further execution
} else {
    echo "Error: " . $stmt->error;
}