<?php
require "session.php";


$queryrecomended = mysqli_query($conn, "SELECT * FROM `menu reccomended`");
$jumlahrecomended = mysqli_num_rows($queryrecomended);

$querypromo = mysqli_query($conn, "SELECT * FROM `menu promo`");
$jumlahpromo = mysqli_num_rows($querypromo);

$queryminuman = mysqli_query($conn, "SELECT * FROM `menu minuman`");
$jumlahminuman = mysqli_num_rows($queryminuman);

$queryuser = mysqli_query($conn, "SELECT * FROM userregister");
$jumlahuser = mysqli_num_rows($queryuser);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data menu</title>
    <!-- Tambahkan link ke CSS Bootstrap 5 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <style>
        .summary-recomended{
            background-color: #b33748;
            border-radius: 20px;
        }

        .summary-promo{
            background-color: #0a516b;
            border-radius: 20px;
        }

        .summary-baru{
            background-color: #ebd234;
            border-radius: 20px;
        }

        .summary-minuman{
            background-color: #0a6b4a;
            border-radius: 20px;
        }

        .summary-user{
            background-color: darkgoldenrod;
            border-radius: 20px;
        }

        .decoration{
            text-decoration: none;
        }

    </style>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="admin.php">Database Restaurant</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarScroll" aria-controls="navbarScroll" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarScroll">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="admin.php">Home</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Kategori
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="./reccomended.php">Menu Makanan Hits</a>
                            <a class="dropdown-item" href="./promo.php">Menu Hemat Akhir Bulan</a>
                            <a class="dropdown-item" href="./minuman.php">Minuman dan Dessert</a>
                        </div>
                    </li>
                </ul>
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="./logout.php">Logout</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="container mt-4 text-center">
        <h1 class="display-4">Selamat Datang di Database Restaurant</h1>
        <hr>
    </div>
    <div class="container mt-5">
        <div class="row">
            <div class="col-lg-4 col-md-6 col-12 mb-3">
                <div class="summary-recomended p-3">
                <div class="row">
                    <div class="col-6">
                        <i class="fas fa-solid fa-heart fa-5x text-black-50"></i>
                    </div>
                    <div class="col-6 text-white">
                        <h4 class="fs-5">Menu Makanan Hits</h4>
                        <p class="fs-6">
                            <?php
                               echo $jumlahrecomended;
                            ?>
                            item
                        </p>
                        <p><a href="reccomended.php" class="text-white decoration">Lihat detail</a></p>
                    </div>
                </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 col-12 mb-3">
                <div class="summary-promo p-3">
                <div class="row">
                    <div class="col-6">
                        <i class="fas fa-solid fa-tags fa-5x text-black-50"></i> 
                    </div>
                    <div class="col-6 text-white">
                        <h4 class="fs-5">Menu Hemat Akhir Bulan</h4>
                        <p class="fs-6"><?php
                               echo $jumlahpromo;
                            ?>
                            item
                        </p>
                        <p><a href="promo.php" class="text-white decoration">Lihat detail</a></p>
                    </div>
                </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 col-12 mb-3">
                <div class="summary-minuman p-3">
                <div class="row">
                    <div class="col-6">
                        <i class="fas fa-solid fa-ice-cream fa-5x text-black-50"></i>
                    </div>
                    <div class="col-6 text-white">
                        <h4 class="fs-5">Minuman & Dessert</h4>
                        <p class="fs-6"><?php
                               echo $jumlahminuman;
                            ?>
                            item
                        </p>
                        <p><a href="minuman.php" class="text-white decoration">Lihat detail</a></p>
                    </div>
                </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 col-12 mb-3">
                <div class="summary-user p-3">
                <div class="row">
                    <div class="col-6">
                        <i class="fas fa-solid fa-user fa-5x text-black-50"></i>
                    </div>
                    <div class="col-6 text-white">
                        <h4 class="fs-5">User</h4>
                        <p class="fs-6"><?php
                               echo $jumlahuser;
                            ?>
                            User
                        </p>
                        <p><a href="./User/user.php" class="text-white decoration">Lihat detail</a></p>
                    </div>
                </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
