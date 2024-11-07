<?php

define('HOST', 'localhost');
define('PORT', 3050);
define('USERNAME', 'root');
define('PASSWORD', 'admin123');
define('DATABASE', 'perpustakaan');

$koneksi = new mysqli(HOST . ':' . PORT, USERNAME, PASSWORD, DATABASE);

if ($koneksi->connect_error) {
  echo "<script>console.log('Koneksi database gagal: " . $koneksi->connect_error . "');</script>";
} else {
  echo "<script>console.log('Koneksi database berhasil');</script>";
}
