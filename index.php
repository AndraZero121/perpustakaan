<!DOCTYPE html>
<html lang="id">
<<<<<<< HEAD

=======
>>>>>>> 82848bd1ffe9451ed763850eaf067c4c3acb1b13
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Perpustakaan Modern - Jelajahi dunia pengetahuan melalui koleksi buku digital dan fisik kami">
    <meta name="keywords" content="perpustakaan, buku, digital library, e-book, peminjaman buku">
    <title>Perpustakaan Modern - Jelajahi Dunia Pengetahuan</title>
<<<<<<< HEAD

    <!-- Favicon -->
    <link rel="icon" type="image/png" href="assets/img/favicon.png">
    A
=======
    
    <!-- Favicon -->
    <link rel="icon" type="image/png" href="assets/img/favicon.png">
    
>>>>>>> 82848bd1ffe9451ed763850eaf067c4c3acb1b13
    <!-- CSS -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
<<<<<<< HEAD

=======
    
>>>>>>> 82848bd1ffe9451ed763850eaf067c4c3acb1b13
    <style>
        :root {
            --primary-color: #1e40af;
            --secondary-color: #3b82f6;
            --accent-color: #60a5fa;
            --text-color: #1f2937;
            --light-bg: #f9fafb;
        }
<<<<<<< HEAD

=======
        
>>>>>>> 82848bd1ffe9451ed763850eaf067c4c3acb1b13
        body {
            font-family: 'Poppins', sans-serif;
            background-color: var(--light-bg);
            color: var(--text-color);
            scroll-behavior: smooth;
        }
<<<<<<< HEAD

        .gradient-bg {
            background: linear-gradient(135deg, var(--primary-color) 0%, var(--secondary-color) 100%);
        }

=======
        
        .gradient-bg {
            background: linear-gradient(135deg, var(--primary-color) 0%, var(--secondary-color) 100%);
        }
        
>>>>>>> 82848bd1ffe9451ed763850eaf067c4c3acb1b13
        .item {
            transition: transform 0.4s cubic-bezier(0.165, 0.84, 0.44, 1);
            backface-visibility: hidden;
        }
<<<<<<< HEAD

=======
        
>>>>>>> 82848bd1ffe9451ed763850eaf067c4c3acb1b13
        .item:hover {
            transform: translateY(-10px) scale(1.05);
            box-shadow: 0 20px 30px -10px rgba(0, 0, 0, 0.3);
        }
<<<<<<< HEAD

=======
        
>>>>>>> 82848bd1ffe9451ed763850eaf067c4c3acb1b13
        .nav-link {
            position: relative;
            transition: all 0.3s ease;
            font-weight: 600;
        }
<<<<<<< HEAD

=======
        
>>>>>>> 82848bd1ffe9451ed763850eaf067c4c3acb1b13
        .nav-link::after {
            content: '';
            position: absolute;
            width: 0;
            height: 2px;
            bottom: -4px;
            left: 0;
            background-color: var(--accent-color);
            transition: width 0.3s ease;
        }
<<<<<<< HEAD

        .nav-link:hover::after {
            width: 100%;
        }

=======
        
        .nav-link:hover::after {
            width: 100%;
        }
        
>>>>>>> 82848bd1ffe9451ed763850eaf067c4c3acb1b13
        .stats-card {
            transition: all 0.4s cubic-bezier(0.165, 0.84, 0.44, 1);
            background: rgba(224, 242, 254, 0.9);
            backdrop-filter: blur(10px);
            border: 1px solid rgba(255, 255, 255, 0.3);
        }
<<<<<<< HEAD

=======
        
>>>>>>> 82848bd1ffe9451ed763850eaf067c4c3acb1b13
        .stats-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 15px 25px -5px rgba(0, 0, 0, 0.2);
            background: rgba(224, 242, 254, 1);
        }
<<<<<<< HEAD

        .animate-float {
            animation: float 6s ease-in-out infinite;
        }

        @keyframes float {
            0% {
                transform: translateY(0px);
            }

            50% {
                transform: translateY(-25px);
            }

            100% {
                transform: translateY(0px);
            }
        }

