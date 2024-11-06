<<<<<<< HEAD
<?php
include '../koneksi.php';

// Query untuk mengambil data anggota
$search = isset($_GET['search']) ? $_GET['search'] : '';
$sql = "SELECT * FROM anggota";
if (!empty($search)) {
    $sql .= " WHERE nama_anggota LIKE '%$search%' 
              OR alamat LIKE '%$search%'
              OR kontak LIKE '%$search%'";
}
$sql .= " ORDER BY id_anggota DESC";

$result = $koneksi->query($sql);
?>

<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Dashboard Anggota Perpustakaan - Kelola data anggota dengan mudah">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.1/aos.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <title>Dashboard Anggota</title>
    <style>
        body {
            font-family: 'Poppins', sans-serif;
            background: linear-gradient(135deg, #f6f7f9 0%, #e9ecef 100%);
            min-height: 100vh;
        }

        .table-container {
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            border-radius: 10px;
            overflow: hidden;
            background: rgba(255, 255, 255, 0.95);
            backdrop-filter: blur(10px);
        }

        .btn-gradient {
            background: linear-gradient(135deg, #3b82f6 0%, #1e40af 100%);
            transition: all 0.3s ease;
        }

        .btn-gradient:hover {
            transform: translateY(-2px);
            box-shadow: 0 4px 12px rgba(59, 130, 246, 0.3);
        }

        .table-hover tr:hover {
            background-color: rgba(243, 244, 246, 0.8);
        }

        .swal2-popup {
            font-family: 'Poppins', sans-serif;
        }

        .swal2-input {
            margin: 0.5rem 0;
            width: 100%;
            padding-left: 2.5rem !important;
        }

        .navbar {
            background: rgba(255, 255, 255, 0.95);
            backdrop-filter: blur(10px);
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }

        .footer {
            background: rgba(255, 255, 255, 0.95);
            backdrop-filter: blur(10px);
            box-shadow: 0 -2px 4px rgba(0, 0, 0, 0.1);
        }
    </style>
</head>

<body>
    <!-- Navbar -->
    <nav class="navbar fixed top-0 left-0 right-0 z-50">
        <div class="container mx-auto px-6 py-4">
            <div class="flex justify-between items-center">
                <div class="flex items-center">
                    <i class="fas fa-book-reader text-3xl text-blue-600 mr-3"></i>
                    <span class="text-xl font-bold">Perpustakaan Digital</span>
                </div>
                <div class="flex items-center space-x-6">
                    <a href="../index.php" class="hover:text-blue-600"><i class="fas fa-home mr-2"></i>Home</a>
                    <a href="../buku/index_buku.php" class="hover:text-blue-600"><i class="fas fa-book mr-2"></i>Buku</a>
                    <a href="index_anggota.php" class="text-blue-600"><i class="fas fa-users mr-2"></i>Anggota</a>
                    <a href="../peminjaman/index_peminjaman.php" class="hover:text-blue-600"><i class="fas fa-handshake mr-2"></i>Peminjaman</a>
                </div>
            </div>
        </div>
    </nav>

    <div class="container mx-auto p-5 animate__animated animate__fadeIn mt-20">
        <div class="flex justify-between items-center mb-8">
            <h1 class="text-3xl font-bold text-gray-800" data-aos="fade-right">Dashboard Anggota</h1>
            <div class="flex gap-4">
                <input type="text" id="searchInput" value="<?php echo htmlspecialchars($search); ?>" placeholder="Cari anggota..." class="px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500">
                <button id="btnTambah" class="btn-gradient text-white px-6 py-3 rounded-lg flex items-center gap-2 shadow-lg" data-aos="fade-left">
                    <i class="fas fa-plus"></i>
                    Tambah Anggota
                </button>
            </div>
        </div>

        <div class="table-container" data-aos="fade-up">
            <table class="min-w-full table-hover">
                <thead class="bg-gray-50">
                    <tr>
                        <th class="px-6 py-4 text-left text-sm font-semibold text-gray-600">ID</th>
                        <th class="px-6 py-4 text-left text-sm font-semibold text-gray-600">Nama</th>
                        <th class="px-6 py-4 text-left text-sm font-semibold text-gray-600">Alamat</th>
                        <th class="px-6 py-4 text-left text-sm font-semibold text-gray-600">Tanggal Lahir</th>
                        <th class="px-6 py-4 text-left text-sm font-semibold text-gray-600">Kontak</th>
                        <th class="px-6 py-4 text-left text-sm font-semibold text-gray-600">Aksi</th>
                    </tr>
                </thead>
                <tbody id="anggotaTable" class="divide-y divide-gray-200">
                    <?php
                    if ($result && $result->num_rows > 0) {
                        while ($row = $result->fetch_assoc()) {
                            echo "<tr>";
                            echo "<td class='px-6 py-4'>" . htmlspecialchars($row['id_anggota']) . "</td>";
                            echo "<td class='px-6 py-4'>" . htmlspecialchars($row['nama_anggota']) . "</td>";
                            echo "<td class='px-6 py-4'>" . htmlspecialchars($row['alamat']) . "</td>";
                            echo "<td class='px-6 py-4'>" . htmlspecialchars($row['tanggal_lahir']) . "</td>";
                            echo "<td class='px-6 py-4'>" . htmlspecialchars($row['kontak']) . "</td>";
                            echo "<td class='px-6 py-4'>
                                    <button onclick='editAnggota(" . json_encode($row) . ")' class='text-blue-600 hover:text-blue-800 mr-2'>
                                        <i class='fas fa-edit'></i>
                                    </button>
                                    <button onclick='hapusAnggota(" . $row['id_anggota'] . ")' class='text-red-600 hover:text-red-800'>
                                        <i class='fas fa-trash'></i>
                                    </button>
                                  </td>";
                            echo "</tr>";
                        }
                    } else {
                        echo "<tr><td colspan='6' class='px-6 py-4 text-center'>Tidak ada data anggota</td></tr>";
                    }
                    ?>
                </tbody>
            </table>
        </div>
    </div>

    <!-- Footer -->
    <footer class="footer mt-12 py-6">
        <div class="container mx-auto px-6">
            <div class="flex flex-col items-center">
                <div class="flex items-center mb-4">
                    <i class="fas fa-book-reader text-2xl text-blue-600 mr-2"></i>
                    <span class="text-lg font-semibold">Perpustakaan Digital</span>
                </div>
                <p class="text-gray-600 text-sm text-center">
                    © 2024 Perpustakaan Digital. All rights reserved.
                </p>
                <div class="flex space-x-4 mt-4">
                    <a href="#" class="text-gray-600 hover:text-blue-600">
                        <i class="fab fa-facebook"></i>
                    </a>
                    <a href="#" class="text-gray-600 hover:text-blue-600">
                        <i class="fab fa-twitter"></i>
                    </a>
                    <a href="#" class="text-gray-600 hover:text-blue-600">
                        <i class="fab fa-instagram"></i>
                    </a>
                </div>
            </div>
        </div>
    </footer>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.1/aos.js"></script>
    <script>
        // Initialize AOS animation library
        AOS.init({
            duration: 800,
            once: true
        });

        // Search functionality with debounce
        let searchTimeout;
        $('#searchInput').on('keyup', function() {
            clearTimeout(searchTimeout);
            const searchValue = $(this).val().toLowerCase();
            searchTimeout = setTimeout(() => {
                window.location.href = `index_anggota.php?search=${encodeURIComponent(searchValue)}`;
            }, 500);
        });

        // Validate input fields before submission
        function validateInput(data) {
            if (!data.nama || !data.alamat || !data.tanggal_lahir || !data.kontak) {
                Swal.fire({
                    icon: 'error',
                    title: 'Oops...',
                    text: 'Semua field harus diisi!'
                });
                return false;
            }

            // Validate phone number format
            const phoneRegex = /^[0-9]{10,13}$/;
            if (!phoneRegex.test(data.kontak)) {
                Swal.fire({
                    icon: 'error',
                    title: 'Format Kontak Salah',
                    text: 'Nomor telepon harus berisi 10-13 digit angka'
                });
                return false;
            }

            // Validate date format and range
            const today = new Date();
            const birthDate = new Date(data.tanggal_lahir);
            if (birthDate > today) {
                Swal.fire({
                    icon: 'error',
                    title: 'Tanggal Lahir Tidak Valid',
                    text: 'Tanggal lahir tidak boleh lebih dari hari ini'
                });
                return false;
            }

            return true;
        }

        // Add new member function
        $('#btnTambah').on('click', function() {
            Swal.fire({
                title: 'Tambah Anggota',
                html: `
                    <input id="nama" class="swal2-input" placeholder="Nama" />
                    <input id="alamat" class="swal2-input" placeholder="Alamat" />
                    <input id="tanggal_lahir" class="swal2-input" type="date" placeholder="Tanggal Lahir" />
                    <input id="kontak" class="swal2-input" placeholder="Kontak" />
                `,
                focusConfirm: false,
                preConfirm: () => {
                    const data = {
                        nama: document.getElementById('nama').value,
                        alamat: document.getElementById('alamat').value,
                        tanggal_lahir: document.getElementById('tanggal_lahir').value,
                        kontak: document.getElementById('kontak').value
                    };

                    if (validateInput(data)) {
                        // AJAX to add new member
                        $.ajax({
                            url: 'tambah_anggota.php',
                            method: 'POST',
                            data: data,
                            success: function(response) {
                                if (response.includes('success')) {
                                    Swal.fire('Berhasil', 'Anggota berhasil ditambahkan!', 'success').then(() => {
                                        location.reload();
                                    });
                                } else {
                                    Swal.fire('Gagal', 'Terjadi kesalahan saat menambahkan anggota.', 'error');
                                }
                            },
                            error: function() {
                                Swal.fire('Error', 'Terjadi kesalahan pada server.', 'error');
                            }
                        });
                    }
                }
            });
        });

        // Edit member function
        function editAnggota(data) {
            Swal.fire({
                title: 'Edit Anggota',
                html: `
                    <input id="nama" class="swal2-input" placeholder="Nama" value="${data.nama_anggota}" />
                    <input id="alamat" class="swal2-input" placeholder="Alamat" value="${data.alamat}" />
                    <input id="tanggal_lahir" class="swal2-input" type="date" value="${data.tanggal_lahir}" />
                    <input id="kontak" class="swal2-input" placeholder="Kontak" value="${data.kontak}" />
                `,
                focusConfirm: false,
                preConfirm: () => {
                    const updatedData = {
                        id: data.id_anggota,
                        nama: document.getElementById('nama').value,
                        alamat: document.getElementById('alamat').value,
                        tanggal_lahir: document.getElementById('tanggal_lahir').value,
                        kontak: document.getElementById('kontak').value
                    };

                    if (validateInput(updatedData)) {
                        $.ajax({
                            url: 'edit_anggota.php',
                            method: 'POST',
                            data: updatedData,
                            success: function(response) {
                                if (response.includes('success')) {
                                    Swal.fire('Berhasil', 'Data anggota berhasil diperbarui!', 'success').then(() => {
                                        location.reload();
                                    });
                                } else {
                                    Swal.fire('Gagal', 'Terjadi kesalahan saat memperbarui data.', 'error');
                                }
                            },
                            error: function() {
                                Swal.fire('Error', 'Terjadi kesalahan pada server.', 'error');
                            }
                        });
                    }
=======
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
>>>>>>> 82848bd1ffe9451ed763850eaf067c4c3acb1b13
                }
            });
        }

<<<<<<< HEAD
        // Delete member function
=======
>>>>>>> 82848bd1ffe9451ed763850eaf067c4c3acb1b13
        function hapusAnggota(id) {
            Swal.fire({
                title: 'Apakah Anda yakin?',
                text: "Data anggota ini akan dihapus!",
                icon: 'warning',
                showCancelButton: true,
<<<<<<< HEAD
                confirmButtonText: 'Ya, Hapus!',
                cancelButtonText: 'Batal'
=======
                confirmButtonColor: '#d33',
                cancelButtonColor: '#3085d6',
                confirmButtonText: 'Ya, hapus!'
>>>>>>> 82848bd1ffe9451ed763850eaf067c4c3acb1b13
            }).then((result) => {
                if (result.isConfirmed) {
                    $.ajax({
                        url: 'hapus_anggota.php',
<<<<<<< HEAD
                        method: 'POST',
                        data: {
                            id: id
                        },
                        success: function(response) {
                            if (response.includes('success')) {
                                Swal.fire('Terhapus!', 'Anggota berhasil dihapus.', 'success').then(() => {
                                    location.reload();
                                });
                            } else {
                                Swal.fire('Gagal', 'Terjadi kesalahan saat menghapus anggota.', 'error');
                            }
                        },
                        error: function() {
                            Swal.fire('Error', 'Terjadi kesalahan pada server.', 'error');
=======
                        type: 'POST',
                        data: { id: id },
                        success: function(response) {
                            Swal.fire('Terhapus!', 'Anggota berhasil dihapus.', 'success');
                            loadAnggota();
>>>>>>> 82848bd1ffe9451ed763850eaf067c4c3acb1b13
                        }
                    });
                }
            });
        }
    </script>
<<<<<<< HEAD

</body>

</html>
=======
</body>
</html>
>>>>>>> 82848bd1ffe9451ed763850eaf067c4c3acb1b13
