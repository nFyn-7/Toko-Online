<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ubah Buku</title>
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
</head>

<body>
    <?php
    include "navbar.php";
    include "koneksi.php";
    $query_hp = mysqli_query($koneksi, "select * from hp where id_hp='" . $_GET['id_hp'] . "'");
    $data_hp = mysqli_fetch_array($query_hp);
    $qry_deskripsi = mysqli_query($koneksi, "select * from deskripsi where id_deskripsi =  $data_hp[id_deskripsi] ");
    $dt_deskripsi = mysqli_fetch_array($qry_deskripsi);

    ?>
    <br></br>
    <div class="container">
        <div class="card">
            <h1 class="card-header">Ubah HP</h1>
            <div class="card-body">
                <form method="POST" action="proses_ubah_hp.php" enctype="multipart/form-data">
                    <input type="hidden" name="id_hp" value="<?= $data_hp['id_hp'] ?>">
                    <div class="mb-3">
                        <label for="seri_hp" class="form-label">Seri HP</label>
                        <input type="text" class="form-control" name="seri_hp" value="<?= $data_hp['seri_hp'] ?>" placeholder="Masukkan Seri Hp" required>
                    </div>
                    <label for="deskripsi" class="form-label">Specs Hp</label><br>
                    <!-- Button trigger modal -->
                    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal<?= $data_hp['id_hp'] ?>">
                        Specs
                    </button>

                    <!-- Modal -->
                    <div class="modal fade" id="exampleModal<?= $data_hp['id_hp'] ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">Spesifikasi HP</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <?php

                                    ?>
                                    <div class="modal-body">
                                        <ul style="list-style-type:none;">
                                            <li>
                                                <p>DIMENSI <br><?= $dt_deskripsi['dimension'] ?></p>
                                            </li>
                                            <li>
                                                <p>DISPLAY <br><?= $dt_deskripsi['display'] ?></p>
                                            </li>
                                            <li>
                                                <p>CAMERA <br><?= $dt_deskripsi['camera'] ?></p>
                                            </li>
                                            <li>
                                                <p>PLATFORM <br><?= $dt_deskripsi['platform'] ?></p>
                                            </li>
                                            <li>
                                                <p>BATTERY <br><?= $dt_deskripsi['battery'] ?></p>
                                            </li>
                                            </ol>
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                    <a href="ubah_deskripsi.php?id_deskripsi=<?= $data_hp['id_deskripsi'] ?>" type="button" class="btn btn-primary">Edit</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="mb-3">
                        <label for="foto" class="form-label">Foto</label>
                        <img src="../config/foto_produk/<?= $data_hp['foto'] ?>" width="100" /></br>
                        <input type="file" cla ss="form-control" name="foto" value="<?= $data_hp['foto'] ?>">
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>
    <?php

    ?>

    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>
</body>

</html>