<?php
// Koneksi ke database (gunakan koneksi.php atau sesuaikan dengan konfigurasi Anda)
include 'koneksi.php';

// Ambil data dari formulir registrasi
$username = $_POST['username'];
$email = $_POST['email'];
$password = password_hash($_POST['password'], PASSWORD_BCRYPT); // Hash password
$nama_depan = $_POST['nama_depan'];
$nama_belakang = $_POST['nama_belakang'];
$day = $_POST['day'];
$month = $_POST['month'];
$year = $_POST['year'];
$birthdate = "$year-$month-$day";
$jenis_kelamin = $_POST['jenis_kelamin'];

// Lakukan validasi data jika diperlukan

// Query untuk memasukkan data ke tabel user
$query = "INSERT INTO userregister (Username, Email, password, Nama_depan, Nama_belakang, Tanggal_lahir, Jenis_kelamin)
          VALUES ('$username', '$email', '$password', '$nama_depan', '$nama_belakang', '$birthdate', '$jenis_kelamin')";

if (mysqli_query($conn, $query)) {
    // Registrasi berhasil, arahkan pengguna ke halaman loginuser.php
    header('location: login.php');
    exit; // Pastikan untuk menghentikan eksekusi kode setelah mengarahkan pengguna
} else {
    echo "Registrasi gagal. Silakan coba lagi.";
}
?>
