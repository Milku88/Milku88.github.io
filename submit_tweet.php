<?php
// Połączenie z bazą danych
$servername = "localhost";
$username = "username";
$password = "password";
$dbname = "mydb";

$conn = new mysqli($servername, $username, $password, $dbname);

// Sprawdzenie połączenia
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Dodanie tweetu do bazy danych
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["username"];
    $tweet = $_POST["tweet"];

    $sql = "INSERT INTO tweets (username, tweet) VALUES ('$username', '$tweet')";

    if ($conn->query($sql) === TRUE) {
        echo "Tweet added successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

// Zamknięcie połączenia z bazą danych
$conn->close();
?>
