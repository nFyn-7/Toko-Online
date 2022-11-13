<?php
$id_deskripsi = $_POST['id_deskripsi'];
$dimension = $_POST['dimension'];
$display = $_POST['display'];
$camera = $_POST['camera'];
$platform = $_POST['platform'];
$battery = $_POST['battery'];

include "koneksi.php";
$input = mysqli_query($koneksi, "UPDATE deskripsi SET dimension='" . $dimension . "', 
    display='" . $display . "', camera='" . $camera . "', platform='" . $platform . "',
    battery='" . $battery . "' where id_deskripsi = '" . $id_deskripsi . "'");

if ($input) {
    echo "<script>alert('Berhasil');location.href='tampil_hp.php';</script>";
} else {
    echo "<script>alert('Gagal');location.href='tampil_hp.php';</script>";
}
