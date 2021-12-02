<?php
  include "header.php";   
  ?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title></title>
  </head>
  <body>
    <h3>Data Mahasiswa</h3>
    <a href="tambah_mahasiswa.php" class="btn btn-success">Tambah Data</a> 
    
    <table class="table table-hover table-striped">
        <thead>
            <tr>
                <th>NO</th>
                <th>NAMA</th>
                <th>TANGGAL LAHIR</th>
                <th>JENIS KELAMIN</th>
                <th>ALAMAT</th>
                <th>USERNAME</th>
                <th>JURUSAN</th>
                <th>AKSI</th>
            </tr>
        </thead>
        <tbody>
            <?php
            include "koneksi.php";
            $qry_mahasiswa=mysqli_query($conn, "select * from mahasiswa join jurusan on jurusan.id_jurusan=mahasiswa.id_jurusan");
            $no=0;
            while($data_mahasiswa=mysqli_fetch_array($qry_mahasiswa)){
            $no++;
            ?>
                <tr>
                    <td><?=$no?></td>
                    <td><?=$data_mahasiswa['nama']?></td>
                    <td><?=$data_mahasiswa['tanggal_lahir']?></td>
                    <td><?=$data_mahasiswa['jenis_kelamin']?></td>
                    <td><?=$data_mahasiswa['alamat']?></td>
                    <td><?=$data_mahasiswa['username']?></td>
                    <td><?=$data_mahasiswa['nama_jurusan']?></td>
                    <td><a href="ubah_mahasiswa.php?id_mhs=<?=$data_mahasiswa['id_mhs']?>" class="btn btn-success">Ubah</a> |
                    <a href="hapus_mahasiswa.php?id_mhs=<?=$data_mahasiswa['id_mhs']?>" onclick="return confirm('Apakah anda yakin menghapus data ini?')" class="btn btn-danger">Hapus</a></td>
                </tr>
                <?php
            }
            ?>
        </tbody>
        </table>    
            
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->
  </body>
</html>
