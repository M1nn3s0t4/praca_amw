<?php
// Dane dostępowe do bazy danych
$servername = "localhost"; // Nazwa serwera (np. localhost)
$username = "root"; // Nazwa użytkownika bazy danych
$password = ""; // Hasło użytkownika bazy danych
$db = "uzytkownicy"; // Nazwa bazy danych

// Tworzenie połączenia z bazą danych
$conn = new mysqli($servername, $username, $password, $db);

// Sprawdzenie połączenia
if ($conn->connect_error) {
    die("Błąd połączenia z bazą danych: " . $conn->connect_error);
} 
?>