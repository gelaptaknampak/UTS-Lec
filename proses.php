<?php
    include "koneksi.php";

    if(isset($_POST['aksi'])){
        if($_POST['aksi'] == "add"){
            $nama_menu = $_POST['nama_menu'];
            $harga = $_POST['harga'];
            $deskripsi = $_POST['deskripsi'];
            $gambar = $_FILES['gambar']['name'];

            $dir = "img/";
            $tmpfile = $_FILES['gambar']['tmp_name'];
            move_uploaded_file($tmpfile, $dir.$gambar);


            $kategori_menu = $_POST['kategori_menu'];

            if ($kategori_menu == "recommended") {
                $query = "INSERT INTO `menu reccomended` (nama_menu, harga, deskripsi, gambar) VALUES ('$nama_menu', $harga, '$deskripsi', '$gambar')";
            } elseif ($kategori_menu == "promo") {
                $query = "INSERT INTO `menu promo` (nama_menu, harga, deskripsi, gambar) VALUES ('$nama_menu', $harga, '$deskripsi', '$gambar')";
            } elseif ($kategori_menu == "baru") {
                $query = "INSERT INTO `menu baru` (nama_menu, harga, deskripsi, gambar) VALUES ('$nama_menu', $harga, '$deskripsi', '$gambar')";
            } elseif ($kategori_menu == "minuman_dessert") {
                $query = "INSERT INTO `menu minuman` (nama_menu, harga, deskripsi, gambar) VALUES ('$nama_menu', $harga, '$deskripsi', '$gambar')";
            } else {
                // Handle a default category or show an error message.
            }

            $sql = mysqli_query($conn, $query);

            if($sql){
                header("location: admin.php");
                //echo "Data Berhasil";
                //echo "<br/>Tambah Menu <a href='index.php'>[Home]</a>";
            } else {
                echo $query;
            }
        }
        else if($_POST['aksi'] == "edit"){
            $id_menu = $_POST['id_menu'];
            $nama_menu = $_POST['nama_menu'];
            $harga = $_POST['harga'];
            $deskripsi = $_POST['deskripsi'];
            $gambar = $_FILES['gambar']['name'];
            $kategori_menu = $_POST['kategori_menu'];

            $dir = "img/";

            // Periksa apakah pengguna mengunggah gambar baru
            if (!empty($gambar)) {
                $tmpfile = $_FILES['gambar']['tmp_name'];
                move_uploaded_file($tmpfile, $dir.$gambar);
                
                // Hapus gambar lama jika ada
                $sqlshow = mysqli_query($conn, "SELECT gambar FROM `menu $kategori_menu` WHERE ID_$kategori_menu = '$id_menu';");
                $result = mysqli_fetch_assoc($sqlshow);
                $gambar_lama = $result['gambar'];

                if (!empty($gambar_lama)) {
                    unlink($dir . $gambar_lama);
                }
            } else {
                // Jika tidak ada gambar baru diunggah, gunakan gambar lama
                $sqlshow = mysqli_query($conn, "SELECT gambar FROM `menu $kategori_menu` WHERE ID_$kategori_menu = '$id_menu';");
                $result = mysqli_fetch_assoc($sqlshow);
                $gambar = $result['gambar'];
            }

            if ($kategori_menu == "reccomended") {
                $query = "UPDATE `menu reccomended` SET nama_menu = '$nama_menu', harga = $harga, deskripsi = '$deskripsi', gambar = '$gambar' WHERE ID_reccomended = $id_menu";
            } elseif ($kategori_menu == "promo") {
                $query = "UPDATE `menu promo` SET nama_menu = '$nama_menu', harga = $harga, deskripsi = '$deskripsi', gambar = '$gambar' WHERE ID_promo = $id_menu";
            } elseif ($kategori_menu == "baru") {
                $query = "UPDATE `menu baru` SET nama_menu = '$nama_menu', harga = $harga, deskripsi = '$deskripsi', gambar = '$gambar' WHERE ID_baru = $id_menu";
            } elseif ($kategori_menu == "minuman") {
                $query = "UPDATE `menu minuman` SET nama_menu = '$nama_menu', harga = $harga, deskripsi = '$deskripsi', gambar = '$gambar' WHERE ID_minuman = $id_menu";
            } else {
                // Handle a default category or show an error message.
            }

            $sql = mysqli_query($conn, $query);

            if($sql){
                header("location: admin.php");
                // echo "Data Berhasil";
                // echo "<br/>Tambah Menu <a href='index.php'>[Home]</a>";
            } else {
                echo $query;
            }
        }
    }