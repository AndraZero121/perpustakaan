<?php
include '../koneksi.php';

if (isset($_POST['nama']) && isset($_POST['alamat']) && isset($_POST['tanggal_lahir']) && isset($_POST['kontak'])) {
  $nama = $_POST['nama'];
  $alamat = $_POST['alamat'];
  $tanggal_lahir = $_POST['tanggal_lahir'];
  $kontak = $_POST['kontak'];

  $sql = "INSERT INTO anggota (nama_anggota, alamat, tanggal_lahir, kontak) 
            VALUES ('$nama', '$alamat', '$tanggal_lahir', '$kontak')";

  if ($koneksi->query($sql) === TRUE) {
?>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script>
      Swal.fire({
        icon: 'success',
        title: 'Berhasil!',
        text: 'Data anggota berhasil ditambahkan',
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
        text: 'Gagal menambahkan data anggota',
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