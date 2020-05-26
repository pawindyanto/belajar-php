<?php

function koneksi()
{
  return mysqli_connect('localhost', 'root', '', 'belajar-php');
}

function query($query)
{
  $conn = koneksi();

  $result = mysqli_query($conn, $query);

  // jika hasilnya hanya 1 data
  if (mysqli_num_rows($result) == 1) {
    return mysqli_fetch_assoc($result);
  }

  // ubah data ke dalam array
  // $row = mysqli_fetch_row($result);  //array numerik
  // $row = mysqli_fetch_assoc($result); //array assosiatif 
  // $row = mysqli_fetch_array($result); //array numerik dan assosiatif
  $rows = []; //menampung array dalam array kosong
  while ($row = mysqli_fetch_assoc($result)) {
    $rows[] = $row;
  }

  return $rows;
}

function tambah($data)
{
  $conn = koneksi();

  $nama = htmlspecialchars($data['nama']);
  $npm = htmlspecialchars($data['npm']);
  $email = htmlspecialchars($data['email']);
  $prodi = htmlspecialchars($data['prodi']);
  $gambar = htmlspecialchars($data['gambar']);


  $query = "INSERT INTO
              mahasiswa
            VALUES
              (null,'$nama','$npm','$email','$prodi','$gambar');
            ";
  mysqli_query($conn, $query);

  echo mysqli_error($conn);

  return mysqli_affected_rows($conn);
}
