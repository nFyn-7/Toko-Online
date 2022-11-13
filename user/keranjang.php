<?php
include "header.php";
?>
<div class="container">
    <div class="card">
        <div class="card-header">
            <h1>Keranjang</h1>
        </div>
        <div class="card-body">
            <table class="table table-striped table-hover">
                <?php
                if (!empty($_SESSION['cart'])) {
                ?>
                    <thead>
                        <tr>
                            <th scope="col">NO</th>
                            <th scope="col">Nama HP</th>
                            <th scope="col">Harga</th>
                            <th scope="col">Jumlah</th>
                            <th scope="col">Subtotal</th>
                            <th scope="col">&nbsp;</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $grandtotal = 0;
                        foreach (@$_SESSION['cart'] as $key_produk => $val_produk) :
                            $subtotal = $val_produk['harga'] * $val_produk['qty'];
                            $grandtotal += $subtotal;
                        ?>
                            <tr>
                                <td><?= ($key_produk + 1) ?></td>
                                <td><?= $val_produk['seri_hp'] ?></td>
                                <td><?= $val_produk['harga'] ?></td>
                                <td><?= $val_produk['qty'] ?></td>
                                <td><?php echo $subtotal; ?></td>
                                <td><a href="hapus_keranjang.php?id=<?= $key_produk ?>" class="btn btndanger"><strong>X</strong></a></td>
                            </tr>
                        <?php
                        endforeach
                        ?>
                        <tr>
                            <th colspan="4">Grand Total</th>
                            <th><?php echo $grandtotal ?></th>
                            <th>&nbsp;</th>
                        </tr>
                    </tbody>
            </table>
            <a href="checkout.php" class="btn btn-primary">Check Out</a>
        <?php
                } else {
        ?>

            <h3 style="text-align: center;">keranjang kosong</h3>
            <br>
            <a href="daftar_hp.php">
                <h5 style="text-align: center; text-decoration:none; color:black;">Beli HP</h5>
            </a>
        <?php
                }
        ?>
        </tbody>
        </table>
        </div>
    </div>
</div>
<?php
include "footer.php";
?>