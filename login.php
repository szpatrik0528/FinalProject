<!DOCTYPE html>
<html>

<head>
    <title>Webshop Bejelentkezés</title>
</head>

<body>
    <h2>Bejelentkezés</h2>
    <form method="post" action="login.php">
        <label for="email">E-mail:</label>
        <input type="email" id="email" name="email" required><br><br>
        <label for="password">Jelszó:</label>
        <input type="password" id="password" name="password" required><br><br>
        <input type="submit" value="Bejelentkezés">
    </form>

    <h2>Regisztráció</h2>
    <form method="post" action="register.php">
        <label for="new_email">E-mail:</label>
        <input type="email" id="new_email" name="new_email" required><br><br>
        <label for="new_password">Jelszó:</label>
        <input type="password" id="new_password" name="new_password" required><br><br>
        <input type="submit" value="Regisztráció">
    </form>
</body>

</html>

<?php
// Ellenőrizzük, hogy a bejelentkezési űrlap elküldésre került-e
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Ellenőrizze az e-mailt és jelszót, és vegye fel a szükséges intézkedéseket a bejelentkezéshez
    $email = $_POST["email"];
    $password = $_POST["password"];
    
    // Az itt szereplő ellenőrzések csak példa célokat szolgálnak, és nem biztonságosak valós alkalmazásban
    if ($email === "valós_email@címed.hu" && $password === "valós_jelszavad") {
        echo "Sikeres bejelentkezés!";
        // Ide jöhet a webshop főoldalára való átirányítás
    } else {
        echo "Sikertelen bejelentkezés. Hibás e-mail vagy jelszó.";
    }
}
?>

<?php
include("db_config.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST["email"];
    $password = $_POST["password"];
    
    // Ellenőrizd a felhasználói adatokat az adatbázisban
    $check_user_query = "SELECT * FROM users WHERE email = '$email' AND password = '$password'";
    $result = $conn->query($check_user_query);
    
    if ($result->num_rows > 0) {
        echo "Sikeres bejelentkezés!";
        // Ide jöhet a webshop főoldalára való átirányítás
    } else {
        echo "Sikertelen bejelentkezés. Hibás e-mail vagy jelszó.";
    }
    
    $conn->close();
}
?>