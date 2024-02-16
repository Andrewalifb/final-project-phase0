<?php
  $servername = "localhost";
  $username = "root";
  $password = "";
  $dbname = "mile_stone_phase0";

  // buat koneksi
  $conn = new mysqli($servername, $username, $password, $dbname);

  // pengecekan
  if($conn->connect_error) {
    die("koneksi gagal : ". $conn->connect_error);
  };

  // echo "koneksi berhasil";
?>