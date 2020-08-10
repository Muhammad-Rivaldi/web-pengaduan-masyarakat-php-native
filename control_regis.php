<?php

    // menghubungkan dengan koneksi
    include('koneksi2.php');
    // filter data yang diinputkan
    $nik = filter_input(INPUT_POST, 'nik', FILTER_SANITIZE_STRING);
    $namel = filter_input(INPUT_POST, 'namel', FILTER_SANITIZE_STRING);
    $username = filter_input(INPUT_POST, 'username', FILTER_SANITIZE_STRING);
    $nohp = filter_input(INPUT_POST, 'nohp', FILTER_SANITIZE_STRING);
    $password = filter_input(INPUT_POST, 'pw', FILTER_SANITIZE_STRING);


    // menyiapkan query
    $sql = "INSERT INTO `masyarakat` (`nik`, `nama`, `username`, `password`, `telp`) VALUES (:nik, :namel, :username, :pw, :nohp);";
    $stmt = $koneksi->prepare($sql);

    // bind parameter ke query
    $params = array(
        ":nik" => $nik,
        ":namel" => $namel,
        ":username" => $username,
        ":pw" => $password,
        ":nohp" => $nohp
    );

    // eksekusi query untuk menyimpan ke database
    $saved = $stmt->execute($params);

    // jika query simpan berhasil, maka user sudah terdaftar
    // maka alihkan ke halaman regis berhasil
    if($saved) header("Location: regis_berhasil.php");
    
?>