<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Data menu</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Tambahkan link ke CSS Bootstrap 5 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="../admin.php">Database Restaurant</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarScroll" aria-controls="navbarScroll" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarScroll">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="../admin.php">Home</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Kategori
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="../reccomended.php">Menu Menu Makakann Hits</a>
                            <a class="dropdown-item" href="../promo.php">Menu Hemat Akhir Bulan</a>
                            <a class="dropdown-item" href="../minuman.php">Minuman dan Dessert</a>
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
    
    <div class="container mt-4">
        <h3 class="text-center">User</h3>
        <br/>
        <br/>
        <table class="table table-striped">
            <thead>
                <tr>
                    <!-- Header tabel -->
                    <th class="text-center">ID User</th>
                    <th class="text-center">Username</th>
                    <th class="text-center">Email</th>
                    <th class="text-center">Nama Depan</th>
                    <th class="text-center">Nama Belakang</th>
                    <th class="text-center">Tanggal Lahir</th>
                    <th class="text-center">Jenis Kelamin</th>
                </tr>
            </thead>
            <tbody>
                <?php
                include '../koneksi.php';

                $sql = mysqli_query($conn, "SELECT * FROM `userregister`");

                while ($result = mysqli_fetch_assoc($sql)) {
                    ?>
                    <tr>
                        <!-- Isi tabel -->
                        <td class="text-center"><?php echo $result['ID_user'] ?></td>
                        <td class="text-center"><?php echo $result['Username'] ?></td>
                        <td class="text-center"><?php echo $result['Email'] ?></td>
                        <td class="text-center px-5"><?php echo $result['Nama_depan'] ?></td>
                        <td class="text-center px-5"><?php echo $result['Nama_belakang'] ?></td>
                        <td class="text-center px-5"><?php echo $result['Tanggal_lahir'] ?></td>
                        <td class="text-center px-5"><?php echo $result['Jenis_kelamin'] ?></td>
                    </tr>
                    <?php
                }
                ?>
            </tbody>
        </table>
    </div>
</body>
</html>
