<?php
if($_POST){
	$nama_buku=$_POST['nama_buku'];
	$pengarang=$_POST['pengarang'];
	if(empty($nama_buku)){
		echo "<script>alert('Nama Buku tidak boleh kosong');location.href='tambah_buku.php';</script>";

	}  elseif(empty($pengarang)){
		echo "<script>alert('Pengarang tidak boleh kosong');location.href='tambah_buku.php';</script>";
	}  else {
		include "koneksi.php";
		$insert=mysqli_query($conn,"insert into Buku (nama_buku, pengarang) value ('".$nama_buku."','".$pengarang."')");
		if($insert){
			echo "<script>alert('Sukses menambahkan Buku');location.href='buku.php';</script>";
		} else {
			echo "<script>alert('Gagal menambahkan Buku');location.href='tambah_buku.php';</script>";
		}
	}
}
?>