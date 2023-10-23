<?php
$servername = "localhost";
$KullaniciAdi = "melisa";
$Sifre = "meral1996";
$database = "melisa";
$email = "melisakpl@hotmail.com";

// Create connection
$conn = new mysqli($servername, $KullaniciAdi, $Sifre, $database, $email);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>