=======
        
        .animate-float {
            animation: float 6s ease-in-out infinite;
        }
        
        @keyframes float {
            0% { transform: translateY(0px); }
            50% { transform: translateY(-25px); }
            100% { transform: translateY(0px); }
        }
        
>>>>>>> 82848bd1ffe9451ed763850eaf067c4c3acb1b13
        /* Custom Scrollbar */
        ::-webkit-scrollbar {
            width: 12px;
        }
<<<<<<< HEAD

        ::-webkit-scrollbar-track {
            background: #f1f1f1;
        }

=======
        
        ::-webkit-scrollbar-track {
            background: #f1f1f1;
        }
        
>>>>>>> 82848bd1ffe9451ed763850eaf067c4c3acb1b13
        ::-webkit-scrollbar-thumb {
            background: var(--secondary-color);
            border-radius: 6px;
        }
<<<<<<< HEAD

        ::-webkit-scrollbar-thumb:hover {
            background: var(--primary-color);
        }
    </style>
</head>

=======
        
        ::-webkit-scrollbar-thumb:hover {
            background: var(--primary-color);
        }
        
    </style>
</head>
>>>>>>> 82848bd1ffe9451ed763850eaf067c4c3acb1b13
<body>

    <!-- Navbar -->
    <nav class="bg-white shadow-lg fixed w-full z-40 transition-all duration-300">
        <div class="container mx-auto px-6 py-3">
            <div class="flex justify-between items-center">
                <div class="flex items-center space-x-4">
                    <i class="fas fa-book-reader text-blue-600 text-3xl animate-float"></i>
                    <span class="ml-3 text-xl font-bold bg-gradient-to-r from-blue-600 to-blue-400 text-transparent bg-clip-text">
                        Perpustakaan Modern
                    </span>
                </div>
                <div class="hidden md:flex items-center space-x-8">
                    <a href="#" class="nav-link text-gray-600 hover:text-blue-600">Beranda</a>
                    <a href="#koleksi" class="nav-link text-gray-600 hover:text-blue-600">Koleksi</a>
                    <a href="#kategori" class="nav-link text-gray-600 hover:text-blue-600">Kategori</a>
                    <a href="#kontak" class="nav-link text-gray-600 hover:text-blue-600">Kontak</a>
                    <button class="bg-blue-600 text-white px-6 py-2 rounded-full hover:bg-blue-700 transition duration-300 transform hover:scale-105 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-opacity-50">
                        Masuk
                    </button>
                </div>
                <!-- Mobile Menu Button -->
                <button class="md:hidden focus:outline-none" id="menuBtn">
                    <i class="fas fa-bars text-2xl text-gray-600"></i>
                </button>
            </div>
<<<<<<< HEAD

=======
            
