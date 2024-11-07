<?php
include '../koneksi.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $id = $_POST['id'];

  // Query untuk menghapus buku
  $sql = "DELETE FROM buku WHERE id_buku = ?";
  $stmt = $koneksi->prepare($sql);
  $stmt->bind_param("i", $id);

  if ($stmt->execute()) {
    echo "<script>
            Swal.fire({
                title: 'Berhasil!',
                text: 'Data buku berhasil dihapus',
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
                text: 'Terjadi kesalahan saat menghapus data buku',
                icon: 'error', 
                confirmButtonText: 'OK'
            });
        </script>";
  }

  $stmt->close();
  $koneksi->close();
}
