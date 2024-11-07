<?php
include '../koneksi.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $id = $_POST['id'];
  $judul = $_POST['judul'];
  $pengarang = $_POST['pengarang'];
  $penerbit = $_POST['penerbit'];
  $tahun_terbit = $_POST['tahun_terbit'];
  $kategori = $_POST['kategori'];
  $stok = $_POST['stok'];

  // Handle upload gambar baru
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

  // Query update dengan gambar opsional
  if (!empty($gambar)) {
    $sql = "UPDATE buku SET 
            judul_buku = ?,
            pengarang = ?,
            penerbit = ?,
            tahun_terbit = ?,
            kategori = ?,
            jumlah_stok = ?,
            gambar = ?
            WHERE id_buku = ?";
    $stmt = $koneksi->prepare($sql);
    $stmt->bind_param("sssssssi", $judul, $pengarang, $penerbit, $tahun_terbit, $kategori, $stok, $gambar, $id);
  } else {
    $sql = "UPDATE buku SET 
            judul_buku = ?,
            pengarang = ?,
            penerbit = ?,
            tahun_terbit = ?,
            kategori = ?,
            jumlah_stok = ?
            WHERE id_buku = ?";
    $stmt = $koneksi->prepare($sql);
    $stmt->bind_param("ssssssi", $judul, $pengarang, $penerbit, $tahun_terbit, $kategori, $stok, $id);
  }

  if ($stmt->execute()) {
    echo "<script>
            Swal.fire({
                title: 'Berhasil!',
                text: 'Data buku berhasil diperbarui',
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
                text: 'Terjadi kesalahan saat memperbarui data buku',
                icon: 'error',
                confirmButtonText: 'OK'
            });
        </script>";
  }

  $stmt->close();
  $koneksi->close();
}