>>>>>>> 82848bd1ffe9451ed763850eaf067c4c3acb1b13
            <!-- Mobile Menu -->
            <div class="md:hidden hidden" id="mobileMenu">
                <div class="py-4 space-y-4">
                    <a href="#" class="block text-gray-600 hover:text-blue-600">Beranda</a>
                    <a href="#koleksi" class="block text-gray-600 hover:text-blue-600">Koleksi</a>
                    <a href="#kategori" class="block text-gray-600 hover:text-blue-600">Kategori</a>
                    <a href="#kontak" class="block text-gray-600 hover:text-blue-600">Kontak</a>
                    <button class="w-full bg-blue-600 text-white px-6 py-2 rounded-full hover:bg-blue-700 transition duration-300">
                        Masuk
                    </button>
                </div>
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    <header class="bg-blue-800 pt-20 pb-10 text-white relative overflow-hidden">
        <div class="absolute inset-0 bg-pattern opacity-30"></div>
        <div class="container mx-auto px-6 relative">
            <div class="flex flex-col md:flex-row items-center">
                <div class="md:w-1/2 animate__animated animate__fadeInLeft">
                    <h1 class="text-4xl md:text-5xl font-extrabold leading-tight mb-4 bg-gradient-to-r from-yellow-400 to-red-500 text-transparent bg-clip-text">
                        Jelajahi Pengetahuan
                    </h1>
                    <p class="text-lg mb-6 text-yellow-200">
                        Temukan ribuan buku dari berbagai kategori. Baca dan tingkatkan wawasanmu.
                    </p>
                    <div class="flex space-x-2">
                        <button class="group bg-yellow-500 text-white px-6 py-2 rounded-full hover:bg-yellow-600 transition duration-300 transform hover:scale-105 focus:outline-none focus:ring-2 focus:ring-yellow-300">
                            <span class="flex items-center">
                                Mulai Membaca
                                <i class="fas fa-arrow-right ml-1 transform group-hover:translate-x-1 transition-transform"></i>
                            </span>
                        </button>
                        <button class="group border-2 border-yellow-500 text-white px-6 py-2 rounded-full hover:bg-yellow-500 hover:text-white transition duration-300 transform hover:scale-105 focus:outline-none focus:ring-2 focus:ring-yellow-300">
                            <span class="flex items-center">
                                Pelajari Lebih
                                <i class="fas fa-info-circle ml-1"></i>
                            </span>
                        </button>
                    </div>
                </div>
                <div class="md:w-1/2 mt-6 md:mt-0 animate__animated animate__fadeInRight">
                    <div class="relative">
<<<<<<< HEAD
                        <img src="https://awsimages.detik.net.id/community/media/visual/2024/09/03/1498878143_169.jpeg?w=600&q=90"
                            alt="Ilustrasi Perpustakaan"
                            class="rounded-lg shadow-lg transform hover:scale-105 transition duration-300 hover:shadow-xl"
                            loading="lazy">
=======
                        <img src="https://awsimages.detik.net.id/community/media/visual/2024/09/03/1498878143_169.jpeg?w=600&q=90" 
                             alt="Ilustrasi Perpustakaan" 
                             class="rounded-lg shadow-lg transform hover:scale-105 transition duration-300 hover:shadow-xl"
                             loading="lazy">
>>>>>>> 82848bd1ffe9451ed763850eaf067c4c3acb1b13
                        <div class="absolute -bottom-2 -right-2 bg-yellow-300 p-2 rounded-lg shadow-md animate-float">
                            <div class="flex items-center space-x-1">
                                <i class="fas fa-users text-blue-600"></i>
                                <span class="text-xs font-semibold text-gray-800">5000+ Pembaca</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <!-- Stats Section -->
    <section class="py-20 bg-white relative">
        <div class="container mx-auto px-6">
            <div class="grid grid-cols-1 md:grid-cols-4 gap-6">
                <div class="stats-card p-6 rounded-xl text-center transform hover:scale-105 transition duration-300">
                    <div class="relative">
                        <i class="fas fa-books text-blue-600 text-4xl mb-4"></i>
                        <div class="absolute -top-2 -right-2 bg-blue-100 rounded-full p-2">
                            <i class="fas fa-plus text-blue-600 text-xs"></i>
                        </div>
                    </div>
                    <h3 class="text-4xl font-bold text-blue-600 mb-2">10,000+</h3>
                    <p class="text-gray-600">Koleksi Buku</p>
                </div>
                <div class="stats-card p-6 rounded-xl text-center transform hover:scale-105 transition duration-300">
                    <div class="relative">
                        <i class="fas fa-users text-blue-600 text-4xl mb-4"></i>
                        <div class="absolute -top-2 -right-2 bg-blue-100 rounded-full p-2">
                            <i class="fas fa-chart-line text-blue-600 text-xs"></i>
                        </div>
                    </div>
                    <h3 class="text-4xl font-bold text-blue-600 mb-2">5,000+</h3>
                    <p class="text-gray-600">Anggota Aktif</p>
                </div>
                <div class="stats-card p-6 rounded-xl text-center transform hover:scale-105 transition duration-300">
                    <div class="relative">
                        <i class="fas fa-clock text-blue-600 text-4xl mb-4"></i>
                        <div class="absolute -top-2 -right-2 bg-blue-100 rounded-full p-2">
                            <i class="fas fa-infinity text-blue-600 text-xs"></i>
                        </div>
                    </div>
                    <h3 class="text-4xl font-bold text-blue-600 mb-2">24/7</h3>
                    <p class="text-gray-600">Akses Online</p>
                </div>
                <div class="stats-card p-6 rounded-xl text-center transform hover:scale-105 transition duration-300">
                    <div class="relative">
                        <i class="fas fa-star text-blue-600 text-4xl mb-4"></i>
                        <div class="absolute -top-2 -right-2 bg-blue-100 rounded-full p-2">
                            <i class="fas fa-trophy text-blue-600 text-xs"></i>
                        </div>
                    </div>
                    <h3 class="text-4xl font-bold text-blue-600 mb-2">4.8/5</h3>
                    <p class="text-gray-600">Rating Pengguna</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Search Section -->
    <section class="py-16 bg-gray-50">
        <div class="container mx-auto px-6">
            <div class="max-w-2xl mx-auto">
                <h2 class="text-3xl font-bold text-center mb-8">Cari Buku</h2>
                <div class="relative">
