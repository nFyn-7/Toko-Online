<?php
$seri_hp = $_POST["seri_hp"];
$harga = $_POST["harga"];

$dimension = $_POST['dimension'];
$display = $_POST['display'];
$camera = $_POST['camera'];
$platform = $_POST['platform'];
$battery = $_POST['battery'];

$temp = $_FILES['foto']['tmp_name'];
$type = $_FILES['foto']['type'];
$size = $_FILES['foto']['size'];
$name = rand(0, 9999) . $_FILES['foto']['name'];
$folder = "../foto/";

include "koneksi.php";

if ($size < 2048000 and ($type == 'image/jpeg' or $type == 'image/png')) {
    $inputdesk = mysqli_query($koneksi, "INSERT INTO deskripsi 
        (dimension, display, camera, platform, battery) VALUES 
        ('" . $dimension . "', '" . $display . "','" . $camera . "','" . $platform . "','" . $battery . "')");

    $id = mysqli_insert_id($koneksi);

    move_uploaded_file($temp, $folder . $name);
    $input = mysqli_query($koneksi, "INSERT INTO hp 
        (seri_hp, harga, id_deskripsi, foto) VALUES 
        ('" . $seri_hp . "','" . $harga . "', '" . $id . "','" . $name . "')");

    if ($input) {
        echo "<script>alert('Berhasil');location.href='tampil_hp.php';</script>";
    } else {
        echo "<script>alert('Gagal');location.href='tampil_hp.php';</script>";
    }
}
