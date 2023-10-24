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
    <div class="container mt-4">
        <!-- Form Tambah Menu -->
        <?php
            if (isset($_GET['ubah'])) {
        ?>
            <h1 class="mb-4">Form Ubah Menu</h1>
        <?php
            } else {
        ?>
            <h1 class="mb-4">Form Tambah Menu</h1>
        <?php
            }
        ?>
        <form action="proses.php" method="POST" enctype="multipart/form-data">
            <div class="mb-3">
                <label for="nama_menu" class="form-label">Nama Menu:</label>
                <input type="text" class="form-control" id="nama_menu" name="nama_menu" required>
            </div>

            <div class="mb-3">
                <label for="harga" class="form-label">Harga:</label>
                <input type="text" class="form-control" id="harga" name="harga" required>
            </div>

            <div class="mb-3">
                <label for="deskripsi" class="form-label">Deskripsi:</label>
                <textarea class="form-control" id="deskripsi" name="deskripsi" rows="4" required></textarea>
            </div>

            <div class="mb-3">
                <label for="gambar" class="col-sm-2 col-form-label">Gambar:</label>
                <input class="form-control" type="file" id="gambar" name="gambar" accept="image/*">
            </div>

            <div class="mb-3">
                <label for="kategori_menu" class="form-label">Kategori Menu:</label>
                <select class="form-select" id="kategori_menu" name="kategori_menu" required>
                    <option value="recommended">Menu Recommended</option>
                    <option value="promo">Menu Promo</option>
                    <option value="minuman_dessert">Menu Minuman dan Dessert</option>
                </select>
            </div>

            <?php
                ?>
                <button type="submit" class="btn btn-success" name="aksi" value="add">Tambah Menu</button>
                <?php
            ?>

            <a href="index.php" class="btn btn-secondary">Batal</a>
        </form>
    </div>
</body>
</html>