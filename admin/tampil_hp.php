<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data HP</title>
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">

</head>

<body>
    <?php
    include "navbar.php";
    ?>
    <br></br>
    <div class="container">
        <div class="card">
            <div class="card-header">
                <h1>DATA HP</h1>
                <form method="POST" action="tampil_hp.php" class="d-flex">
                    <input class="form-control me-2" type="search" name="cari" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-success" type="submit">Search</button>
                </form>
            </div>
            <div class="card-body">
                <table class="table table-striped table-hover">
                    <thead>
                        <tr>
                            <th scope="col">ID HP</th>
                            <th scope="col">Seri HP</th>
                            <th scope="col">Harga</th>
                            <th scope="col">Deskripsi</th>
                            <th scope="col">Foto</th>
                            <th scope="col" width="200px">AKSI</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        include "koneksi.php";
                        if (isset($_POST['cari'])) {
                            $cari = $_POST['cari'];
                            $query_hp = mysqli_query($koneksi, "select * from hp where id_hp = '$cari' or seri_hp like '%$cari%'");
                        } else {
                            $query_hp = mysqli_query($koneksi, "select * from hp");
                        }
                        while ($data_hp = mysqli_fetch_array($query_hp)) {
                        ?>
                            <tr height="150px">
                                <td><?= $data_hp['id_hp'] ?></td>
                                <td><?= $data_hp['seri_hp'] ?></td>
                                <td><?= $data_hp['harga'] ?></td>
                                <td><?= $data_hp['harga'] ?></td>
                                <td><img src="../foto/<?= $data_hp['foto'] ?>" style="width: 100px;" /></td>
                                <td>
                                    <a href="ubah_hp.php?id_hp=<?= $data_hp['id_hp'] ?>" class="btn btn-success">Edit</a>
                                    <a href="hapus_hp.php?id_hp=<?= $data_hp['id_hp'] ?>" class="btn btn-danger" onclick="return confirm('Apakah anda yakin menghapus data ini?')">Hapus</a>
                                </td>
                            </tr>
                        <?php
                        }
                        ?>
                    </tbody>
                </table>
                <a href="tambah_hp.php" type="button" class="btn btn-primary">Tambah HP</a>
            </div>
        </div>
    </div>
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>

</body>

</html>