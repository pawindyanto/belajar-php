<?php
require 'functions.php';
// tampung ke variabel mahasiswa
$mahasiswa = query("SELECT * FROM mahasiswa");

// var_dump($mahasiswa);
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Daftar Mahasiswa</title>
</head>

<body>
  <h3>Dafftar Mahasiswa</h3>
  <a href="tambah.php">Tambah Data Mahasiswa</a>
  <br>
  <table border="1" cellpadding="10" cellspacing="0">
    <tr>
      <th>#</th>
      <th>Gambar</th>
      <th>Nama</th>
      <th>Aksi</th>
    </tr>
    <?php foreach ($mahasiswa as $mhs) : ?>
      <tr>
        <td><?= $mhs['id']; ?></td>
        <td><img src="./img/<?= $mhs['gambar']; ?>" width="60"></td>
        <td><?= $mhs['nama']; ?></td>
        <td><a href="detail.php?id=<?= $mhs['id']; ?>">Lihat Detail</a></td>
      </tr>
    <?php endforeach; ?>
  </table>
</body>

</html>