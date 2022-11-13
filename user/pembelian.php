<body>
    <?php
    include "header.php";
    ?>
    <div class="container">
        <div class="card">
            <div class="card-header">
                <h1>History Pembelian HP</h1>
            </div>
            <div class="card-body">
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">No</th>
                            <th scope="col">TANGGAL BELI</th>
                            <th scope="col">NAMA HP</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        include "koneksi.php";
                        $qry_pembelian = mysqli_query($koneksi, "SELECT * FROM pembelian_hp WHERE id_user = '" . $_SESSION['id_user'] . "' ORDER BY id_pembelian_hp DESC");
                        $no = 0;
                        while ($dt_pembelian = mysqli_fetch_array($qry_pembelian)) {
                            $no++;
                        ?>
                            <tr>
                                <td>
                                    <?= $no ?>
                                </td>
                                <td>
                                    <?= $dt_pembelian['tanggal_beli'] ?>
                                </td>
                                <td>
                                    <?php
                                    $qry_detail = mysqli_query($koneksi, "SELECT * FROM detail_pembelian_hp d JOIN hp b ON b.id_hp = d.id_hp WHERE id_pembelian_hp = '" . $dt_pembelian['id_pembelian_hp'] . "'");
                                    while ($dt_detail = mysqli_fetch_array($qry_detail)) {
                                        echo "<li>" . $dt_detail['seri_hp'] . "</li>";
                                    }
                                    ?>
                                </td>
                            </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <?php
    include "footer.php";
    ?>


</body>

</html>