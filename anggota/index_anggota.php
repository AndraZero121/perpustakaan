<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.1/aos.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <title>Dashboard Anggota</title>
</head>
<body class="font-roboto bg-gray-100">
    <div class="container mx-auto p-5">
        <h1 class="text-2xl font-bold mb-5">Dashboard Anggota</h1>
        <button id="btnTambah" class="bg-blue-500 text-white px-4 py-2 rounded">Tambah Anggota</button>
        <table class="min-w-full bg-white border border-gray-300 mt-5">
            <thead>
                <tr>
                    <th class="border px-4 py-2">ID</th>
                    <th class="border px-4 py-2">Nama</th>
                    <th class="border px-4 py-2">Alamat</th>
                    <th class="border px-4 py-2">Tanggal Lahir</th>
                    <th class="border px-4 py-2">Kontak</th>
                    <th class="border px-4 py-2">Aksi</th>
                </tr>
            </thead>
            <tbody id="anggotaTable">
                <!-- Data anggota akan dimuat di sini -->
                <?php
                // Koneksi ke database
                $conn = new mysqli('localhost', 'username', 'password', 'database_name');

                // Cek koneksi
                if ($conn->connect_error) {
                    die("Koneksi gagal: " . $conn->connect_error);
                }

                // Query untuk mengambil data anggota
                $sql = "SELECT * FROM anggota";
                $result = $conn->query($sql);

                // Tampilkan data anggota
                if ($result->num_rows > 0) {
                    while($row = $result->fetch_assoc()) {
                        echo "<tr>
                                <td class='border px-4 py-2'>" . $row['id_anggota'] . "</td>
                                <td class='border px-4 py-2'>" . $row['nama_anggota'] . "</td>
                                <td class='border px-4 py-2'>" . $row['alamat'] . "</td>
                                <td class='border px-4 py-2'>" . $row['tanggal_lahir'] . "</td>
                                <td class='border px-4 py-2'>" . $row['kontak'] . "</td>
                                <td class='border px-4 py-2'>
                                    <button onclick='editAnggota(" . $row['id_anggota'] . ")' class='bg-yellow-500 text-white px-2 py-1 rounded'>Edit</button>
                                    <button onclick='hapusAnggota(" . $row['id_anggota'] . ")' class='bg-red-500 text-white px-2 py-1 rounded'>Hapus</button>
                                </td>
                              </tr>";
                    }
                } else {
                    echo "<tr><td colspan='6' class='border px-4 py-2 text-center'>Tidak ada data anggota</td></tr>";
                }

                $conn->close();
                ?>
            </tbody>
        </table>
    </div>

    <script>
        $(document).ready(function() {
            loadAnggota();

            $('#btnTambah').click(function() {
                Swal.fire({
                    title: 'Tambah Anggota',
                    html: '<input id="nama" class="swal2-input" placeholder="Nama Anggota">' +
                          '<input id="alamat" class="swal2-input" placeholder="Alamat">' +
                          '<input id="tanggal_lahir" type="date" class="swal2-input">' +
                          '<input id="kontak" class="swal2-input" placeholder="Kontak">',
                    focusConfirm: false,
                    preConfirm: () => {
                        return {
                            nama: $('#nama').val(),
                            alamat: $('#alamat').val(),
                            tanggal_lahir: $('#tanggal_lahir').val(),
                            kontak: $('#kontak').val()
                        }
                    }
                }).then((result) => {
                    if (result.isConfirmed) {
                        $.ajax({
                            url: 'tambah_anggota.php',
                            type: 'POST',
                            data: result.value,
                            success: function(response) {
                                Swal.fire('Berhasil!', 'Anggota berhasil ditambahkan.', 'success');
                                loadAnggota();
                            }
                        });
                    }
                });
            });
        });

        function loadAnggota() {
            $.ajax({
                url: 'get_anggota.php',
                type: 'GET',
                success: function(data) {
                    $('#anggotaTable').html(data);
                }
            });
        }

        function editAnggota(id) {
            $.ajax({
                url: 'get_anggota.php',
                type: 'GET',
                data: { id: id },
                success: function(data) {
                    const anggota = JSON.parse(data);
                    Swal.fire({
                        title: 'Edit Anggota',
                        html: '<input id="nama" class="swal2-input" value="' + anggota.nama_anggota + '">' +
                              '<input id="alamat" class="swal2-input" value="' + anggota.alamat + '">' +
                              '<input id="tanggal_lahir" type="date" class="swal2-input" value="' + anggota.tanggal_lahir + '">' +
                              '<input id="kontak" class="swal2-input" value="' + anggota.kontak + '">',
                        focusConfirm: false,
                        preConfirm: () => {
                            return {
                                id: id,
                                nama: $('#nama').val(),
                                alamat: $('#alamat').val(),
                                tanggal_lahir: $('#tanggal_lahir').val(),
                                kontak: $('#kontak').val()
                            }
                        }
                    }).then((result) => {
                        if (result.isConfirmed) {
                            $.ajax({
                                url: 'edit_anggota.php',
                                type: 'POST',
                                data: result.value,
                                success: function(response) {
                                    Swal.fire('Berhasil!', 'Anggota berhasil diubah.', 'success');
                                    loadAnggota();
                                }
                            });
                        }
                    });
                }
            });
        }

        function hapusAnggota(id) {
            Swal.fire({
                title: 'Apakah Anda yakin?',
                text: "Data anggota ini akan dihapus!",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#d33',
                cancelButtonColor: '#3085d6',
                confirmButtonText: 'Ya, hapus!'
            }).then((result) => {
                if (result.isConfirmed) {
                    $.ajax({
                        url: 'hapus_anggota.php',
                        type: 'POST',
                        data: { id: id },
                        success: function(response) {
                            Swal.fire('Terhapus!', 'Anggota berhasil dihapus.', 'success');
                            loadAnggota();
                        }
                    });
                }
            });
        }
    </script>
</body>
</html>
