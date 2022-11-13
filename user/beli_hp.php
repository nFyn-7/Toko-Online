<?php
include "header.php";
include "koneksi.php";
$qry_detail_hp = mysqli_query($koneksi, "SELECT * FROM hp where id_hp = '" . $_GET['id_hp'] . "'");
$dt_hp = mysqli_fetch_array($qry_detail_hp);
$qry_detail_deskripsi = mysqli_query($koneksi, "SELECT * FROM deskripsi where id_deskripsi = '" . $_GET['id_hp'] . "'");
$dt_deksripsi = mysqli_fetch_array($qry_detail_deskripsi);
?>
<div class="" style="margin: 40px 100px 20px 100px;">
    <form action="masukkankeranjang.php?id_hp=<?= $dt_hp['id_hp'] ?>" method="POST">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item "><a href="daftar_hp.php">Daftar Hp</a></li>
                <li class="breadcrumb-item active" aria-current="page"><?= $dt_hp['seri_hp'] ?></li>
            </ol>
        </nav>
        <div class="container">
            <div class="row">
                <div class="col-2 border">
                    <img src="../foto/<?= $dt_hp['foto'] ?>" class="card-img-top">
                </div>
                <div class="col-7 border">
                    <table class="table table-striped table-hover">
                        <thead>
                            <tr>
                                <td class="fs-4"><?= $dt_hp['seri_hp'] ?></td>
                            </tr>
                            <tr>
                                <td class="fs-3 fw-bold"><?= $dt_hp['harga'] ?></td>
                            </tr>
                            <tr>
                                <td class="fs-5 fw-bold">Spesifikasi</td>
                            </tr>
                            <tr>
                                <td>Dimension :</td>
                                <td><?= $dt_deksripsi['dimension'] ?></td>
                            </tr>
                            <tr>
                                <td>Display :</td>
                                <td><?= $dt_deksripsi['display'] ?></td>
                            </tr>
                            <tr>
                                <td>Camera :</td>
                                <td><?= $dt_deksripsi['camera'] ?></td>
                            </tr>
                            <tr>
                                <td>Platform :</td>
                                <td><?= $dt_deksripsi['platform'] ?></td>
                            </tr>
                            <tr>
                                <td>Battery :</td>
                                <td><?= $dt_deksripsi['battery'] ?></td>
                            </tr>
                        </thead>
                    </table>
                </div>
                <div class="col-3 border">
                    <table class="my-3">
                        <tr>
                            <label for="exampleDataList1" class="form-label">Ukuran: 3 Varian</label>
                            <input class="form-control" list="datalistOptions1" id="exampleDataList1" placeholder="Piih Ukuran">
                            <datalist id="datalistOptions1">
                                <option value="128GB">
                                <option value="256GB">
                                <option value="512GB">
                            </datalist>
                        </tr>
                        <tr>
                            <label for="exampleDataList2" class="form-label">Warna: 3 Varian</label>
                            <input class="form-control" list="datalistOptions2" id="exampleDataList2" placeholder="Piih Warna">
                            <datalist id="datalistOptions2">
                                <option value="Merah">
                                <option value="Hijau">
                                <option value="Biru">
                            </datalist>
                        </tr>
                        <tr>
                        <tr>
                            <label for="jumlah" class="form-label">Jumlah Pembelian</label>
                            <input type="number" name="jumlah" id="jumlah" value="1">
                        </tr>
                        </tr>
                        <tr>
                            <td colspan="3"><input class="btn btn-success px-5" type="submit" value="Beli"></td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
    </form>
</div>
<?php
include "footer.php";
?>