<<<<<<< HEAD
                    <input type="text"
                        id="search"
                        placeholder="Masukkan judul buku, penulis, atau kategori..."
                        class="w-full px-6 py-4 rounded-full shadow-lg focus:outline-none focus:ring-2 focus:ring-blue-400 pl-12"
                        autocomplete="off">
=======
                    <input type="text" 
                           id="search" 
                           placeholder="Masukkan judul buku, penulis, atau kategori..." 
                           class="w-full px-6 py-4 rounded-full shadow-lg focus:outline-none focus:ring-2 focus:ring-blue-400 pl-12"
                           autocomplete="off">
>>>>>>> 82848bd1ffe9451ed763850eaf067c4c3acb1b13
                    <i class="fas fa-search absolute left-4 top-1/2 transform -translate-y-1/2 text-gray-400"></i>
                    <button class="absolute right-4 top-1/2 transform -translate-y-1/2 bg-blue-600 text-white px-6 py-2 rounded-full hover:bg-blue-700 transition duration-300 flex items-center space-x-2">
                        <span>Cari</span>
                        <i class="fas fa-arrow-right"></i>
                    </button>
                </div>
                <!-- Search Suggestions -->
                <div class="mt-4 bg-white rounded-lg shadow-lg p-4 hidden" id="searchSuggestions">
                    <div class="flex items-center justify-between mb-2">
                        <span class="text-sm text-gray-600">Pencarian Populer</span>
                        <button class="text-blue-600 text-sm hover:underline">Lihat Semua</button>
                    </div>
                    <div class="space-y-2">
                        <a href="#" class="block p-2 hover:bg-gray-50 rounded-lg">
                            <div class="flex items-center space-x-3">
                                <i class="fas fa-history text-gray-400"></i>
                                <span>Novel Terbaru 2024</span>
                            </div>
                        </a>
                        <a href="#" class="block p-2 hover:bg-gray-50 rounded-lg">
                            <div class="flex items-center space-x-3">
                                <i class="fas fa-history text-gray-400"></i>
                                <span>Buku Teknologi</span>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Featured Books -->
    <section class="py-16 bg-white" id="koleksi">
        <div class="container mx-auto px-6">
            <div class="flex justify-between items-center mb-12">
                <h2 class="text-3xl font-bold">Buku Populer</h2>
                <button class="text-blue-600 hover:text-blue-700 flex items-center space-x-2">
                    <span>Lihat Semua</span>
                    <i class="fas fa-arrow-right"></i>
                </button>
            </div>
            <div class="owl-carousel owl-theme">
                <div class="item bg-white p-6 rounded-xl shadow-lg group">
                    <div class="relative overflow-hidden rounded-lg mb-4">
                        <img src="/api/placeholder/200/300" alt="Book 1" class="w-full h-48 object-cover transform group-hover:scale-110 transition duration-500">
                        <div class="absolute top-2 right-2 bg-blue-600 text-white px-2 py-1 rounded-full text-sm">
                            Terlaris
                        </div>
                    </div>
                    <h4 class="font-semibold text-lg mb-2">The Great Gatsby</h4>
                    <p class="text-gray-600 mb-4">F. Scott Fitzgerald</p>
                    <div class="flex justify-between items-center">
                        <div class="flex text-yellow-400">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star-half-alt"></i>
                            <span class="ml-2 text-gray-600">4.5</span>
                        </div>
                        <button class="bg-blue-600 text-white px-4 py-2 rounded-lg hover:bg-blue-700 transition duration-300 transform hover:scale-105 flex items-center space-x-2">
                            <i class="fas fa-book-reader"></i>
                            <span>Pinjam</span>
                        </button>
                    </div>
                </div>
                <div class="item bg-white p-6 rounded-xl shadow-lg group">
                    <div class="relative overflow-hidden rounded-lg mb-4">
                        <img src="/api/placeholder/200/300" alt="Book 2" class="w-full h-48 object-cover transform group-hover:scale-110 transition duration-500">
                        <div class="absolute top-2 right-2 bg-green-600 text-white px-2 py-1 rounded-full text-sm">
                            Baru
                        </div>
                    </div>
                    <h4 class="font-semibold text-lg mb-2">1984</h4>
                    <p class="text-gray-600 mb-4">George Orwell</p>
                    <div class="flex justify-between items-center">
                        <div class="flex text-yellow-400">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <span class="ml-2 text-gray-600">5.0</span>
                        </div>
                        <button class="bg-blue-600 text-white px-4 py-2 rounded-lg hover:bg-blue-700 transition duration-300 transform hover:scale-105 flex items-center space-x-2">
                            <i class="fas fa-book-reader"></i>
                            <span>Pinjam</span>
                        </button>
                    </div>
                </div>
                <div class="item bg-white p-6 rounded-xl shadow-lg group">
                    <div class="relative overflow-hidden rounded-lg mb-4">
                        <img src="/api/placeholder/200/300" alt="Book 3" class="w-full h-48 object-cover transform group-hover:scale-110 transition duration-500">
                        <div class="absolute top-2 right-2 bg-yellow-600 text-white px-2 py-1 rounded-full text-sm">
                            Populer
                        </div>
                    </div>
                    <h4 class="font-semibold text-lg mb-2">Pride and Prejudice</h4>
                    <p class="text-gray-600 mb-4">Jane Austen</p>
                    <div class="flex justify-between items-center">
                        <div class="flex text-yellow-400">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="far fa-star"></i>
                            <span class="ml-2 text-gray-600">4.0</span>
                        </div>
                        <button class="bg-blue-600 text-white px-4 py-2 rounded-lg hover:bg-blue-700 transition duration-300 transform hover:scale-105 flex items-center space-x-2">
                            <i class="fas fa-book-reader"></i>
                            <span>Pinjam</span>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Categories -->
    <section class="py-16 bg-gray-50" id="kategori">
        <div class="container mx-auto px-6">
            <h2 class="text-3xl font-bold mb-12 text-center">Kategori Buku</h2>
            <div class="grid grid-cols-1 md:grid-cols-3 lg:grid-cols-4 gap-6">
                <div class="bg-white p-6 rounded-xl shadow-lg hover:shadow-xl transition duration-300 transform hover:scale-105">
                    <div class="flex items-center justify-between mb-4">
                        <i class="fas fa-history text-blue-600 text-3xl"></i>
                        <span class="bg-blue-100 text-blue-600 px-3 py-1 rounded-full text-sm">124 Buku</span>
                    </div>
                    <h3 class="text-xl font-semibold mb-2">Sejarah</h3>
                    <p class="text-gray-600 mb-4">Jelajahi masa lalu melalui koleksi buku sejarah kami.</p>
                    <a href="#" class="text-blue-600 hover:text-blue-700 flex items-center space-x-2 group">
                        <span>Lihat Koleksi</span>
                        <i class="fas fa-arrow-right transform group-hover:translate-x-2 transition-transform"></i>
                    </a>
                </div>
                <div class="bg-white p-6 rounded-xl shadow-lg hover:shadow-xl transition duration-300 transform hover:scale-105">
                    <div class="flex items-center justify-between mb-4">
                        <i class="fas fa-flask text-blue-600 text-3xl"></i>
                        <span class="bg-blue-100 text-blue-600 px-3 py-1 rounded-full text-sm">98 Buku</span>
                    </div>
                    <h3 class="text-xl font-semibold mb-2">Sains</h3>
                    <p class="text-gray-600 mb-4">Temukan keajaiban sains dan teknologi.</p>
                    <a href="#" class="text-blue-600 hover:text-blue-700 flex items-center space-x-2 group">
                        <span>Lihat Koleksi</span>
                        <i class="fas fa-arrow-right transform group-hover:translate-x-2 transition-transform"></i>
                    </a>
                </div>
                <div class="bg-white p-6 rounded-xl shadow-lg hover:shadow-xl transition duration-300 transform hover:scale-105">
                    <div class="flex items-center justify-between mb-4">
                        <i class="fas fa-heart text-blue-600 text-3xl"></i>
                        <span class="bg-blue-100 text-blue-600 px-3 py-1 rounded-full text-sm">156 Buku</span>
                    </div>
                    <h3 class="text-xl font-semibold mb-2">Romansa</h3>
                    <p class="text-gray-600 mb-4">Nikmati kisah cinta yang menarik hati.</p>
                    <a href="#" class="text-blue-600 hover:text-blue-700 flex items-center space-x-2 group">
                        <span>Lihat Koleksi</span>
                        <i class="fas fa-arrow-right transform group-hover:translate-x-2 transition-transform"></i>
                    </a>
                </div>
                <div class="bg-white p-6 rounded-xl shadow-lg hover:shadow-xl transition duration-300 transform hover:scale-105">
                    <div class="flex items-center justify-between mb-4">
                        <i class="fas fa-laptop-code text-blue-600 text-3xl"></i>
                        <span class="bg-blue-100 text-blue-600 px-3 py-1 rounded-full text-sm">87 Buku</span>
                    </div>
                    <h3 class="text-xl font-semibold mb-2">Teknologi</h3>
                    <p class="text-gray-600 mb-4">Pelajari perkembangan teknologi terkini.</p>
                    <a href="#" class="text-blue-600 hover:text-blue-700 flex items-center space-x-2 group">
                        <span>Lihat Koleksi</span>
                        <i class="fas fa-arrow-right transform group-hover:translate-x-2 transition-transform"></i>
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="bg-gradient-to-br from-gray-900 to-gray-800 text-white py-16" id="kontak">
        <div class="container mx-auto px-6">
            <div class="grid grid-cols-1 md:grid-cols-4 gap-12">
                <div class="transform hover:scale-105 transition duration-300">
                    <div class="flex items-center mb-6">
                        <i class="fas fa-book-reader text-blue-400 text-4xl animate-pulse"></i>
                        <span class="ml-3 text-2xl font-bold bg-gradient-to-r from-blue-400 to-blue-600 bg-clip-text text-transparent">Perpustakaan Modern</span>
                    </div>
                    <p class="text-gray-300 leading-relaxed">Perpustakaan Modern adalah tempat di mana pengetahuan dan teknologi bertemu untuk memberikan pengalaman membaca yang tak terlupakan. Mari bergabung dalam perjalanan literasi bersama kami.</p>
                    <div class="mt-8">
                        <button class="bg-gradient-to-r from-blue-600 to-blue-400 text-white px-8 py-3 rounded-full hover:shadow-lg transform hover:-translate-y-1 transition duration-300 flex items-center space-x-2">
                            <span>Gabung Sekarang</span>
                            <i class="fas fa-arrow-right"></i>
                        </button>
                    </div>
                </div>
