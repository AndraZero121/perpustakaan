<?php
include '../koneksi.php';

if (isset($_POST['id']) && isset($_POST['nama']) && isset($_POST['alamat']) && isset($_POST['tanggal_lahir']) && isset($_POST['kontak'])) {
  $id = $_POST['id'];
  $nama = $_POST['nama'];
  $alamat = $_POST['alamat'];
  $tanggal_lahir = $_POST['tanggal_lahir'];
  $kontak = $_POST['kontak'];

  $sql = "UPDATE anggota SET 
          nama_anggota = '$nama',
          alamat = '$alamat',
          tanggal_lahir = '$tanggal_lahir',
          kontak = '$kontak'
          WHERE id_anggota = $id";

  if ($koneksi->query($sql) === TRUE) {
?>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script>
      Swal.fire({
        icon: 'success',
        title: 'Berhasil!',
        text: 'Data anggota berhasil diperbarui',
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
        text: 'Gagal memperbarui data anggota',
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