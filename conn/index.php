<!-- Koneksi ke dalam database -->
<?php
$servername = "101.50.2.172";
$username = "elpe";
$password = "Bismillah99!";

// Create connection
$conn = new mysqli($servername, $username, $password);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";
?>