<<<<<<< HEAD

=======
                
>>>>>>> 82848bd1ffe9451ed763850eaf067c4c3acb1b13
                <div class="transform hover:scale-105 transition duration-300">
                    <h3 class="text-xl font-bold mb-6 flex items-center">
                        <i class="fas fa-clock text-blue-400 mr-3"></i>
                        Jam Operasional
                    </h3>
                    <ul class="text-gray-300 space-y-4">
                        <li class="flex items-center space-x-3 bg-gray-800 bg-opacity-50 p-3 rounded-lg">
                            <i class="fas fa-check-circle text-green-400"></i>
                            <span>Senin - Jumat: 08:00 - 20:00</span>
                        </li>
                        <li class="flex items-center space-x-3 bg-gray-800 bg-opacity-50 p-3 rounded-lg">
                            <i class="fas fa-check-circle text-green-400"></i>
                            <span>Sabtu: 09:00 - 17:00</span>
                        </li>
                        <li class="flex items-center space-x-3 bg-gray-800 bg-opacity-50 p-3 rounded-lg">
                            <i class="fas fa-check-circle text-green-400"></i>
                            <span>Minggu: 10:00 - 15:00</span>
                        </li>
                    </ul>
                </div>

                <div class="transform hover:scale-105 transition duration-300">
                    <h3 class="text-xl font-bold mb-6 flex items-center">
                        <i class="fas fa-hands-helping text-blue-400 mr-3"></i>
                        Layanan Kami
                    </h3>
                    <ul class="text-gray-300 space-y-3">
                        <li class="hover:bg-gray-800 p-2 rounded-lg transition">
                            <a href="#" class="flex items-center space-x-2 group">
                                <i class="fas fa-book text-blue-400"></i>
                                <span class="group-hover:text-blue-400 transition">Peminjaman Buku</span>
                            </a>
                        </li>
                        <li class="hover:bg-gray-800 p-2 rounded-lg transition">
                            <a href="#" class="flex items-center space-x-2 group">
                                <i class="fas fa-tablet-alt text-blue-400"></i>
                                <span class="group-hover:text-blue-400 transition">E-Book</span>
                            </a>
                        </li>
                        <li class="hover:bg-gray-800 p-2 rounded-lg transition">
                            <a href="#" class="flex items-center space-x-2 group">
                                <i class="fas fa-users text-blue-400"></i>
                                <span class="group-hover:text-blue-400 transition">Ruang Diskusi</span>
                            </a>
                        </li>
                        <li class="hover:bg-gray-800 p-2 rounded-lg transition">
                            <a href="#" class="flex items-center space-x-2 group">
                                <i class="fas fa-id-card text-blue-400"></i>
                                <span class="group-hover:text-blue-400 transition">Keanggotaan</span>
                            </a>
                        </li>
                    </ul>
                </div>

                <div class="transform hover:scale-105 transition duration-300">
                    <h3 class="text-xl font-bold mb-6 flex items-center">
                        <i class="fas fa-paper-plane text-blue-400 mr-3"></i>
                        Hubungi Kami
                    </h3>
                    <ul class="text-gray-300 space-y-4">
                        <li class="flex items-center space-x-3 bg-gray-800 bg-opacity-50 p-3 rounded-lg">
                            <i class="fas fa-map-marker-alt text-blue-400"></i>
                            <span>Jl. Perpustakaan No. 123, Jakarta</span>
                        </li>
                        <li class="flex items-center space-x-3 bg-gray-800 bg-opacity-50 p-3 rounded-lg">
                            <i class="fas fa-phone text-blue-400"></i>
                            <span>(021) 1234-5678</span>
                        </li>
                        <li class="flex items-center space-x-3 bg-gray-800 bg-opacity-50 p-3 rounded-lg">
                            <i class="fas fa-envelope text-blue-400"></i>
                            <span>info@perpustakaanmodern.com</span>
                        </li>
                    </ul>
                    <div class="flex space-x-4 mt-8">
                        <a href="#" class="bg-gray-800 p-3 rounded-full hover:bg-blue-600 transition duration-300">
                            <i class="fab fa-facebook-f text-xl"></i>
                        </a>
                        <a href="#" class="bg-gray-800 p-3 rounded-full hover:bg-blue-600 transition duration-300">
                            <i class="fab fa-twitter text-xl"></i>
                        </a>
                        <a href="#" class="bg-gray-800 p-3 rounded-full hover:bg-blue-600 transition duration-300">
                            <i class="fab fa-instagram text-xl"></i>
                        </a>
                        <a href="#" class="bg-gray-800 p-3 rounded-full hover:bg-blue-600 transition duration-300">
                            <i class="fab fa-youtube text-xl"></i>
                        </a>
                    </div>
                </div>
            </div>

            <div class="border-t border-gray-700 mt-12 pt-8">
                <div class="flex flex-col md:flex-row justify-between items-center">
                    <p class="text-gray-400 hover:text-gray-300 transition">&copy; 2024 Perpustakaan Modern. Hak Cipta Dilindungi.</p>
                    <div class="flex flex-wrap justify-center space-x-6 mt-4 md:mt-0">
                        <a href="#" class="text-gray-400 hover:text-blue-400 transition duration-300">Kebijakan Privasi</a>
                        <a href="#" class="text-gray-400 hover:text-blue-400 transition duration-300">Syarat & Ketentuan</a>
                        <a href="#" class="text-gray-400 hover:text-blue-400 transition duration-300">FAQ</a>
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <!-- Back to Top Button -->
    <button id="backToTop" class="fixed bottom-8 right-8 bg-gradient-to-r from-blue-600 to-blue-400 text-white p-4 rounded-full shadow-lg hidden hover:shadow-xl transform hover:-translate-y-1 transition duration-300">
        <i class="fas fa-arrow-up animate-bounce"></i>
    </button>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
    <script>
