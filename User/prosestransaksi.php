<?php
include "../koneksi.php";

session_start(); // Pastikan sesi sudah dimulai

if (isset($_SESSION["pesanan"]) && !empty($_SESSION["pesanan"])) {
    $sql = "INSERT INTO pesanan (Tanggal_pesanan) VALUES ('" . date("Y-m-d") . "')";
    $query = mysqli_query($conn, $sql);

    if ($query) {
        $ID_pesanan = mysqli_insert_id($conn);

        foreach ($_SESSION["pesanan"] as $pesanan) {
            $nama_menu = mysqli_real_escape_string($conn, $pesanan["Nama Menu"]);
            $jumlah_item = (int)$pesanan["Jumlah Item"];
            $total_harga = (int)$pesanan['Harga'] * $jumlah_item;
            $metode_pembayaran = mysqli_real_escape_string($conn, $_POST['metode_pembayaran'][$pesanan['Nama Menu']]);

            $sql = "INSERT INTO detail_pesanan (ID_pesanan, Nama_menu, Total_harga, Jumlah_item, Metode_pembayaran) VALUES ('$ID_pesanan', '$nama_menu', $total_harga, $jumlah_item, '$metode_pembayaran')";
            $query = mysqli_query($conn, $sql);

            if (!$query) {
                echo "Error: " . mysqli_error($conn);
                exit; // Keluar dari skrip jika terjadi kesalahan
            }
        }

        unset($_SESSION["pesanan"]);
        header("location: pesanan.php");
    } else {
        echo "Error: " . mysqli_error($conn);
    }
} else {
    echo "Tidak ada pesanan yang diproses.";
}
?>
