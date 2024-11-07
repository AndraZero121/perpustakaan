<?php
include '../koneksi.php';

if (isset($_POST['id'])) {
  $id = $_POST['id'];

  $sql = "DELETE FROM anggota WHERE id_anggota = $id";

  if ($koneksi->query($sql) === TRUE) {
?>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script>
      Swal.fire({
        icon: 'success',
        title: 'Berhasil!',
        text: 'Data anggota berhasil dihapus',
        showConfirmButton: false,
        timer: 1500
      }).then(function() {
        window.location = 'index_anggota.php';
      });
    </script>
  <?php
  } else {
  ?>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script>
      Swal.fire({
        icon: 'error',
        title: 'Gagal!',
        text: 'Gagal menghapus data anggota',
        showConfirmButton: true
      }).then(function() {
        window.location = 'index_anggota.php';
      });
    </script>
<?php
  }
}

$koneksi->close();
?>