<<<<<<< HEAD
        $(document).ready(function() {
=======
        $(document).ready(function(){
>>>>>>> 82848bd1ffe9451ed763850eaf067c4c3acb1b13
            // Owl Carousel initialization with improved settings
            $(".owl-carousel").owlCarousel({
                items: 3,
                loop: true,
                margin: 20,
                autoplay: true,
                autoplayTimeout: 3000,
                autoplayHoverPause: true,
                smartSpeed: 1000,
                animateOut: 'fadeOut',
                animateIn: 'fadeIn',
                responsive: {
                    0: {
                        items: 1
                    },
                    768: {
                        items: 2
                    },
                    1024: {
                        items: 3
                    }
                }
            });

            // Enhanced search functionality with debounce
            let searchTimeout;
            $('#search').on('input', function() {
                clearTimeout(searchTimeout);
                searchTimeout = setTimeout(() => {
                    var value = $(this).val().toLowerCase();
                    $('.owl-carousel .item').each(function() {
                        $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1);
                    });
                }, 300);
            });

            // Improved back to top button with smooth animation
            $(window).scroll(function() {
                if ($(this).scrollTop() > 200) {
                    $('#backToTop').fadeIn(300);
                } else {
                    $('#backToTop').fadeOut(300);
                }
            });

            $('#backToTop').click(function() {
<<<<<<< HEAD
                $('html, body').animate({
                    scrollTop: 0
                }, 800, 'easeInOutQuart');
=======
                $('html, body').animate({scrollTop: 0}, 800, 'easeInOutQuart');
>>>>>>> 82848bd1ffe9451ed763850eaf067c4c3acb1b13
                return false;
            });

            // Enhanced smooth scroll for navigation
            $('a[href^="#"]').on('click', function(e) {
                e.preventDefault();
                var target = $(this.hash);
                if (target.length) {
                    $('html, body').animate({
                        scrollTop: target.offset().top - 80
                    }, 800, 'easeInOutQuart');
                }
            });
        });
    </script>
<<<<<<< HEAD

=======
>>>>>>> 82848bd1ffe9451ed763850eaf067c4c3acb1b13
</html>