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
