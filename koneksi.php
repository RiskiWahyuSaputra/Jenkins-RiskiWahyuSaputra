<?php

$servername = "localhost";
$username = "root"; 
$password = ""; 
$dbname = "jenkins_demo";  
$port = 3306;

$conn = new mysqli($servername, $username, $password, $dbname, $port);


if ($conn->connect_error) {
    echo "<p class='error'>❌ Koneksi GAGAL!</p>";
    echo "<p class='error'>Error: " . $conn->connect_error . "</p>";
} else {
    echo "<p class='success'>✅ Koneksi ke Database BERHASIL!</p>";
}

?>
