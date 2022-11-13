<?php
$nama_user = $_POST["nama_user"];
$alamat_email = $_POST["alamat_email"];
$gender = $_POST['gender'];
$alamat = $_POST['alamat'];
$username = $_POST['username'];
$password = $_POST['password'];

include "koneksi.php";
$input = mysqli_query($koneksi, "INSERT INTO user   
    (nama_user , alamat_email , gender, alamat, username, password) VALUES 
    ('" . $nama_user . "','" . $alamat_email . "','" . $gender . "','" . $alamat . "','" . $username . "','" . md5($password) . "')");

if ($input) {
    echo "<script>alert('Berhasil');location.href='tampil_user.php';</script>";
} else {
    echo "<script>alert('Gagal');location.href='tampil_user.php';</script>";
}
