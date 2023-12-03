<?php
require 'functions.php';

$pekerja = query("SELECT * FROM produksi");


?>




<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Halaman Karyawan</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  </head>
  <body>
    <div class="container">
    <h1>Halaman Karyawan</h1>
    <a href="tambah.php">Tambah data karyawan</a>

    <table class="table">
  <thead class="table table-dark">
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Gambar</th>
      <th scope="col">Nama</th>
      <th scope="col">NRP</th>
      <th scope="col">Email</th>
      <th scope="col">Jurusan</th>
      <th scope="col">Aksi</th>
    </tr>
  </thead>
  <tbody>
    <?php $i = 1; ?>
    <?php foreach ($pekerja as $row) :?>
    <tr>
      <th><?= $i;?></th>
      <td><img src="img/<?= $row["gambar"];?>" alt=""></td>
      <td><?= $row["nama"]?></td>
      <td><?= $row["nrp"]?></td>
      <td><?= $row["email"]?></td>
      <td><?= $row["jurusan"]?></td>
      <th>
        <a href="ubah.php?id= <?=$row["id"];?> ">Ubah</a> |
        <a href="hapus.php?id= <?=$row["id"];?> " onclick= "return confirm('Apakah anda ingin menghapus data ini?')">Hapus</a>
      </th>
    </tr>
    <?php $i++; ?>
    <?php endforeach; ?>
  </tbody>
</table>
</div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  </body>
</html>