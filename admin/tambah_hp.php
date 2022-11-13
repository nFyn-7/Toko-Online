<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah HP</title>
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
</head>

<body>
    <?php
    include "navbar.php";
    ?>
    <br></br>
    <div class="container">
        <div class="card">
            <h1 class="card-header">Tambah hp</h1>
            <div class="card-body">
                <form method="POST" action="proses_tambah_hp.php" enctype="multipart/form-data">
                    <div class="mb-3">
                        <label for="seri_hp" class="form-label">Seri HP</label>
                        <input type="text" class="form-control" name="seri_hp" placeholder="Masukkan Seri HP" required>
                    </div>
                    <div class="mb-3">
                        <label for="harga_int" class="form-label">Harga HP</label>
                        <input type="number" class="form-control" name="harga" placeholder="Masukkan Harga HP" required>
                    </div>
                    <div class="mb-3">
                        <label for="deskripsi" class="form-label">Deskripsi</label>
                        <textarea class="form-control" name="dimension" row="3" placeholder="Masukkan Dimension" required></textarea>
                        <textarea class="form-control" name="display" row="3" placeholder="Masukkan Display" required></textarea>
                        <textarea class="form-control" name="camera" row="3" placeholder="Masukkan Camera" required></textarea>
                        <textarea class="form-control" name="platform" row="3" placeholder="Masukkan Platform" required></textarea>
                        <textarea class="form-control" name="battery" row="3" placeholder="Masukkan Battery" required></textarea>
                    </div>
            </div>
            <div class="mb-3">
                <label for="foto" class="form-label">Foto</label>
                <input type="file" class="form-control" name="foto" required>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
    </div>

    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>
</body>

</html>