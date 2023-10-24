<?php
    session_start();
    
    $host = 'localhost';
    $user = 'root';
    $pass = '';
    $db = 'restaurant';
    $conn = mysqli_connect($host, $user, $pass, $db);
    if($conn){
        //echo "Koneksi berhasil";
    }

    mysqli_select_db($conn, $db);
?>