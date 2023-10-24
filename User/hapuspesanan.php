<?php
    include "../koneksi.php";

    $id = $_GET["id"];

    // Temukan pesanan yang akan dihapus berdasarkan ID_Menu
    foreach ($_SESSION["pesanan"] as $key => $pesanan) {
        if ($pesanan["Nama Menu"] == $id) {
            // Hapus pesanan dari $_SESSION
            unset($_SESSION["pesanan"][$key]);
            break; // Hentikan pencarian setelah menemukan dan menghapus pesanan
        }
    }

    header("location: pesanan.php");
?>
