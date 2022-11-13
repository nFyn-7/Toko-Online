<?php

$host      = "localhost";
$user      = "root";
$pass      = "";
$db        = "toko_online";

$koneksi = mysqli_connect($host, $user, $pass, $db);
if (!$koneksi) { //cek koneksi
    die("No Connection");
}
