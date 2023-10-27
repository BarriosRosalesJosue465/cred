<?php
include("./config.php");

// cek apa tombol daftar udah di klik blom
if (isset($_POST['tambah'])) {
    // ambil data dari form
    $nombre = $_POST['nombre'];
    $apellido = $_POST['apellido'];
    $estado = $_POST['estado'];
    $emal= $_POST['email'];
    $estado = $_POST['estado'];
    $contacto = $_POST['contacto'];

    // query
    $sql = "INSERT INTO cliente(nombre, apellido, email, email, estado, contacto)
    VALUES('$nombre', '$apellido', '$email', '$email', '$estado', '$contacto')";
    $query = mysqli_query($db, $sql);

    // cek apa query berhasil disimpan?
    if ($query)
        header('Location: ./index.php?status=sukses');
    else
        header('Location: ./index.php?status=gagal');
} else
    die("No cargo");

    