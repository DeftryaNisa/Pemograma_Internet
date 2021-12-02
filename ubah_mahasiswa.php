<!DOCTYPE html>
<html>
<head>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
	<title></title>
</head>
<body>
    <?php
	include "header.php";
    include "koneksi.php";
    $qry_get_mahasiswa=mysqli_query($conn,"select * from mahasiswa where id_mhs = '".$_GET['id_mhs']."'");
    $data_mahasiswa=mysqli_fetch_array($qry_get_mahasiswa);
    ?>
    <h3>Ubah Data</h3>
    <form action="proses_ubah_mahasiswa.php" method="post">
    	<input type="hidden" name="id_mhs" value="<?=$data_mahasiswa['id_mhs']?>">
    	Nama Mahasiswa :
    	<input type="text" name="nama" value="<?=$data_mahasiswa['nama']?>" class="form-control">
    	Tanggal Lahir :
    	<input type="date" name="tanggal_lahir" value="<?=$data_mahasiswa['tanggal_lahir']?>" class="form-control">
    	Jenis Kelamin :
    	<?php
    	$arr_jk=array('L'=>'Laki-Laki','P'=>'Perempuan');
    	?>
    	<select name="jenis_kelamin" class="form-control">
    		<option></option>
    		<?php foreach ($arr_jk as $key_jk => $val_jk):
    		   if($key_jk==$data_mahasiswa['jenis_kelamin']){
    		   	   $selek="selected";
    		   } 
			   else {
    		   	   $selek="";
    		   }
    		?>
    		   <option value="<?=$key_jk?>" <?=$selek?>><?=$val_jk?></option>
    		<?php endforeach ?>    		
    	</select>
    	Alamat :
    	<textarea name="alamat" class="form-control" rows="4"><?=$data_mahasiswa['alamat']?></textarea>
    	Jurusan :
    	<select name="id_jurusan" class="form-control">
    		<option></option>
    		<?php
    		include "koneksi.php";
    		$qry_jurusan=mysqli_query($conn, "select * from jurusan");
    		while($data_jurusan=mysqli_fetch_array($qry_jurusan)){
    			if($data_jurusan['id_jurusan']==$data_mahasiswa['id_jurusan']){
    				$selek="selected";
    			} 
				else {
                    $selek="";
    			}
    	echo '<option value="'.$data_jurusan['id_jurusan'].'" '.$selek.'>'.$data_jurusan['nama_jurusan'].'</option>';
    		}
    		?>
    	</select>
    	Username :
    	<input type="text" name="username" value="<?=$data_mahasiswa['username']?>" class="form-control">
    	Password :
    	<input type="Password" name="password" value="" class="form-control">
    	<input type="submit" name="simpan" value="Ubah Data Mahasiswa" class="btn btn-primary">
    
    </form>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>