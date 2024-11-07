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
            background: linear-gradient(120deg, #fdfbfb 0%, #ebedee 100%);
            min-height: 100vh;
        }
        .table-container {
            box-shadow: 0 8px 16px rgba(0, 0, 0, 0.1);
            border-radius: 15px;
            overflow: hidden;
            background: rgba(255, 255, 255, 0.98);
            backdrop-filter: blur(20px);
        }
        .btn-gradient {
            background: linear-gradient(135deg, #4f46e5 0%, #3730a3 100%);
            transition: all 0.4s ease;
        }
        .btn-gradient:hover {
            transform: translateY(-3px);
            box-shadow: 0 6px 15px rgba(79, 70, 229, 0.4);
        }
        .table-hover tr:hover {
            background-color: rgba(243, 244, 246, 0.9);
            transition: all 0.3s ease;
        }
        .navbar {
            background: rgba(255, 255, 255, 0.98);
            backdrop-filter: blur(20px);
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.05);
        }
        .footer {
            background: rgba(255, 255, 255, 0.98);
            backdrop-filter: blur(20px);
            box-shadow: 0 -4px 6px rgba(0, 0, 0, 0.05);
        }
        .search-input {
            transition: all 0.3s ease;
            border: 2px solid #e5e7eb;
        }
        .search-input:focus {
            border-color: #4f46e5;
            box-shadow: 0 0 0 3px rgba(79, 70, 229, 0.2);
        }
        .table-header {
            background: linear-gradient(135deg, #f3f4f6 0%, #e5e7eb 100%);
        }
        .action-button {
            transition: all 0.3s ease;
        }
        .action-button:hover {
            transform: scale(1.1);
        }
    </style>
</head>
<body>
    <!-- Navbar -->
    <nav class="navbar fixed top-0 left-0 right-0 z-50">
        <div class="container mx-auto px-6 py-4">
            <div class="flex justify-between items-center">
                <div class="flex items-center">
                    <i class="fas fa-book-reader text-3xl text-indigo-600 mr-3"></i>
                    <span class="text-xl font-bold text-gray-800">Perpustakaan Digital</span>
                </div>
                <div class="flex items-center space-x-8">
                    <a href="../index.php" class="hover:text-indigo-600 transition-colors"><i class="fas fa-home mr-2"></i>Home</a>
                    <a href="../buku/index_buku.php" class="hover:text-indigo-600 transition-colors"><i class="fas fa-book mr-2"></i>Buku</a>
                    <a href="../anggota/index_anggota.php" class="text-indigo-600"><i class="fas fa-users mr-2"></i>Anggota</a>
                    <a href="../peminjaman/index_peminjaman.php" class="hover:text-indigo-600 transition-colors"><i class="fas fa-handshake mr-2"></i>Peminjaman</a>
                </div>
            </div>
        </div>
    </nav>

    <div class="container mx-auto p-8 animate__animated animate__fadeIn mt-24">
        <div class="flex justify-between items-center mb-10">
            <h1 class="text-4xl font-bold text-gray-800 tracking-tight" data-aos="fade-right">
                Dashboard Anggota
            </h1>
            <div class="flex gap-6">
                <input type="text" id="searchInput" value="<?php echo htmlspecialchars($search); ?>" placeholder="Cari anggota..." 
                       class="search-input px-6 py-3 rounded-lg text-gray-700 focus:outline-none w-80">
                <button id="btnTambah" class="btn-gradient text-white px-8 py-3 rounded-lg flex items-center gap-3 shadow-lg" data-aos="fade-left">
                    <i class="fas fa-plus"></i>
                    Tambah Anggota
                </button>
            </div>
        </div>

        <div class="table-container" data-aos="fade-up">
            <table class="min-w-full table-hover">
                <thead class="table-header">
                    <tr>
                        <th class="px-8 py-5 text-left text-sm font-semibold text-gray-700">ID</th>
                        <th class="px-8 py-5 text-left text-sm font-semibold text-gray-700">Nama</th>
                        <th class="px-8 py-5 text-left text-sm font-semibold text-gray-700">Alamat</th>
                        <th class="px-8 py-5 text-left text-sm font-semibold text-gray-700">Tanggal Lahir</th>
                        <th class="px-8 py-5 text-left text-sm font-semibold text-gray-700">Kontak</th>
                        <th class="px-8 py-5 text-left text-sm font-semibold text-gray-700">Aksi</th>
                    </tr>
                </thead>
                <tbody id="anggotaTable" class="divide-y divide-gray-200">
                    <?php
                    if ($result && $result->num_rows > 0) {
                        while($row = $result->fetch_assoc()) {
                            echo "<tr class='hover:bg-gray-50 transition-colors'>";
                            echo "<td class='px-8 py-5'>" . htmlspecialchars($row['id_anggota']) . "</td>";
                            echo "<td class='px-8 py-5 font-medium'>" . htmlspecialchars($row['nama_anggota']) . "</td>";
                            echo "<td class='px-8 py-5'>" . htmlspecialchars($row['alamat']) . "</td>";
                            echo "<td class='px-8 py-5'>" . htmlspecialchars($row['tanggal_lahir']) . "</td>";
                            echo "<td class='px-8 py-5'>" . htmlspecialchars($row['kontak']) . "</td>";
                            echo "<td class='px-8 py-5'>
                                    <div class='flex space-x-4'>
                                        <button onclick='editAnggota(" . json_encode($row) . ")' class='text-blue-600 hover:text-blue-800 action-button'>
                                            <i class='fas fa-edit text-lg'></i>
                                        </button>
                                        <button onclick='hapusAnggota(" . $row['id_anggota'] . ")' class='text-red-600 hover:text-red-800 action-button'>
                                            <i class='fas fa-trash text-lg'></i>
                                        </button>
                                    </div>
                                </td>";
                            echo "</tr>";
                        }
                    } else {
                        echo "<tr><td colspan='6' class='px-8 py-5 text-center text-gray-500'>Tidak ada data anggota</td></tr>";
                    }
                    ?>
                </tbody>
            </table>
        </div>
    </div>

    <!-- Footer -->
    <footer class="footer mt-16 py-8">
        <div class="container mx-auto px-6">
            <div class="flex flex-col items-center">
                <div class="flex items-center mb-6">
                    <i class="fas fa-book-reader text-3xl text-indigo-600 mr-3"></i>
                    <span class="text-xl font-bold text-gray-800">Perpustakaan Digital</span>
                </div>
                <p class="text-gray-600 text-sm text-center mb-6">
                    © 2024 Perpustakaan Digital. All rights reserved.
                </p>
                <div class="flex space-x-6">
                    <a href="#" class="text-gray-600 hover:text-indigo-600 transition-colors">
                        <i class="fab fa-facebook text-xl"></i>
                    </a>
                    <a href="#" class="text-gray-600 hover:text-indigo-600 transition-colors">
                        <i class="fab fa-twitter text-xl"></i>
                    </a>
                    <a href="#" class="text-gray-600 hover:text-indigo-600 transition-colors">
                        <i class="fab fa-instagram text-xl"></i>
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
            return true;
        }

        // Add new member function
        $('#btnTambah').on('click', function() {
            Swal.fire({
                title: 'Tambah Anggota',
                html: `
                    <div class="space-y-4">
                        <input id="nama" class="swal2-input" placeholder="Nama Anggota" />
                        <input id="alamat" class="swal2-input" placeholder="Alamat" />
                        <input id="tanggal_lahir" class="swal2-input" type="date" />
                        <input id="kontak" class="swal2-input" placeholder="Kontak" />
                    </div>
                `,
                focusConfirm: false,
                showCancelButton: true,
                confirmButtonText: 'Simpan',
                cancelButtonText: 'Batal',
                preConfirm: () => {
                    const data = {
                        nama: document.getElementById('nama').value,
                        alamat: document.getElementById('alamat').value,
                        tanggal_lahir: document.getElementById('tanggal_lahir').value,
                        kontak: document.getElementById('kontak').value
                    };

                    if (validateInput(data)) {
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
                    <div class="space-y-4">
                        <input id="nama" class="swal2-input" placeholder="Nama Anggota" value="${data.nama_anggota}" />
                        <input id="alamat" class="swal2-input" placeholder="Alamat" value="${data.alamat}" />
                        <input id="tanggal_lahir" class="swal2-input" type="date" value="${data.tanggal_lahir}" />
                        <input id="kontak" class="swal2-input" placeholder="Kontak" value="${data.kontak}" />
                    </div>
                `,
                focusConfirm: false,
                showCancelButton: true,
                confirmButtonText: 'Simpan',
                cancelButtonText: 'Batal',
                preConfirm: () => {
                    const formData = {
                        id: data.id_anggota,
                        nama: document.getElementById('nama').value,
                        alamat: document.getElementById('alamat').value,
                        tanggal_lahir: document.getElementById('tanggal_lahir').value,
                        kontak: document.getElementById('kontak').value
                    };

                    if (validateInput(formData)) {
                        $.ajax({
                            url: 'edit_anggota.php',
                            method: 'POST',
                            data: formData,
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
                }
            });
        }

        // Delete member function
        function hapusAnggota(id) {
            Swal.fire({
                title: 'Apakah Anda yakin?',
                text: "Data anggota ini akan dihapus!",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonText: 'Ya, Hapus!',
                cancelButtonText: 'Batal',
                confirmButtonColor: '#ef4444',
                cancelButtonColor: '#6b7280',
            }).then((result) => {
                if (result.isConfirmed) {
                    $.ajax({
                        url: 'hapus_anggota.php',
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
