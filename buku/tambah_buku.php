<?php
include '../koneksi.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $judul = $_POST['judul'];
  $pengarang = $_POST['pengarang'];
  $penerbit = $_POST['penerbit'];
  $tahun_terbit = $_POST['tahun_terbit'];
  $kategori = $_POST['kategori'];
  $stok = $_POST['stok'];
  $status = $_POST['status'];
  $rating = $_POST['rating'];

  // Handle upload gambar
  $gambar = '';
  if (isset($_FILES['gambar']) && $_FILES['gambar']['error'] == 0) {
    $target_dir = "../uploads/";
    $file_extension = pathinfo($_FILES["gambar"]["name"], PATHINFO_EXTENSION);
    $file_name = time() . '.' . $file_extension;
    $target_file = $target_dir . $file_name;

    if (move_uploaded_file($_FILES["gambar"]["tmp_name"], $target_file)) {
      $gambar = $file_name;
    }
  }

  $sql = "INSERT INTO buku (judul_buku, pengarang, penerbit, tahun_terbit, kategori, jumlah_stok, gambar, status, rating) 
            VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?)";

  $stmt = $koneksi->prepare($sql);
  $stmt->bind_param("ssssssssd", $judul, $pengarang, $penerbit, $tahun_terbit, $kategori, $stok, $gambar, $status, $rating);

  if ($stmt->execute()) {
    echo "<script>
            Swal.fire({
                title: 'Berhasil!',
                text: 'Data buku berhasil ditambahkan',
                icon: 'success',
                confirmButtonText: 'OK'
            }).then((result) => {
                if (result.isConfirmed) {
                    window.location.href = 'index_buku.php';
                }
            });
        </script>";
  } else {
    echo "<script>
            Swal.fire({
                title: 'Gagal!', 
                text: 'Terjadi kesalahan saat menambahkan data buku',
                icon: 'error',
                confirmButtonText: 'OK'
            });
        </script>";
  }

  $stmt->close();
  $koneksi->close();
}
