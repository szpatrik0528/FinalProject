<?php
include("db_config.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $new_email = $_POST["new_email"];
    $new_password = $_POST["new_password"];
    
    // Ellenőrizd, hogy az e-mail már létezik-e az adatbázisban
    $check_email_query = "SELECT * FROM users WHERE email = '$new_email'";
    $result = $conn->query($check_email_query);
    
    if ($result->num_rows > 0) {
        echo "Ez az e-mail cím már regisztrálva van!";
    } else {
        // Az itt szereplő kód csak példa célokat szolgál, és nem biztonságos valós alkalmazásban
        // Jelszó hashelése például: $hashed_password = password_hash($new_password, PASSWORD_DEFAULT);
        $insert_query = "INSERT INTO users (email, password) VALUES ('$new_email', '$new_password')";
        
        if ($conn->query($insert_query) === TRUE) {
            echo "Sikeres regisztráció!";
            // Ide jöhet a bejelentkezési oldalra való átirányítás
        } else {
            echo "Hiba a regisztráció során: " . $conn->error;
        }
    }
    
    $conn->close();
}
?>
