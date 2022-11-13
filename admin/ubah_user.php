<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ubah User</title>
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
</head>

<body>
    <?php
    include "navbar.php";
    include "koneksi.php";
    $query_user = mysqli_query($koneksi, "select * from user where id_user='" . $_GET['id_user'] . "'");
    $data_user = mysqli_fetch_array($query_user);
    ?>
    <br></br>
    <div class="container">
        <div class="card">
            <h1 class="card-header">Ubah User</h1>
            <div class="card-body">
                <form method="POST" action="proses_ubah_user.php">
                    <input type="hidden" name="id_user" value="<?= $data_user['id_user'] ?>">
                    <div class="mb-3">
                        <label for="nama_user" class="form-label">Nama User</label>
                        <input type="text" class="form-control" name="nama_user" value="<?= $data_user['nama_user'] ?>" placeholder="Masukkan Nama User" required>
                    </div>
                    <div class="mb-3">
                        <label for="nama_user" class="form-label">Alamat Email</label>
                        <input type="text" class="form-control" name="alamat_email" value="<?= $data_user['alamat_email'] ?>" placeholder="Masukkan Alamat Email" required>
                    </div>
                    <div class="mb-3">
                        <label for="gender" class="form-label">Gender</label>
                        <?php
                        $arr_gender = array('L' => 'Laki-laki', 'P' => 'Perempuan');
                        ?>
                        <select name="gender" class="form-select">
                            <option></option>
                            <?php foreach ($arr_gender as $key_gender => $val_gender) :
                                if ($key_gender == $data_user['gender']) {
                                    $selek = "selected";
                                } else {
                                    $selek = "";
                                } ?>
                                <option value="<?= $key_gender ?>" <?= $selek ?>><?= $val_gender ?></option>
                            <?php endforeach ?>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="alamat" class="form-label">Alamat</label>
                        <textarea class="form-control" name="alamat" row="3" required><?= $data_user['alamat'] ?></textarea>
                    </div>
                    <div class="mb-3">
                        <label for="username" class="form-label">Username</label>
                        <input type="text" class="form-control" name="username" value="<?= $data_user['nama_user'] ?>" required>
                    </div>
                    <div class="mb-3">
                        <label for="password" class="form-label">Password</label>
                        <input type="password" class="form-control" name="password" value="" required>
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