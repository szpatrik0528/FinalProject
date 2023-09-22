<?php
$servername = "localhost"; // Az adatbázis szerver neve
$username = "felhasznalonev"; // Az adatbázis felhasználóneve
$password = "jelszo"; // Az adatbázis jelszava
$dbname = "webshop"; // Az adatbázis neve

// Kapcsolódás az adatbázishoz
$conn = new mysqli($servername, $username, $password, $dbname);

// Ellenőrizzük a kapcsolatot
if ($conn->connect_error) {
    die("Kapcsolódási hiba: " . $conn->connect_error);
}
?>

if ($stmt->execute()) {
    // Registration successful, redirect to the thank you page
    header("Location: thank_you.php");
    exit(); // Terminate the script to prevent further execution
} else {
    echo "Error: " . $stmt->error;
}