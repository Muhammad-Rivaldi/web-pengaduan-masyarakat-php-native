<?php
    // memmulai session yang di simpan pada browser
    session_start();

    // cek apakah sesuai status sudah login? kalau belum akan kembali ke form login
    if ($_SESSION['status']!="sudah_login") {
        // melakukan pengalihan 
        header("location:login.php");
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman user SiapLapor!</title>
</head>
<body>
    

    <h1>uy! selamat datang <?php echo $_SESSION['nama'] ?></h1>
    <br>
    <a href="logout.php">Klik disini untuk logout</a>
</body>
</html>