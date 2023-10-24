<?php
include "../koneksi.php";

if (isset($_GET['hapus'])) {
    $id_menu = $_GET['hapus'];

    $querygambar = "SELECT gambar FROM `menu baru` WHERE ID_baru = '$id_menu'";
    $result = mysqli_query($conn, $querygambar);
    $row = mysqli_fetch_assoc($result);
    unlink("img/".$row['gambar']);

    $query = "DELETE FROM `menu baru` WHERE ID_baru = '$id_menu'";
    $sql = mysqli_query($conn, $query);

    if($sql){
        header("location: ../index.php");
        // echo "Data Berhasil";
        // echo "<br/>Tambah Menu <a href='index.php'>[Home]</a>";
    } else {
        echo $query;
    }
}
    