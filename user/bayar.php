<?php
if ($_GET['id']) {
    include "koneksi.php";
    $id = $_GET['id'];
    $cek = mysqli_query($koneksi, "SELECT * FROM pembelian_hp
                         WHERE id_pembelian_hp = '" . $id . "'");

    $dt_beli = mysqli_fetch_array($cek);
    
    $beli =  mysqli_query($koneksi, "INSERT INTO pembayaran_hp 
                    (id_pembelian_hp, tanggal_pembayaran)
                    VALUES ('" . $dt_beli['id_pembelian_hp'] . "',
                    '" . date('Y-m-d') . "')");
    if ($beli) {
        echo "<script>alert('Pembelian HP Berhasil');location.href='pembelian.php';</script>";
    } else {
        echo "<script>alert('Pembelian HP Gagal');location.href='pembelian.php';</script>";
    }
}
