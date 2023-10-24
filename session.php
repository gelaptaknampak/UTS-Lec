<?php
    include "./koneksi.php";
    if($_SESSION['login'] == false){
        header('location: login.php');
    }
?>
