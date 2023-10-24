<?php
require "koneksi.php";

?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>login</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Tambahkan link ke CSS Bootstrap 5 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
<style>
    body {
        background-image: url(img/walpaper\ makanan.jpg);
        background-size: cover;
        background-position: center;
        background-repeat: no-repeat;
        overflow: hidden;
    }

    .main {
        display: flex;
        justify-content: center;
        align-items: center;
        height: 100vh; /* Menempatkan elemen tengah vertikal pada tinggi layar */
    }

    .login-box {
        width: 400px;
        height: 550px;
        box-sizing: border-box;
        border-radius: 10px;
        background-color: rgba(0, 0, 0, 0.8);
        color: #fff;
        padding: 20px;
        box-shadow: 0px 0px 10px 0px #000000;
    }

    .login-box input {
    background: none;
    border: none; /* Menghapus border */
    border-bottom: 2px solid #FF0000; /* Menambah garis horizontal di bagian bawah input */
    color: #fff;
    width: 100%; /* Mengisi lebar penuh */
    outline: none;
}


    .login-box a {
        color: #FF0000;
    }

    .login-box label {
    margin-top: 20px; /* Menambahkan padding ke bawah label */
    }
</style>
</head>
<body>
    <div class="main d-flex justify-content-center align-items-center">
        <div class="login-box p-5 shadow">
            <form action="" method="POST">
            <div>
                <h1>Sign In</h1>
            </div>
            <div>
                <label for="username">Email/Username</label>
                <input type="text" name="username" id="username" value="<?php echo isset($_POST['username']) ? htmlspecialchars($_POST['username']) : ''; ?>">
            </div>
            <div>
                <label for="password">Password</label>
                <input type="password" name="password" id="password">
            </div>
            <div>
            <br/>
            <p>
            <img src="kodeacak.php" width="75" height="25" alt="Kode Acak" />
            <input name="kodeacak" type="text" id="kodeacak" size="6" maxlength="6" />
            </p>
            <div class="g-recaptcha" data-sitekey="6Ldmq78oAAAAAGQhGXznj6CpWqk5_z_5efTW5OZU"></div>
            <div>
                <br/>
                <p style="display: inline;">Belum punya akun? </p>
                <a style="display: inline;" href="./userregister.php">Daftar disini</a>
            </div>
                <button class="btn btn-success form-control my-3" type="submit" name="loginbtn">Login</button>
            </div>
            </form>
        </div>
    </div>

    <div class="mt-3" style="width: 500px;">
        <?php
if (isset($_POST['loginbtn'])) {
    $input = $_POST['username'];
    $password = $_POST['password'];

    // Verify reCAPTCHA
    $recaptchaSecretKey = '6Ldmq78oAAAAABq819sxpHBZ4lcDmVw1AqJ0fvNJ';
    $recaptchaResponse = $_POST['g-recaptcha-response'];

    $recaptchaVerification = file_get_contents("https://www.google.com/recaptcha/api/siteverify?secret=$recaptchaSecretKey&response=$recaptchaResponse");
    $recaptchaData = json_decode($recaptchaVerification);

    if (!$recaptchaData->success) {
        echo "Please complete the reCAPTCHA.";
    } else {
        if (isset($_POST['loginbtn'])) {
            $input = $_POST['username'];
            $password = $_POST['password'];
        
            $queryAdmin = "SELECT * FROM login WHERE username = ?";
        
            // Check if the input is an email or username
            if (filter_var($input, FILTER_VALIDATE_EMAIL)) {
                // User entered an email
                $queryUser = "SELECT * FROM userregister WHERE Email = ?";
            } else {
                // User entered a username
                $queryUser = "SELECT * FROM userregister WHERE Username = ?";
            }
        
            // Prepare and execute the admin query
            $stmtAdmin = mysqli_prepare($conn, $queryAdmin);
            mysqli_stmt_bind_param($stmtAdmin, "s", $input);
            mysqli_stmt_execute($stmtAdmin);
            $resultAdmin = mysqli_stmt_get_result($stmtAdmin);
        
            // Prepare and execute the user query
            $stmtUser = mysqli_prepare($conn, $queryUser);
            mysqli_stmt_bind_param($stmtUser, "s", $input);
            mysqli_stmt_execute($stmtUser);
            $resultUser = mysqli_stmt_get_result($stmtUser);
        
            $dataAdmin = mysqli_fetch_array($resultAdmin);
            $dataUser = mysqli_fetch_array($resultUser);
        
            if ($dataAdmin) {
                // Admin berhasil login
                if (password_verify($password, $dataAdmin['password'])) {
                    $_SESSION['username'] = $dataAdmin['username'];
                    $_SESSION['login'] = true;
                    header('location: admin.php');
                } else {
                    echo "Password Admin Salah";
                }
            } elseif ($dataUser) {
                // Pengguna berhasil login
                if (password_verify($password, $dataUser['password'])) {
                    $_SESSION['username'] = $dataUser['Username'];
                    $_SESSION['login'] = true;
                    $_SESSION['ID_user'] = $dataUser['ID_user'];
                    header('location: ./?ID_user=' . $dataUser['ID_user']);
                } else {
                    echo "Password User Salah";
                }
            } else {
                echo "Akun Tidak Tersedia";
            }
        }
    }
}
        ?>
    </div>
<script src="https://www.google.com/recaptcha/api.js" async defer></script>
</body>
</html>
