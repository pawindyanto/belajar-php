<?php
//koneksi ke database & pilih database
$db = mysqli_connect('localhost', 'root', '', 'belajar-php');

//query isi tabel mahasiswa
$result = mysqli_query($db, "SELECT * FROM mahasiswa");
// var_dump($result);

// ubah data ke dalam array
// $row = mysqli_fetch_row($result);  //array numerik
// $row = mysqli_fetch_assoc($result); //array assosiatif 
// $row = mysqli_fetch_array($result); //array numerik dan assosiatif
$rows = []; //menampung array dalam array kosong
while ($row = mysqli_fetch_assoc($result)) {
  $rows[] = $row;
}


// tampung ke variabel mahasiswa
$mahasiswa = $rows;

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

  <table border="1" cellpadding="10" cellspacing="0">
    <tr>
      <th>#</th>
      <th>Gambar</th>
      <th>NRP</th>
      <th>Nama</th>
      <th>Email</th>
      <th>Jurusan</th>
      <th>Aksi</th>
    </tr>
    <?php foreach ($mahasiswa as $mhs) : ?>
      <tr>
        <td><?= $mhs['id']; ?></td>
        <td><img src="./img/<?= $mhs['gambar']; ?>" width="60"></td>
        <td><?= $mhs['npm']; ?></td>
        <td><?= $mhs['nama']; ?></td>
        <td><?= $mhs['email']; ?></td>
        <td><?= $mhs['prodi']; ?></td>
        <td><a href="">Ubah</a> / <a href="">Hapus</a></td>
      </tr>
    <?php endforeach; ?>
  </table>
</body>

</html>