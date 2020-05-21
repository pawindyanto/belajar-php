<?php

function koneksi()
{
  return mysqli_connect('localhost', 'root', '', 'belajar-php');
}

function query($query)
{
  $conn = koneksi();

  $result = mysqli_query($conn, $query);

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
