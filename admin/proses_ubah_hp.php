<?php
$id_hp = $_POST["id_hp"];
$seri_hp = $_POST["seri_hp"];
$harga = $_POST["harga"];
$deskripsi = $_POST['deskripsi'];

include "koneksi.php";
if ($_FILES['foto']['tmp_name']) {
    $temp = $_FILES['foto']['tmp_name'];
    $type = $_FILES['foto']['type'];
    $size = $_FILES['foto']['size'];
    $name = rand(0, 9999) . $_FILES['foto']['name'];
    $folder = "../foto/";

    if ($size < 2048000 and ($type == 'image/jpeg' or $type == 'image/png')) {
        $query_foto = mysqli_query($koneksi, "SELECT * FROM hp where id_hp = '" . $_POST['id_hp'] . "'");
        $data_foto = mysqli_fetch_array($query_foto);
        unlink('../foto/' . $data_foto['foto']);

        move_uploaded_file($temp, $folder . $name);
        $input = mysqli_query($koneksi, "UPDATE hp SET 
            seri_hp='" . $seri_hp . "', harga='" . $harga . "',
            deskripsi='" . $deskripsi . "', foto='" . $name . "'
            where id_hp='" . $id_hp . "'");

        if ($input) {
            echo "<script>alert('Berhasil');location.href='tampil_hp.php';</script>";
        } else {
            echo "<script>alert('Gagal');location.href='tampil_hp.php';</script>";
        }
    }
} else {
    $input = mysqli_query($koneksi, "UPDATE hp SET seri_hp='" . $seri_hp . "', 
        harga='" . $harga . "', deskripsi='" . $deskripsi . "' where id_hp='" . $id_hp . "'");

    if ($input) {
        echo "<script>alert('Berhasil');location.href='tampil_hp.php';</script>";
    } else {
        echo "<script>alert('Gagal');location.href='tampil_hp.php';</script>";
    }
}
