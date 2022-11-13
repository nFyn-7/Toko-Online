    <?php
    session_start();
    if ($_POST) {
        include "koneksi.php";
        $qry_get_hp = mysqli_query($koneksi, "SELECT * FROM hp , deskripsi where id_hp = '" . $_GET['id_hp'] . "'");
        $dt_hp = mysqli_fetch_array($qry_get_hp);
        $_SESSION['cart'][] = array(
            'id_hp' => $dt_hp['id_hp'],
            'seri_hp' => $dt_hp['seri_hp'],
            'harga' => $dt_hp['harga'],
            'qty' => $_POST['jumlah']
        );
    }
    header('location: keranjang.php');
