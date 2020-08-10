<?php
    // mengaktifkan session
    session_start();
    // menghapus semua session
    session_destroy();
    // mengalihkan halaman login
    header("location:home.php?pesan=anda berhasil logout.")
?>