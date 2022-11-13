<?php
$id_user = $_POST['id_user'];
$nama_user = $_POST["nama_user"];
$alamat_email = $_POST["alamat_email"];
$gender = $_POST['gender'];
$alamat = $_POST['alamat'];
$username = $_POST['username'];
$password = $_POST['password'];

include "koneksi.php";
$input = mysqli_query($koneksi, "UPDATE user SET nama_user='" . $nama_user . "', alamat_email='" . 
$alamat_email . "', gender='" . $gender . "' , alamat= '" . $alamat . "' , username= '" . 
$username . "' , password= '" . md5($password) . " where id_user = '" . $id_user . "'");

if ($input) {
    echo "<script>alert('Berhasil');location.href='tampil_user.php';</script>";
} else {
    echo "<script>alert('Gagal');location.href='tampil_user.php';</script>";
}
