<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Jenkins CI/CD Demo - Status Koneksi</title>
    <style>
        body { font-family: Arial, sans-serif; text-align: center; margin-top: 50px; }
        .container { border: 1px solid #ccc; padding: 20px; width: 80%; margin: 0 auto; }
        .success { color: green; font-weight: bold; }
        .error { color: red; font-weight: bold; }
    </style>
</head>
<body>
    <div class="container">
        <h1>Demonstrasi Jenkins CI/CD</h1>
        <h2>Status Koneksi Database:</h2>
        
        <?php
            // Memanggil file koneksi.php untuk menjalankan proses koneksi
            include 'koneksi.php';
        ?>
        
        <p>Jika kode ini terlihat di browser (setelah deployment berhasil), berarti Jenkins CI/CD Anda berjalan!</p>
    </div>
</body>
</html>
