<?php
session_start();
    if ($_POST){
        include "koneksi.php";
        $qry_get_buku = mysqli_query($conn, "select * from buku where id_buku = '".$_GET['id_buku']."'");
        $data_buku = mysqli_fetch_array($qry_get_buku);
        $_SESSION['cart'][]=array('id_buku'=>$data_buku['id_buku'],'nama_buku'=>$data_buku['nama_buku'],'qty'=>$_POST['pinjam_buku']);
    }
    header('location: keranjang.php');
?>