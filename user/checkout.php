<?php
session_start();
include "koneksi.php";
date_default_timezone_set('Asia/Jakarta');
$cart = @$_SESSION['cart'];
if (count($cart) > 0) {
    mysqli_query($koneksi, "INSERT INTO pembelian_hp (id_user,tanggal_beli) VALUE('" . $_SESSION['id_user'] . "','" . date('Y-m-d') . "')");
    $id = mysqli_insert_id($koneksi);
    foreach ($cart as $key_produk => $val_produk) {
        mysqli_query($koneksi, "INSERT INTO detail_pembelian_hp (id_pembelian_hp,id_hp,qty) VALUE('" . $id . "','" . $val_produk['id_hp'] . "','" . $val_produk['qty'] . "')");
    }
    unset($_SESSION['cart']);
    echo '<script>alert("Ayo bayar pembeliannya");location.href="pembelian.php"</script>';
}
