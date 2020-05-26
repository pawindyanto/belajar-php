<?php
require 'functions.php';

// cek apakah tombol sudah ditekan atau belum?
if (isset($_POST['tambah'])) {
  if (tambah($_POST) > 0) {
    echo "<script>
    alert('data berhasil ditambahkan');  
    document.location.href = 'latihan1.php';
    </script>";
  } else {
    echo "Data Gagal Ditambahkan";
  }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <style>
    li {
      list-style: none;
      padding-bottom: 10px;
    }
  </style>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Form Mahasiswa Baru</title>

</head>

<body>
  <h3>Form Tambah Mahasiswa baru</h3>
  <form action="" method="POST">
    <ul>
      <li>
        <label>
          Nama :
          <input type="text" name="nama" autofocus required>
        </label>
      </li>
      <li>
        <label>
          NPM :
          <input type="text" name="npm" required>
        </label>
      </li>
      <li>
        <label>
          Email :
          <input type="text" name="email" required>
        </label>
      </li>
      <li>
        <label>
          Prodi :
          <input type="text" name="prodi" required>
        </label>
      </li>
      <li>
        <label>
          Gambar :
          <input type="text" name="gambar" required>
        </label>
      </li>
      <li>
        <button type="submit" name="tambah">Tambah Data</button>
      </li>
    </ul>
  </form>
</body>

</html>