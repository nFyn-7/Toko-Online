<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ubah Deskripsi</title>
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
</head>

<body>
    <?php
    include "navbar.php";
    include "koneksi.php";
    $qry_deskripsi = mysqli_query($koneksi, "select * from deskripsi where id_deskripsi =  $_GET[id_deskripsi] ");
    $dt_deskripsi = mysqli_fetch_array($qry_deskripsi);
    ?>
    <br></br>
    <div class="container">
        <div class="card">
            <h1 class="card-header">Ubah Deskripsi</h1>
            <div class="card-body">
                <form method="POST" action="proses_ubah_deskripsi.php">
                    <input type="hidden" name="id_deskripsi" value="<?= $data_deskripsi['id_deskripsi'] ?>">
                    <div class="mb-3">
                        <label for="dimension" class="form-label">Dimension</label>
                        <input type="text" class="form-control" name="dimension" value="<?= $dt_deskripsi['dimension'] ?>" placeholder="Masukkan Specs Dimension" required>
                    </div>
                    <div class="mb-3">
                        <label for="display" class="form-label">Display</label>
                        <input type="text" class="form-control" name="display" value="<?= $dt_deskripsi['display'] ?>" placeholder="Masukkan Specs Display" required>
                    </div>
                    <div class="mb-3">
                        <label for="camera" class="form-label">Camera</label>
                        <input type="text" class="form-control" name="camera" value="<?= $dt_deskripsi['camera'] ?>" placeholder="Masukkan Specs Camera" required>
                    </div>
                    <div class="mb-3">
                        <label for="platform" class="form-label">Platform</label>
                        <input type="text" class="form-control" name="platform" value="<?= $dt_deskripsi['platform'] ?>" placeholder="Masukkan Specs Platform" required>
                    </div>
                    <div class="mb-3">
                        <label for="battery" class="form-label">Battery</label>
                        <input type="text" class="form-control" name="battery" value="<?= $dt_deskripsi['battery'] ?>" placeholder="Masukkan Specs Battery" required>
                    </div>

                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>

    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>
</body>
<?php
?>

</html>