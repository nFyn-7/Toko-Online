<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah User</title>
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
            <h1 class="card-header">Tambah user</h1>
            <div class="card-body">
                <form method="POST" action="proses_tambah_user.php">
                    <div class="mb-3">
                        <label for="nama_user" class="form-label">Nama User</label>
                        <input type="text" class="form-control" name="nama_user" placeholder="Masukkan Nama User" required>
                    </div>
                    <div class="mb-3">
                        <label for="alamat_email" class="form-label">Alamat Email</label>
                        <input type="text" class="form-control" name="alamat_email" placeholder="Masukkan Alamat Email" required>
                    </div>
                    <div class="mb-3">
                        <label for="gender" class="form-label">Gender</label>
                        <?php
                        $arr_gender = array('L' => 'Laki-laki', 'P' => 'Perempuan');
                        ?>
                        <select name="gender" class="form-select" required>
                            <option></option>
                            <?php foreach ($arr_gender as $key_gender => $val_gender) : ?>
                                <option value="<?= $key_gender ?>"><?= $val_gender ?></option>
                            <?php endforeach ?>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="alamat" class="form-label">Alamat</label>
                        <textarea class="form-control" name="alamat" row="3" required></textarea>
                    </div>
                    <div class="mb-3">
                        <label for="username" class="form-label">Username</label>
                        <input type="text" class="form-control" name="username" placeholder="Masukkan Username" required>
                    </div>
                    <div class="mb-3">
                        <label for="password" class="form-label">Password</label>
                        <input type="password" class="form-control" name="password" placeholder="Masukkan Password" required>
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