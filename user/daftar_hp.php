<?php
include "header.php";
?>
<div>
    <div>
        <h1 class="text-center p-3 bg-secondary text-light p-4">
            Daftar HP
        </h1>
        <div class="container">
            <form class="d-flex">
                <input class="form-control me-2" type="search" name="cari" placeholder="Search.." aria-label="Search" id="myInput">
            </form>
            <tbody>
                <div class="m-5" style="display: flex; flex-wrap: wrap; justify-content:space-around;" id="isi">
                    <?php
                    include "koneksi.php";

                    $query_hp = mysqli_query($koneksi, "select * from hp") or die(mysqli_error($koneksi));
                    while ($dt_hp = mysqli_fetch_array($query_hp)) {
                    ?>
                        <tr>
                            <div>
                                <div class="p-3 m-2 border border-2 rounded-3" style="width: 15rem;">
                                    <a href="beli_hp.php?id_hp=<?= $dt_hp['id_hp'] ?>" style="text-decoration:none; color:black;">
                                        <img src="../foto/<?= $dt_hp['foto'] ?>" class="card-img-top" alt="Gambar">
                                        <div class="card-body">
                                            <h5 class="card-title"><?= $dt_hp['seri_hp'] ?></h5>
                                            <p class="card-text">Rp<?= $dt_hp['harga'] ?></p>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </tr>
                    <?php
                    }
                    ?>
                </div>
            </tbody>
        </div>
    </div>
</div>
</div>
<?php
include "footer.php";
?>