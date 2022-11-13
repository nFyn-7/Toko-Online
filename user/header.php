<?php
session_start();
if ($_SESSION['status_login'] != true) {
    header('location: login.php');
}
?>
<!DOCTYPE html>
<html>

<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:wght@500&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css" integrity="sha512-1sCRPdkRXhBV2PBLUdRb4tMg1w2YPf37qatUFeS7zlBy7jJI8Lf4VHwWfZZfpXtYSLy85pkm9GaYVYMfw5BC1A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://unpkg.com/boxicons@latest/css/boxicons.min.css">
    <link rel="stylesheet" href="style.css">
    <title>Toko Online</title>
</head>

<header>
    <nav class="navbar navbar-expand-lg navbar-light bg-light d-none d-lg-flex sticky-top">
        <div class="container">
            <ul class="navbar-nav ">
                <li class="nav-item">
                    <a class="nav-link" aria-current="page" href="home.php">Home</a>
                </li>
                <li class="nav-item dropdown">
                    <button class="btn btn-light dropdown-toggle" type="button" id="dropdown-produk" data-bs-toggle="dropdown" data-bs-auto-close="inside" aria-expanded="false">
                        PRODUCT
                    </button>
                    <ul class="dropdown-menu" aria-labelledby="dropdown-produk">
                        <li><a class="dropdown-item" href="daftar_hp.php">Handphone</a></li>
                        <li><a class="dropdown-item" href="#">Produk 2</a></li>
                        <li><a class="dropdown-item" href="#">Produk 3</a></li>
                    </ul>
                </li>
            </ul>
            <div class="navbar-logo">
                <a href=""><img src="../foto/" alt=""></a>
            </div>
            <ul class="navbar-nav">
                <li>
                    <form class="d-flex">
                        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                        <button class="btn btn-outline-success" type="submit">Search</button>
                    </form>
                </li>

                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" id="dropdown-akun" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        <i class="fa-solid fa-user"></i>
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="dropdown-akun">
                        <li><a class="dropdown-item" href="logout.php">Logout</a></li>
                    </ul>
                </li>

                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" id="dropdown-akun" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        <i class="fa-solid fa-cart-shopping"></i>
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="dropdown-akun">
                        <li><a class="dropdown-item" href="pembelian.php">Histori Belanja</a></li>
                        <li><a class="dropdown-item" href="keranjang.php">Keranjang</a></li>
                    </ul>
                </li>
            </ul>
        </div>
    </nav>
</header>