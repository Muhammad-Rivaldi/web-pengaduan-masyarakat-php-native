<?php

    // mengaktifkan session php
    session_start();

    // menghubungkan dengan koneksi
    include 'koneksi.php';

    // menangkap data yang dikirim ke form
    $username = $_POST['username'];
    $password = $_POST['pw'];

    // menyeleksi data user dengan username dan password yang sesuai
    $result = mysqli_query($conn,"SELECT * FROM `masyarakat` WHERE `username` = '$username' AND `password`='$password'");

    $cek = mysqli_num_rows($result);

    if ($cek > 0) {
        $data = mysqli_fetch_assoc($result);
        // menyimpan session user,nama,status ,dan id login
        $_SESSION['username'] = $username;
        $_SESSION['nama'] = $data['nama'];
        $_SESSION['status'] = "sudah_login";
        $_SESSION['id_login'] = $data['id'];
        header("location:users.php");
    } else {
        header("location:login.php?pesan=gagal login data tidak di temukan.");
    }
?>