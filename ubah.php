<?php
require 'functions.php';

$id = $_GET["id"];

$pekerja = query("SELECT * FROM produksi WHERE id = $id")[0];

if (isset($_POST["submit"])) {
      if (ubah($_POST) > 0 ) {
            echo "
                  <script>
                        alert('data berhasil di ubah');
                        document.location.href = 'index.php';
                  </script>
                  ";
      }else {
            echo "
                  <script>
                        alert('data berhasil di ubah');
                        document.location.href = 'index.php';
                  </script>
                  ";
      }
}




?>




<!DOCTYPE html>
<html lang="en">
<head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>Halaman Ubah</title>
</head>
<body>
      <h1>Halaman Ubah</h1>
      <form action="" method="post">
            <input type="hidden" name="id" value="<?= $pekerja["id"]; ?>">
            <ul>
                  <li>
                        <label for="nama">Nama</label>
                        <input type="text" name="nama" id="nama" required 
                        value="<?= $pekerja["nama"]; ?>">
                  </li>
                  <li>
                        <label for="nrp">NRP</label>
                        <input type="text" name="nrp" id="nrp" 
                        value="<?= $pekerja["nrp"]; ?>">
                  </li>
                  <li>
                        <label for="email">Email</label>
                        <input type="text" name="email" id="email" 
                        value="<?= $pekerja["email"]; ?>">
                  </li>
                  <li>
                        <label for="jurusan">Jurusan</label>
                        <input type="text" name="jurusan" id="jurusan"
                        value="<?= $pekerja["jurusan"]; ?>">
                  </li>
                  <li>
                        <label for="gambar">Gambar</label>
                        <input type="text" name="gambar" id="gambar"
                        value="<?= $pekerja["gambar"]; ?>">
                  </li>
                  <li>
                        <button type="submit" name="submit">Ubah data</button>
                  </li>
            </ul>


      </form>
      
</body>
</html>