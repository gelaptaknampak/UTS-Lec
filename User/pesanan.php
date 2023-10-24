<?php
include "../koneksi.php";
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Pesanan user</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Tambahkan referensi Bootstrap 5 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <?php
        if(!empty($_SESSION["pesanan"])){
        ?>
        <form action="prosestransaksi.php" method="POST">
            <!-- Menggunakan kelas "table" dari Bootstrap untuk membuat tabel yang bagus -->
            <table class="table">
                <thead>
                    <tr>
                        <th>Nama Menu</th>
                        <th>Harga</th>
                        <th>Jumlah</th>
                        <th>Total Harga</th>
                        <th>Metode Pembayaran</th>
                        <th>Cancel</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $grandtotal = 0;
                    foreach($_SESSION["pesanan"] as $pesanan){
                        $totalHarga = $pesanan['Harga'] * $pesanan['Jumlah Item'];
                    ?>
                    <tr>
                        <td><?php echo $pesanan["Nama Menu"]; ?></td>
                        <td><?php echo $pesanan["Harga"]; ?></td>
                        <td><?php echo $pesanan["Jumlah Item"]; ?></td>
                        <td><?php echo number_format($totalHarga, 3) . " IDR"; ?></td>
                        <td>
                            <select class="form-select" name="metode_pembayaran[<?php echo $pesanan['Nama Menu']; ?>]">
                                <option value="cash">Cash</option>
                                <option value="kartu_kredit">Kartu Kredit</option>
                                <option value="transfer_bank">Transfer Bank</option>
                                <option value="OVO">OVO</option>
                                <option value="Dana">Dana</option>
                                <option value="Gopay">Gopay</option>
                            </select>
                        </td>
                        <td>
                            <a class="btn btn-danger" href="hapuspesanan.php?id=<?php echo $pesanan['Nama Menu']?>">Cancel</a>
                        </td>
                    </tr>
                    <?php
                    $grandtotal += $totalHarga;
                    }
                    ?>
                </tbody>
            </table>
            <p>Total Harga Semua Pesanan: <?php echo number_format($grandtotal, 3) . " IDR"; ?></p>
            <button type="submit" class="btn btn-primary">Beli</button>
        </form>
        <?php
        } else {
            echo "Belum ada menu yang dipesan";
        }
        ?>
        <br/>
        <a class="btn btn-secondary" href="<?php if (isset($_SESSION['ID_user'])) {
            echo 'menu.php?ID_user=' . $_SESSION['ID_user'];
        } else { echo 'menu.php';}?>">Kembali ke Menu</a>
    </div>
    <!-- Tambahkan referensi Bootstrap 5 JavaScript (opsional, tergantung pada kebutuhan) -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>
