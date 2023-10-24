<?php

include "../koneksi.php";

if (isset($_GET["id"])) {
    $id = mysqli_real_escape_string($conn, $_GET["id"]);
    echo "ID yang terbaca: " . $id;

    // Query untuk tabel 'menu reccomended'
    $sql_recommended = "SELECT * FROM `menu reccomended` WHERE ID_reccomended = '$id'";
    $query_recommended = mysqli_query($conn, $sql_recommended);
    $hasil_recommended = mysqli_fetch_object($query_recommended);

    // Query untuk tabel 'menu promo'
    $sql_promo = "SELECT * FROM `menu promo` WHERE ID_promo = '$id'";
    $query_promo = mysqli_query($conn, $sql_promo);
    $hasil_promo = mysqli_fetch_object($query_promo);

    // Query untuk tabel 'menu minuman'
    $sql_minuman = "SELECT * FROM `menu minuman` WHERE ID_minuman = '$id'";
    $query_minuman = mysqli_query($conn, $sql_minuman);
    $hasil_minuman = mysqli_fetch_object($query_minuman);
    // Mengambil jumlah item dari form jika tersedia
    if (isset($_POST["quantity"])) {
        $jumlah_item = $_POST["quantity"];
        // Sekarang Anda dapat menggunakan $jumlah_item untuk keperluan Anda
    }

    // Sesuaikan dengan nama kolom yang benar sesuai dengan struktur tabel
    $_SESSION["pesanan"][$id] = [
        "Nama Menu" => isset($hasil_recommended->Nama_menu) ? $hasil_recommended->Nama_menu : (isset($hasil_promo->Nama_menu) ? $hasil_promo->Nama_menu : $hasil_minuman->Nama_menu),
        "Harga" => isset($hasil_recommended->Harga) ? $hasil_recommended->Harga : (isset($hasil_promo->Harga) ? $hasil_promo->Harga : $hasil_minuman->Harga),
        "Jumlah Item" => $jumlah_item,
    ];

    echo "Nama Menu: " . $_SESSION["pesanan"][$id]["Nama Menu"];
    echo "Harga: " . $_SESSION["pesanan"][$id]["Harga"];
    echo "Jumlah Item: " . $jumlah_item;
} else {
    echo "ID tidak ditemukan.";
}

header('location: pesanan.php');
?>
