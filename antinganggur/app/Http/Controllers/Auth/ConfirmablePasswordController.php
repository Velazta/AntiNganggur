<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lowongan Pekerjaan - AntiNganggur</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700;800&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Poppins', sans-serif;
            background-color: #FFF7F5;
            color: #374151;
        }
    </style>
</head>

<body class="antialiased">
    <!-- ===== Header Mulai ===== -->
    <header class="bg-white shadow-sm sticky top-0 z-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex items-center justify-between h-16 md:h-20">
                <div class="flex-shrink-0">
                    <a href="index.html" class="flex items-center">
                        <img class="h-8 sm:h-9 w-auto" src="../../assets/Vector.png" alt="AntiNganggur Logo">
                        <div class="ml-2">
                            <span class="font-bold text-lg sm:text-xl text-slate-800">Anti</span><span
                                class="font-bold text-lg sm:text-xl text-[#FF7144]">Nganggur</span>
                        </div>
                    </a>
                </div>
                <nav class="hidden md:flex items-center space-x-2 lg:space-x-4">
                    <a href="index.html" class="text-slate-700 hover:text-[#FF7144] px-3 py-2 rounded-md text-[15px] font-medium transition-colors duration-150">Home</a>
                    <a href="lowongan.html" class="text-[#FF7144] px-3 py-2 rounded-md text-[15px] font-medium transition-colors duration-150">Lowongan</a>
                    <a href="aboutus.html" class="text-slate-700 hover:text-[#FF7144] px-3 py-2 rounded-md text-[15px] font-medium transition-colors duration-150">Tentang</a>
                    <a href="contact.html" class="text-slate-700 hover:text-[#FF7144] px-3 py-2 rounded-md text-[15px] font-medium transition-colors duration-150">Kontak</a>
                </nav>
                <div class="hidden md:flex items-center space-x-3">
                    <a href="signup.html" class="inline-flex items-center justify-center px-4 py-2 text-[15px] font-semibold rounded-lg text-white bg-[#FF7144] hover:bg-orange-600 transition-colors duration-200 ease-in-out shadow-sm">
                        Daftar
                    </a>
                    <a href="login.html" class="inline-flex items-center justify-center px-4 py-2 border-2 border-[#FF7144] text-[15px] font-semibold rounded-lg text-[#FF7144] bg-white hover:bg-[#FF7144] hover:text-white transition-colors duration-200 ease-in-out shadow-sm">
                        Masuk
                    </a>
                </div>
                <!-- Tombol Mobile Menu -->
                <div class="md:hidden flex items-center">
                    <button id="mobile-menu-button" type="button" class="inline-flex items-center justify-center p-2 rounded-md text-slate-600 hover:text-[#FF7144] hover:bg-orange-50 focus:outline-none focus:ring-2 focus:ring-inset focus:ring-[#FF7144]" aria-controls="mobile-menu" aria-expanded="false">
                        <span class="sr-only">Buka menu utama</span>
                        <svg id="menu-icon-open" class="block h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
                        </svg>
                        <svg id="menu-icon-close" class="hidden h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                        </svg>
                    </button>
                </div>
            </div>
        </div>
        <!-- Mobile Menu Dropdown -->
        <div class="md:hidden hidden" id="mobile-menu">
            <div class="px-2 pt-2 pb-3 space-y-1 sm:px-3">
                <a href="index.html" class="text-slate-700 hover:bg-orange-50 hover:text-[#FF7144] block px-3 py-2 rounded-md text-base font-medium">Home</a>
                <a href="lowongan.html" class="text-[#FF7144] bg-orange-50 block px-3 py-2 rounded-md text-base font-medium">Lowongan</a>
                <a href="aboutus.html" class="text-slate-700 hover:bg-orange-50 hover:text-[#FF7144] block px-3 py-2 rounded-md text-base font-medium">Tentang</a>
                <a href="contact.html" class="text-slate-700 hover:bg-orange-50 hover:text-[#FF7144] block px-3 py-2 rounded-md text-base font-medium">Kontak</a>
            </div>
            <div class="pt-4 pb-3 border-t border-gray-200">
                <div class="px-5 space-y-2">
                    <a href="signup.html" class="block w-full text-center px-5 py-2.5 text-base font-semibold rounded-lg text-white bg-[#FF7144] hover:bg-orange-600 transition-colors duration-200 ease-in-out">
                        Daftar
                    </a>
                    <a href="login.html" class="block w-full text-center px-5 py-2.5 border-2 border-[#FF7144] text-base font-semibold rounded-lg text-[#FF7144] bg-white hover:bg-[#FF7144] hover:text-white transition-colors duration-200 ease-in-out">
                        Masuk
                    </a>
                </div>
            </div>
        </div>
    </header>
    <!-- ===== Header Selesai ===== -->

    <main>
        <!-- ===== Hero Section Mulai ===== -->
        <section class="bg-[#FF7144] py-16 md:py-20 lg:py-24 relative overflow-hidden">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative">
                <!-- Left Person Image -->
                <div class="absolute left-4 bottom-0 hidden lg:block">
                    <img src="../../assets/orang2.png" alt="Professional Person 1" class="h-64 lg:h-80 object-contain">
                </div>

                <!-- Right Person Image -->
                <div class="absolute right-4 bottom-0 hidden lg:block">
                    <img src="../../assets/orang1.png" alt="Professional Person 2" class="h-64 lg:h-80 object-contain">
                </div>

                <!-- Center Content -->
                <div class="text-center">
                    <h1 class="text-3xl sm:text-4xl md:text-5xl lg:text-6xl font-bold text-white mb-8 leading-tight max-w-4xl mx-auto">
                        Daftarkan Pekerjaan Impian<br>
                        Anda Di AntiNganggur
                    </h1>

                    <!-- Search Form -->
                    <div class="bg-white rounded-lg p-4 shadow-lg max-w-3xl mx-auto">
                        <div class="flex flex-col sm:flex-row gap-3">
                            <div class="flex-1">
                                <input type="text" placeholder="Posisi Pekerjaan" class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-[#FF7144] focus:border-transparent text-gray-700 placeholder-gray-500">
                            </div>
                            <div class="flex-1">
                                <select class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-[#FF7144] focus:border-transparent bg-white text-gray-700">
                                    <option>Semua Lokasi</option>
                                    <option>Jakarta</option>
                                    <option>Surabaya</option>
                                    <option>Bandung</option>
                                    <option>Medan</option>
                                    <option>Semarang</option>
                                    <option>Makassar</option>
                                    <option>Palembang</option>
                                    <option>Tangerang</option>
                                    <option>Depok</option>
                                    <option>Bekasi</option>
                                    <option>Surakarta</option>
                                </select>
                            </div>
                            <button class="bg-[#FF7144] text-white px-8 py-3 rounded-lg font-semibold hover:bg-orange-600 transition-colors duration-200 whitespace-nowrap">
                                Cari
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- ===== Hero Section Selesai ===== -->

        <!-- ===== Trending Jobs Section Mulai ===== -->
        <section class="py-16 md:py-20 lg:py-24 bg-gradient-to-b from-[#FFB5A3] to-[#FFF7F5]">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="lg:grid lg:grid-cols-12 lg:gap-x-12 xl:gap-x-16 lg:items-start">
                    <!-- Left Content -->
                    <div class="lg:col-span-4 mb-12 lg:mb-0">
                        <h2 class="text-3xl sm:text-4xl font-bold text-slate-800 mb-6 leading-tight">
                            Lowongan Kerja<br>
                            Yang Sedang<br>
                            Trending
                        </h2>
                        <p class="text-slate-600 leading-relaxed text-lg">
                            Temukan Lowongan Pekerjaan Terbaru Yang Sedang Diminati Oleh Para Pencari Kerja
                        </p>
                    </div>

                    <!-- Right Content - Job Cards -->
                    <div class="lg:col-span-8">
                        <div class="grid gap-6 md:grid-cols-2 lg:grid-cols-3">
                            <!-- Trending Job Card 1 -->
                            <div class="bg-white rounded-xl shadow-lg p-6 hover:shadow-xl transition-shadow duration-300">
                                <div class="flex items-center mb-4">
                                    <div class="w-12 h-12 bg-orange-100 rounded-lg flex items-center justify-center">
                                        <svg class="w-6 h-6 text-[#FF7144]" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M17.25 6.75L22.5 12l-5.25 5.25m-10.5 0L1.5 12l5.25-5.25m7.5-3l-4.5 16.5" />
                                        </svg>
                                    </div>
                                </div>
                                <h3 class="text-lg font-semibold text-slate-900 mb-2">Frontend Developer</h3>
                                <p class="text-sm text-slate-500 mb-3">Anti Nganggur</p>
                                <p class="text-xs text-slate-600 mb-4">Membutuhkan Frontend Developer Berpengalaman React Js Untuk Membangun Antarmuka Web Yang Responsif, Menarik, Dan Mudah Digunakan.</p>
                                <div class="space-y-2 text-xs text-slate-500 mb-4">
                                    <div class="flex items-center">
                                        <span class="w-2 h-2 bg-[#FF7144] rounded-full mr-2"></span>
                                        <span>Surakarta</span>
                                    </div>
                                    <div class="flex items-center">
                                        <span class="w-2 h-2 bg-[#FF7144] rounded-full mr-2"></span>
                                        <span>Rp10-15jt/Bulan</span>
                                    </div>
                                    <div class="flex items-center">
                                        <span class="w-2 h-2 bg-[#FF7144] rounded-full mr-2"></span>
                                        <span>Work From Office</span>
                                    </div>
                                    <div class="flex items-center">
                                        <span class="w-2 h-2 bg-[#FF7144] rounded-full mr-2"></span>
                                        <span>Full-Time</span>
                                    </div>
                                </div>
                                <button class="w-full bg-[#FF7144] text-white py-2 rounded-lg font-semibold hover:bg-orange-600 transition-colors duration-200">
                                    Lamar
                                </button>
                            </div>

                            <!-- Trending Job Card 2 -->
                            <div class="bg-white rounded-xl shadow-lg p-6 hover:shadow-xl transition-shadow duration-300">
                                <div class="flex items-center mb-4">
                                    <div class="w-12 h-12 bg-orange-100 rounded-lg flex items-center justify-center">
                                        <svg class="w-6 h-6 text-[#FF7144]" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M17.25 6.75L22.5 12l-5.25 5.25m-10.5 0L1.5 12l5.25-5.25m7.5-3l-4.5 16.5" />
                                        </svg>
                                    </div>
                                </div>
                                <h3 class="text-lg font-semibold text-slate-900 mb-2">Frontend Developer</h3>
                                <p class="text-sm text-slate-500 mb-3">Anti Nganggur</p>
                                <p class="text-xs text-slate-600 mb-4">Membutuhkan Frontend Developer Berpengalaman React Js Untuk Membangun Antarmuka Web Yang Responsif, Menarik, Dan Mudah Digunakan.</p>
                                <div class="space-y-2 text-xs text-slate-500 mb-4">
                                    <div class="flex items-center">
                                        <span class="w-2 h-2 bg-[#FF7144] rounded-full mr-2"></span>
                                        <span>Surakarta</span>
                                    </div>
                                    <div class="flex items-center">
                                        <span class="w-2 h-2 bg-[#FF7144] rounded-full mr-2"></span>
                                        <span>Rp10-15jt/Bulan</span>
                                    </div>
                                    <div class="flex items-center">
                                        <span class="w-2 h-2 bg-[#FF7144] rounded-full mr-2"></span>
                                        <span>Work From Office</span>
                                    </div>
                                    <div class="flex items-center">
                                        <span class="w-2 h-2 bg-[#FF7144] rounded-full mr-2"></span>
                                        <span>Full-Time</span>
                                    </div>
                                </div>
                                <button class="w-full bg-[#FF7144] text-white py-2 rounded-lg font-semibold hover:bg-orange-600 transition-colors duration-200">
                                    Lamar
                                </button>
                            </div>

                            <!-- Trending Job Card 3 -->
                            <div class="bg-white rounded-xl shadow-lg p-6 hover:shadow-xl transition-shadow duration-300">
                                <div class="flex items-center mb-4">
                                    <div class="w-12 h-12 bg-orange-100 rounded-lg flex items-center justify-center">
                                        <svg class="w-6 h-6 text-[#FF7144]" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M17.25 6.75L22.5 12l-5.25 5.25m-10.5 0L1.5 12l5.25-5.25m7.5-3l-4.5 16.5" />
                                        </svg>
                                    </div>
                                </div>
                                <h3 class="text-lg font-semibold text-slate-900 mb-2">Frontend Developer</h3>
                                <p class="text-sm text-slate-500 mb-3">Anti Nganggur</p>
                                <p class="text-xs text-slate-600 mb-4">Membutuhkan Frontend Developer Berpengalaman React Js Untuk Membangun Antarmuka Web Yang Responsif, Menarik, Dan Mudah Digunakan.</p>
                                <div class="space-y-2 text-xs text-slate-500 mb-4">
                                    <div class="flex items-center">
                                        <span class="w-2 h-2 bg-[#FF7144] rounded-full mr-2"></span>
                                        <span>Surakarta</span>
                                    </div>
                                    <div class="flex items-center">
                                        <span class="w-2 h-2 bg-[#FF7144] rounded-full mr-2"></span>
                                        <span>Rp10-15jt/Bulan</span>
                                    </div>
                                    <div class="flex items-center">
                                        <span class="w-2 h-2 bg-[#FF7144] rounded-full mr-2"></span>
                                        <span>Work From Office</span>
                                    </div>
                                    <div class="flex items-center">
                                        <span class="w-2 h-2 bg-[#FF7144] rounded-full mr-2"></span>
                                        <span>Full-Time</span>
                                    </div>
                                </div>
                                <button class="w-full bg-[#FF7144] text-white py-2 rounded-lg font-semibold hover:bg-orange-600 transition-colors duration-200">
                                    Lamar
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- ===== Trending Jobs Section Selesai ===== -->

        <!-- ===== Latest Jobs Section Mulai ===== -->
        <section class="py-16 md:py-20 lg:py-24 bg-[#FFF7F5]">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="text-center mb-12 md:mb-16">
                    <h2 class="text-3xl font-extrabold text-slate-800 sm:text-4xl mb-4">
                        Lowongan Terbaru
                    </h2>
                </div>

                <div class="grid gap-8 md:grid-cols-2 lg:grid-cols-3">
                    <!-- Job Card 1 - Frontend Developer -->
                    <div class="bg-white rounded-xl shadow-lg overflow-hidden hover:shadow-xl transition-shadow duration-300">
                        <div class="p-6">
                            <div class="flex items-start mb-4">
                                <div class="w-12 h-12 bg-orange-100 rounded-lg flex items-center justify-center mr-4">
                                    <svg class="w-6 h-6 text-[#FF7144]" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M17.25 6.75L22.5 12l-5.25 5.25m-10.5 0L1.5 12l5.25-5.25m7.5-3l-4.5 16.5" />
                                    </svg>
                                </div>
                                <div>
                                    <h3 class="text-lg font-semibold text-slate-900">Frontend Developer</h3>
                                    <p class="text-sm text-slate-500">Anti Nganggur</p>
                                </div>
                            </div>

                            <div class="flex flex-wrap gap-2 mb-4">
                                <span class="inline-flex items-center px-2 py-1 rounded-full text-xs font-medium bg-orange-100 text-orange-700">
                                    <svg class="w-3 h-3 mr-1" fill="currentColor" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd" d="M5.05 4.05a7 7 0 119.9 9.9L10 18.9l-4.95-4.95a7 7 0 010-9.9zM10 11a2 2 0 100-4 2 2 0 000 4z" clip-rule="evenodd" />
                                    </svg>
                                    Surakarta
                                </span>
                                <span class="inline-flex items-center px-2 py-1 rounded-full text-xs font-medium bg-orange-100 text-orange-700">
                                    <svg class="w-3 h-3 mr-1" fill="currentColor" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm1-12a1 1 0 10-2 0v4a1 1 0 00.293.707l2.828 2.829a1 1 0 101.415-1.415L11 9.586V6z" clip-rule="evenodd" />
                                    </svg>
                                    Full-Time
                                </span>
                                <span class="inline-flex items-center px-2 py-1 rounded-full text-xs font-medium bg-orange-100 text-orange-700">
                                    Work From Office
                                </span>
                            </div>

                            <p class="text-sm text-slate-600 mb-4 leading-relaxed">
                                Membutuhkan Frontend Developer Berpengalaman React Js Untuk Membangun Antarmuka Web Yang Responsif, Menarik, Dan Mudah Digunakan. Kandidat Harus Memahami Integrasi API, Version Control, Dan Prinsip Desain UI Yang Baik.
                            </p>
                        </div>

                        <div class="px-6 py-4 bg-gray-50 border-t border-gray-200 flex space-x-3">
                            <button class="flex-1 px-4 py-2 border-2 border-[#FF7144] text-sm font-semibold rounded-lg text-[#FF7144] bg-white hover:bg-orange-50 transition-colors duration-150">
                                Lihat Detail
                            </button>
                            <button class="flex-1 px-4 py-2 text-sm font-semibold rounded-lg text-white bg-[#FF7144] hover:bg-orange-600 transition-colors duration-150">
                                Lamar
                            </button>
                        </div>
                    </div>

                    <!-- Job Card 2 - Data Scientist -->
                    <div class="bg-white rounded-xl shadow-lg overflow-hidden hover:shadow-xl transition-shadow duration-300">
                        <div class="p-6">
                            <div class="flex items-start mb-4">
                                <div class="w-12 h-12 bg-orange-100 rounded-lg flex items-center justify-center mr-4">
                                    <svg class="w-6 h-6 text-[#FF7144]" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M20.25 6.375c0 2.278-3.694 4.125-8.25 4.125S3.75 8.653 3.75 6.375m16.5 0c0-2.278-3.694-4.125-8.25-4.125S3.75 4.097 3.75 6.375m16.5 0v11.25c0 2.278-3.694 4.125-8.25 4.125s-8.25-1.847-8.25-4.125V6.375m16.5 0v3.75m-16.5-3.75v3.75m16.5 0v3.75C20.25 16.153 16.556 18 12 18s-8.25-1.847-8.25-4.125v-3.75m16.5 0c0 2.278-3.694 4.125-8.25 4.125s-8.25-1.847-8.25-4.125" />
                                    </svg>
                                </div>
                                <div>
                                    <h3 class="text-lg font-semibold text-slate-900">Data Scientist</h3>
                                    <p class="text-sm text-slate-500">Anti Nganggur</p>
                                </div>
                            </div>

                            <div class="flex flex-wrap gap-2 mb-4">
                                <span class="inline-flex items-center px-2 py-1 rounded-full text-xs font-medium bg-orange-100 text-orange-700">
                                    <svg class="w-3 h-3 mr-1" fill="currentColor" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd" d="M5.05 4.05a7 7 0 119.9 9.9L10 18.9l-4.95-4.95a7 7 0 010-9.9zM10 11a2 2 0 100-4 2 2 0 000 4z" clip-rule="evenodd" />
                                    </svg>
                                    Surakarta
                                </span>
                                <span class="inline-flex items-center px-2 py-1 rounded-full text-xs font-medium bg-orange-100 text-orange-700">
                                    <svg class="w-3 h-3 mr-1" fill="currentColor" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm1-12a1 1 0 10-2 0v4a1 1 0 00.293.707l2.828 2.829a1 1 0 101.415-1.415L11 9.586V6z" clip-rule="evenodd" />
                                    </svg>
                                    Full-Time
                                </span>
                                <span class="inline-flex items-center px-2 py-1 rounded-full text-xs font-medium bg-orange-100 text-orange-700">
                                    Work From Office
                                </span>
                            </div>

                            <p class="text-sm text-slate-600 mb-4 leading-relaxed">
                                AntiNganggur Membuka Lowongan Untuk Data Scientist Yang Mampu Mengolah Data Kompleks Menggunakan Python & Machine Learning. Kandidat Akan Membantu Menghasilkan Insight Yang Bermanfaat Bagi Pengambilan Keputusan Bisnis.
                            </p>
                        </div>

                        <div class="px-6 py-4 bg-gray-50 border-t border-gray-200 flex space-x-3">
                            <button class="flex-1 px-4 py-2 border-2 border-[#FF7144] text-sm font-semibold rounded-lg text-[#FF7144] bg-white hover:bg-orange-50 transition-colors duration-150">
                                Lihat Detail
                            </button>
                            <button class="flex-1 px-4 py-2 text-sm font-semibold rounded-lg text-white bg-[#FF7144] hover:bg-orange-600 transition-colors duration-150">
                                Lamar
                            </button>
                        </div>
                    </div>

                    <!-- Job Card 3 - Cyber Security Analyst -->
                    <div class="bg-white rounded-xl shadow-lg overflow-hidden hover:shadow-xl transition-shadow duration-300">
                        <div class="p-6">
                            <div class="flex items-start mb-4">
                                <div class="w-12 h-12 bg-orange-100 rounded-lg flex items-center justify-center mr-4">
                                    <svg class="w-6 h-6 text-[#FF7144]" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75L11.25 15 15 9.75m-3-7.036A11.959 11.959 0 013.598 6 11.99 11.99 0 003 9.749c0 5.592 3.824 10.29 9 11.623 5.176-1.332 9-6.03 9-11.622A11.99 11.99 0 0018.402 6a11.959 11.959 0 01-1.909-.786A11.971 11.971 0 0012 2.25c-2.649 0-5.106.904-7.091 2.464z" />
                                    </svg>
                                </div>
                                <div>
                                    <h3 class="text-lg font-semibold text-slate-900">Cyber Security Analyst</h3>
                                    <p class="text-sm text-slate-500">Anti Nganggur</p>
                                </div>
                            </div>

                            <div class="flex flex-wrap gap-2 mb-4">
                                <span class="inline-flex items-center px-2 py-1 rounded-full text-xs font-medium bg-orange-100 text-orange-700">
                                    <svg class="w-3 h-3 mr-1" fill="currentColor" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd" d="M5.05 4.05a7 7 0 119.9 9.9L10 18.9l-4.95-4.95a7 7 0 010-9.9zM10 11a2 2 0 100-4 2 2 0 000 4z" clip-rule="evenodd" />
                                    </svg>
                                    Surakarta
                                </span>
                                <span class="inline-flex items-center px-2 py-1 rounded-full text-xs font-medium bg-orange-100 text-orange-700">
                                    <svg class="w-3 h-3 mr-1" fill="currentColor" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm1-12a1 1 0 10-2 0v4a1 1 0 00.293.707l2.828 2.829a1 1 0 101.415-1.415L11 9.586V6z" clip-rule="evenodd" />
                                    </svg>
                                    Full-Time
                                </span>
                                <span class="inline-flex items-center px-2 py-1 rounded-full text-xs font-medium bg-orange-100 text-orange-700">
                                    Work From Office
                                </span>
                            </div>

                            <p class="text-sm text-slate-600 mb-4 leading-relaxed">
                                Dibutuhkan Cyber Security Analyst Yang Berpengalaman Menjaga Sistem IT Tetap Aman Dari Ancaman. Bertanggung Jawab Atas Pemantauan Keamanan, Analisis Kerentanan, Dan Implementasi Kebijakan Perlindungan Data.
                            </p>
                        </div>

                        <div class="px-6 py-4 bg-gray-50 border-t border-gray-200 flex space-x-3">
                            <button class="flex-1 px-4 py-2 border-2 border-[#FF7144] text-sm font-semibold rounded-lg text-[#FF7144] bg-white hover:bg-orange-50 transition-colors duration-150">
                                Lihat Detail
                            </button>
                            <button class="flex-1 px-4 py-2 text-sm font-semibold rounded-lg text-white bg-[#FF7144] hover:bg-orange-600 transition-colors duration-150">
                                Lamar
                            </button>
                        </div>
                    </div>

                    <!-- Repeat the pattern for more job cards (6 more cards) -->
                    <!-- Job Card 4 - Frontend Developer -->
                    <div class="bg-white rounded-xl shadow-lg overflow-hidden hover:shadow-xl transition-shadow duration-300">
                        <div class="p-6">
                            <div class="flex items-start mb-4">
                                <div class="w-12 h-12 bg-orange-100 rounded-lg flex items-center justify-center mr-4">
                                    <svg class="w-6 h-6 text-[#FF7144]" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M17.25 6.75L22.5 12l-5.25 5.25m-10.5 0L1.5 12l5.25-5.25m7.5-3l-4.5 16.5" />
                                    </svg>
                                </div>
                                <div>
                                    <h3 class="text-lg font-semibold text-slate-900">Frontend Developer</h3>
                                    <p class="text-sm text-slate-500">Anti Nganggur</p>
                                </div>
                            </div>

                            <div class="flex flex-wrap gap-2 mb-4">
                                <span class="inline-flex items-center px-2 py-1 rounded-full text-xs font-medium bg-orange-100 text-orange-700">
                                    <svg class="w-3 h-3 mr-1" fill="currentColor" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd" d="M5.05 4.05a7 7 0 119.9 9.9L10 18.9l-4.95-4.95a7 7 0 010-9.9zM10 11a2 2 0 100-4 2 2 0 000 4z" clip-rule="evenodd" />
                                    </svg>
                                    Surakarta
                                </span>
                                <span class="inline-flex items-center px-2 py-1 rounded-full text-xs font-medium bg-orange-100 text-orange-700">
                                    <svg class="w-3 h-3 mr-1" fill="currentColor" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm1-12a1 1 0 10-2 0v4a1 1 0 00.293.707l2.828 2.829a1 1 0 101.415-1.415L11 9.586V6z" clip-rule="evenodd" />
                                    </svg>
                                    Full-Time
                                </span>
                                <span class="inline-flex items-center px-2 py-1 rounded-full text-xs font-medium bg-orange-100 text-orange-700">
                                    Work From Office
                                </span>
                            </div>

                            <p class="text-sm text-slate-600 mb-4 leading-relaxed">
                                Membutuhkan Frontend Developer Berpengalaman React Js Untuk Membangun Antarmuka Web Yang Responsif, Menarik, Dan Mudah Digunakan. Kandidat Harus Memahami Integrasi API, Version Control, Dan Prinsip Desain UI Yang Baik.
                            </p>
                        </div>

                        <div class="px-6 py-4 bg-gray-50 border-t border-gray-200 flex space-x-3">
                            <button class="flex-1 px-4 py-2 border-2 border-[#FF7144] text-sm font-semibold rounded-lg text-[#FF7144] bg-white hover:bg-orange-50 transition-colors duration-150">
                                Lihat Detail
                            </button>
                            <button class="flex-1 px-4 py-2 text-sm font-semibold rounded-lg text-white bg-[#FF7144] hover:bg-orange-600 transition-colors duration-150">
                                Lamar
                            </button>
                        </div>
                    </div>

                    <!-- Job Card 5 - Data Scientist -->
                    <div class="bg-white rounded-xl shadow-lg overflow-hidden hover:shadow-xl transition-shadow duration-300">
                        <div class="p-6">
                            <div class="flex items-start mb-4">
                                <div class="w-12 h-12 bg-orange-100 rounded-lg flex items-center justify-center mr-4">
                                    <svg class="w-6 h-6 text-[#FF7144]" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M20.25 6.375c0 2.278-3.694 4.125-8.25 4.125S3.75 8.653 3.75 6.375m16.5 0c0-2.278-3.694-4.125-8.25-4.125S3.75 4.097 3.75 6.375m16.5 0v11.25c0 2.278-3.694 4.125-8.25 4.125s-8.25-1.847-8.25-4.125V6.375m16.5 0v3.75m-16.5-3.75v3.75m16.5 0v3.75C20.25 16.153 16.556 18 12 18s-8.25-1.847-8.25-4.125v-3.75m16.5 0c0 2.278-3.694 4.125-8.25 4.125s-8.25-1.847-8.25-4.125" />
                                    </svg>
                                </div>
                                <div>
                                    <h3 class="text-lg font-semibold text-slate-900">Data Scientist</h3>
                                    <p class="text-sm text-slate-500">Anti Nganggur</p>
                                </div>
                            </div>

                            <div class="flex flex-wrap gap-2 mb-4">
                                <span class="inline-flex items-center px-2 py-1 rounded-full text-xs font-medium bg-orange-100 text-orange-700">
                                    <svg class="w-3 h-3 mr-1" fill="currentColor" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd" d="M5.05 4.05a7 7 0 119.9 9.9L10 18.9l-4.95-4.95a7 7 0 010-9.9zM10 11a2 2 0 100-4 2 2 0 000 4z" clip-rule="evenodd" />
                                    </svg>
                                    Surakarta
                                </span>
                                <span class="inline-flex items-center px-2 py-1 rounded-full text-xs font-medium bg-orange-100 text-orange-700">
                                    <svg class="w-3 h-3 mr-1" fill="currentColor" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm1-12a1 1 0 10-2 0v4a1 1 0 00.293.707l2.828 2.829a1 1 0 101.415-1.415L11 9.586V6z" clip-rule="evenodd" />
                                    </svg>
                                    Full-Time
                                </span>
                                <span class="inline-flex items-center px-2 py-1 rounded-full text-xs font-medium bg-orange-100 text-orange-700">
                                    Work From Office
                                </span>
                            </div>

                            <p class="text-sm text-slate-600 mb-4 leading-relaxed">
                                AntiNganggur Membuka Lowongan Untuk Data Scientist Yang Mampu Mengolah Data Kompleks Menggunakan Python & Machine Learning. Kandidat Akan Membantu Menghasilkan Insight Yang Bermanfaat Bagi Pengambilan Keputusan Bisnis.
                            </p>
                        </div>

                        <div class="px-6 py-4 bg-gray-50 border-t border-gray-200 flex space-x-3">
                            <button class="flex-1 px-4 py-2 border-2 border-[#FF7144] text-sm font-semibold rounded-lg text-[#FF7144] bg-white hover:bg-orange-50 transition-colors duration-150">
                                Lihat Detail
                            </button>
                            <button class="flex-1 px-4 py-2 text-sm font-semibold rounded-lg text-white bg-[#FF7144] hover:bg-orange-600 transition-colors duration-150">
                                Lamar
                            </button>
                        </div>
                    </div>

                    <!-- Job Card 6 - Cyber Security Analyst -->
                    <div class="bg-white rounded-xl shadow-lg overflow-hidden hover:shadow-xl transition-shadow duration-300">
                        <div class="p-6">
                            <div class="flex items-start mb-4">
                                <div class="w-12 h-12 bg-orange-100 rounded-lg flex items-center justify-center mr-4">
                                    <svg class="w-6 h-6 text-[#FF7144]" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75L11.25 15 15 9.75m-3-7.036A11.959 11.959 0 013.598 6 11.99 11.99 0 003 9.749c0 5.592 3.824 10.29 9 11.623 5.176-1.332 9-6.03 9-11.622A11.99 11.99 0 0018.402 6a11.959 11.959 0 01-1.909-.786A11.971 11.971 0 0012 2.25c-2.649 0-5.106.904-7.091 2.464z" />
                                    </svg>
                                </div>
                                <div>
                                    <h3 class="text-lg font-semibold text-slate-900">Cyber Security Analyst</h3>
                                    <p class="text-sm text-slate-500">Anti Nganggur</p>
                                </div>
                            </div>

                            <div class="flex flex-wrap gap-2 mb-4">
                                <span class="inline-flex items-center px-2 py-1 rounded-full text-xs font-medium bg-orange-100 text-orange-700">
                                    <svg class="w-3 h-3 mr-1" fill="currentColor" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd" d="M5.05 4.05a7 7 0 119.9 9.9L10 18.9l-4.95-4.95a7 7 0 010-9.9zM10 11a2 2 0 100-4 2 2 0 000 4z" clip-rule="evenodd" />
                                    </svg>
                                    Surakarta
                                </span>
                                <span class="inline-flex items-center px-2 py-1 rounded-full text-xs font-medium bg-orange-100 text-orange-700">
                                    <svg class="w-3 h-3 mr-1" fill="currentColor" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm1-12a1 1 0 10-2 0v4a1 1 0 00.293.707l2.828 2.829a1 1 0 101.415-1.415L11 9.586V6z" clip-rule="evenodd" />
                                    </svg>
                                    Full-Time
                                </span>
                                <span class="inline-flex items-center px-2 py-1 rounded-full text-xs font-medium bg-orange-100 text-orange-700">
                                    Work From Office
                                </span>
                            </div>

                            <p class="text-sm text-slate-600 mb-4 leading-relaxed">
                                Dibutuhkan Cyber Security Analyst Yang Berpengalaman Menjaga Sistem IT Tetap Aman Dari Ancaman. Bertanggung Jawab Atas Pemantauan Keamanan, Analisis Kerentanan, Dan Implementasi Kebijakan Perlindungan Data.
                            </p>
                        </div>

                        <div class="px-6 py-4 bg-gray-50 border-t border-gray-200 flex space-x-3">
                            <button class="flex-1 px-4 py-2 border-2 border-[#FF7144] text-sm font-semibold rounded-lg text-[#FF7144] bg-white hover:bg-orange-50 transition-colors duration-150">
                                Lihat Detail
                            </button>
                            <button class="flex-1 px-4 py-2 text-sm font-semibold rounded-lg text-white bg-[#FF7144] hover:bg-orange-600 transition-colors duration-150">
                                Lamar
                            </button>
                        </div>
                    </div>

                    <!-- Job Card 7 - Frontend Developer -->
                    <div class="bg-white rounded-xl shadow-lg overflow-hidden hover:shadow-xl transition-shadow duration-300">
                        <div class="p-6">
                            <div class="flex items-start mb-4">
                                <div class="w-12 h-12 bg-orange-100 rounded-lg flex items-center justify-center mr-4">
                                    <svg class="w-6 h-6 text-[#FF7144]" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M17.25 6.75L22.5 12l-5.25 5.25m-10.5 0L1.5 12l5.25-5.25m7.5-3l-4.5 16.5" />
                                    </svg>
                                </div>
                                <div>
                                    <h3 class="text-lg font-semibold text-slate-900">Frontend Developer</h3>
                                    <p class="text-sm text-slate-500">Anti Nganggur</p>
                                </div>
                            </div>

                            <div class="flex flex-wrap gap-2 mb-4">
                                <span class="inline-flex items-center px-2 py-1 rounded-full text-xs font-medium bg-orange-100 text-orange-700">
                                    <svg class="w-3 h-3 mr-1" fill="currentColor" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd" d="M5.05 4.05a7 7 0 119.9 9.9L10 18.9l-4.95-4.95a7 7 0 010-9.9zM10 11a2 2 0 100-4 2 2 0 000 4z" clip-rule="evenodd" />
                                    </svg>
                                    Surakarta
                                </span>
                                <span class="inline-flex items-center px-2 py-1 rounded-full text-xs font-medium bg-orange-100 text-orange-700">
                                    <svg class="w-3 h-3 mr-1" fill="currentColor" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm1-12a1 1 0 10-2 0v4a1 1 0 00.293.707l2.828 2.829a1 1 0 101.415-1.415L11 9.586V6z" clip-rule="evenodd" />
                                    </svg>
                                    Full-Time
                                </span>
                                <span class="inline-flex items-center px-2 py-1 rounded-full text-xs font-medium bg-orange-100 text-orange-700">
                                    Work From Office
                                </span>
                            </div>

                            <p class="text-sm text-slate-600 mb-4 leading-relaxed">
                                Membutuhkan Frontend Developer Berpengalaman React Js Untuk Membangun Antarmuka Web Yang Responsif, Menarik, Dan Mudah Digunakan. Kandidat Harus Memahami Integrasi API, Version Control, Dan Prinsip Desain UI Yang Baik.
                            </p>
                        </div>

                        <div class="px-6 py-4 bg-gray-50 border-t border-gray-200 flex space-x-3">
                            <button class="flex-1 px-4 py-2 border-2 border-[#FF7144] text-sm font-semibold rounded-lg text-[#FF7144] bg-white hover:bg-orange-50 transition-colors duration-150">
                                Lihat Detail
                            </button>
                            <button class="flex-1 px-4 py-2 text-sm font-semibold rounded-lg text-white bg-[#FF7144] hover:bg-orange-600 transition-colors duration-150">
                                Lamar
                            </button>
                        </div>
                    </div>

                    <!-- Job Card 8 - Data Scientist -->
                    <div class="bg-white rounded-xl shadow-lg overflow-hidden hover:shadow-xl transition-shadow duration-300">
                        <div class="p-6">
                            <div class="flex items-start mb-4">
                                <div class="w-12 h-12 bg-orange-100 rounded-lg flex items-center justify-center mr-4">
                                    <svg class="w-6 h-6 text-[#FF7144]" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M20.25 6.375c0 2.278-3.694 4.125-8.25 4.125S3.75 8.653 3.75 6.375m16.5 0c0-2.278-3.694-4.125-8.25-4.125S3.75 4.097 3.75 6.375m16.5 0v11.25c0 2.278-3.694 4.125-8.25 4.125s-8.25-1.847-8.25-4.125V6.375m16.5 0v3.75m-16.5-3.75v3.75m16.5 0v3.75C20.25 16.153 16.556 18 12 18s-8.25-1.847-8.25-4.125v-3.75m16.5 0c0 2.278-3.694 4.125-8.25 4.125s-8.25-1.847-8.25-4.125" />
                                    </svg>
                                </div>
                                <div>
                                    <h3 class="text-lg font-semibold text-slate-900">Data Scientist</h3>
                                    <p class="text-sm text-slate-500">Anti Nganggur</p>
                                </div>
                            </div>

                            <div class="flex flex-wrap gap-2 mb-4">
                                <span class="inline-flex items-center px-2 py-1 rounded-full text-xs font-medium bg-orange-100 text-orange-700">
                                    <svg class="w-3 h-3 mr-1" fill="currentColor" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd" d="M5.05 4.05a7 7 0 119.9 9.9L10 18.9l-4.95-4.95a7 7 0 010-9.9zM10 11a2 2 0 100-4 2 2 0 000 4z" clip-rule="evenodd" />
                                    </svg>
                                    Surakarta
                                </span>
                                <span class="inline-flex items-center px-2 py-1 rounded-full text-xs font-medium bg-orange-100 text-orange-700">
                                    <svg class="w-3 h-3 mr-1" fill="currentColor" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm1-12a1 1 0 10-2 0v4a1 1 0 00.293.707l2.828 2.829a1 1 0 101.415-1.415L11 9.586V6z" clip-rule="evenodd" />
                                    </svg>
                                    Full-Time
                                </span>
                                <span class="inline-flex items-center px-2 py-1 rounded-full text-xs font-medium bg-orange-100 text-orange-700">
                                    Work From Office
                                </span>
                            </div>

                            <p class="text-sm text-slate-600 mb-4 leading-relaxed">
                                AntiNganggur Membuka Lowongan Untuk Data Scientist Yang Mampu Mengolah Data Kompleks Menggunakan Python & Machine Learning. Kandidat Akan Membantu Menghasilkan Insight Yang Bermanfaat Bagi Pengambilan Keputusan Bisnis.
                            </p>
                        </div>

                        <div class="px-6 py-4 bg-gray-50 border-t border-gray-200 flex space-x-3">
                            <button class="flex-1 px-4 py-2 border-2 border-[#FF7144] text-sm font-semibold rounded-lg text-[#FF7144] bg-white hover:bg-orange-50 transition-colors duration-150">
                                Lihat Detail
                            </button>
                            <button class="flex-1 px-4 py-2 text-sm font-semibold rounded-lg text-white bg-[#FF7144] hover:bg-orange-600 transition-colors duration-150">
                                Lamar
                            </button>
                        </div>
                    </div>

                    <!-- Job Card 9 - Cyber Security Analyst -->
                    <div class="bg-white rounded-xl shadow-lg overflow-hidden hover:shadow-xl transition-shadow duration-300">
                        <div class="p-6">
                            <div class="flex items-start mb-4">
                                <div class="w-12 h-12 bg-orange-100 rounded-lg flex items-center justify-center mr-4">
                                    <svg class="w-6 h-6 text-[#FF7144]" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75L11.25 15 15 9.75m-3-7.036A11.959 11.959 0 013.598 6 11.99 11.99 0 003 9.749c0 5.592 3.824 10.29 9 11.623 5.176-1.332 9-6.03 9-11.622A11.99 11.99 0 0018.402 6a11.959 11.959 0 01-1.909-.786A11.971 11.971 0 0012 2.25c-2.649 0-5.106.904-7.091 2.464z" />
                                    </svg>
                                </div>
                                <div>
                                    <h3 class="text-lg font-semibold text-slate-900">Cyber Security Analyst</h3>
                                    <p class="text-sm text-slate-500">Anti Nganggur</p>
                                </div>
                            </div>

                            <div class="flex flex-wrap gap-2 mb-4">
                                <span class="inline-flex items-center px-2 py-1 rounded-full text-xs font-medium bg-orange-100 text-orange-700">
                                    <svg class="w-3 h-3 mr-1" fill="currentColor" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd" d="M5.05 4.05a7 7 0 119.9 9.9L10 18.9l-4.95-4.95a7 7 0 010-9.9zM10 11a2 2 0 100-4 2 2 0 000 4z" clip-rule="evenodd" />
                                    </svg>
                                    Surakarta
                                </span>
                                <span class="inline-flex items-center px-2 py-1 rounded-full text-xs font-medium bg-orange-100 text-orange-700">
                                    <svg class="w-3 h-3 mr-1" fill="currentColor" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm1-12a1 1 0 10-2 0v4a1 1 0 00.293.707l2.828 2.829a1 1 0 101.415-1.415L11 9.586V6z" clip-rule="evenodd" />
                                    </svg>
                                    Full-Time
                                </span>
                                <span class="inline-flex items-center px-2 py-1 rounded-full text-xs font-medium bg-orange-100 text-orange-700">
                                    Work From Office
                                </span>
                            </div>

                            <p class="text-sm text-slate-600 mb-4 leading-relaxed">
                                Dibutuhkan Cyber Security Analyst Yang Berpengalaman Menjaga Sistem IT Tetap Aman Dari Ancaman. Bertanggung Jawab Atas Pemantauan Keamanan, Analisis Kerentanan, Dan Implementasi Kebijakan Perlindungan Data.
                            </p>
                        </div>

                        <div class="px-6 py-4 bg-gray-50 border-t border-gray-200 flex space-x-3">
                            <button class="flex-1 px-4 py-2 border-2 border-[#FF7144] text-sm font-semibold rounded-lg text-[#FF7144] bg-white hover:bg-orange-50 transition-colors duration-150">
                                Lihat Detail
                            </button>
                            <button class="flex-1 px-4 py-2 text-sm font-semibold rounded-lg text-white bg-[#FF7144] hover:bg-orange-600 transition-colors duration-150">
                                Lamar
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- ===== Latest Jobs Section Selesai ===== -->
    </main>

    <!-- ===== Footer Mulai ===== -->
    <footer class="bg-[#FF7144] text-white py-16">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
                <!-- Tentang Kami -->
                <div>
                    <h3 class="text-lg font-semibold mb-4">Tentang Kami</h3>
                    <p class="text-sm leading-relaxed mb-4">
                        AntiNganggur Adalah Penyediaan Teknologi Yang Menyediakan Dan Berbagai Lowongan Kerja Di Bidang IT Dan Teknologi. Kami Membantu Perusahaan Menemukan Talenta Terbaik Dan Membantu Pencari Kerja Menemukan Pekerjaan Impian Mereka.
                    </p>
                    <div class="space-y-2 text-sm">
                        <div class="flex items-center">
                            <svg class="w-4 h-4 mr-2" fill="currentColor" viewBox="0 0 20 20">
                                <path d="M2.003 5.884L10 9.882l7.997-3.998A2 2 0 0016 4H4a2 2 0 00-1.997 1.884z" />
                                <path d="M18 8.118l-8 4-8-4V14a2 2 0 002 2h12a2 2 0 002-2V8.118z" />
                            </svg>
                            <span>0812 3123 123</span>
                        </div>
                        <div class="flex items-center">
                            <svg class="w-4 h-4 mr-2" fill="currentColor" viewBox="0 0 20 20">
                                <path d="M2.003 5.884L10 9.882l7.997-3.998A2 2 0 0016 4H4a2 2 0 00-1.997 1.884z" />
                                <path d="M18 8.118l-8 4-8-4V14a2 2 0 002 2h12a2 2 0 002-2V8.118z" />
                            </svg>
                            <span>antinganggur@gmail.com</span>
                        </div>
                        <div class="flex items-start">
                            <svg class="w-4 h-4 mr-2 mt-0.5" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M5.05 4.05a7 7 0 119.9 9.9L10 18.9l-4.95-4.95a7 7 0 010-9.9zM10 11a2 2 0 100-4 2 2 0 000 4z" clip-rule="evenodd" />
                            </svg>
                            <span>Jl Ir. Sutami 36-A, Kentingan, Jebres, Surakarta, Jawa Tengah, Indonesia 57126</span>
                        </div>
                    </div>
                </div>

                <!-- Tautan Cepat -->
                <div>
                    <h3 class="text-lg font-semibold mb-4">Tautan Cepat</h3>
                    <ul class="space-y-2 text-sm">
                        <li><a href="#" class="hover:text-orange-200 transition-colors duration-200">Beranda</a></li>
                        <li><a href="#" class="hover:text-orange-200 transition-colors duration-200">Lowongan Di AntiNganggur</a></li>
                        <li><a href="#" class="hover:text-orange-200 transition-colors duration-200">Tentang Kami</a></li>
                        <li><a href="#" class="hover:text-orange-200 transition-colors duration-200">Hubungi Kami</a></li>
                    </ul>
                </div>

                <!-- Kategori Pekerjaan -->
                <div>
                    <h3 class="text-lg font-semibold mb-4">Kategori Pekerjaan</h3>
                    <ul class="space-y-2 text-sm">
                        <li><a href="#" class="hover:text-orange-200 transition-colors duration-200">Web Developer</a></li>
                        <li><a href="#" class="hover:text-orange-200 transition-colors duration-200">Mobile Developer</a></li>
                        <li><a href="#" class="hover:text-orange-200 transition-colors duration-200">DevOps Engineer</a></li>
                        <li><a href="#" class="hover:text-orange-200 transition-colors duration-200">UI/UX Designer</a></li>
                        <li><a href="#" class="hover:text-orange-200 transition-colors duration-200">Data Scientist</a></li>
                        <li><a href="#" class="hover:text-orange-200 transition-colors duration-200">IT Support</a></li>
                    </ul>
                </div>

                <!-- Hubungi Kami -->
                <div>
                    <h3 class="text-lg font-semibold mb-4">Hubungi Kami</h3>
                    <form class="space-y-3">
                        <input type="email" placeholder="Masukkan Email" class="w-full px-3 py-2 text-gray-900 rounded-lg focus:outline-none focus:ring-2 focus:ring-orange-300">
                        <textarea placeholder="Pesan Anda" rows="3" class="w-full px-3 py-2 text-gray-900 rounded-lg focus:outline-none focus:ring-2 focus:ring-orange-300 resize-none"></textarea>
                        <button type="submit" class="w-full bg-white text-[#FF7144] py-2 rounded-lg font-semibold hover:bg-orange-50 transition-colors duration-200">
                            Kirim
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </footer>
    <!-- ===== Footer Selesai ===== -->

    <script>
        const mobileMenuButton = document.getElementById('mobile-menu-button');
        const mobileMenu = document.getElementById('mobile-menu');
        const menuIconOpen = document.getElementById('menu-icon-open');
        const menuIconClose = document.getElementById('menu-icon-close');

        if (mobileMenuButton && mobileMenu && menuIconOpen && menuIconClose) {
            mobileMenuButton.addEventListener('click', () => {
                const isExpanded = mobileMenuButton.getAttribute('aria-expanded') === 'true' || false;
                mobileMenuButton.setAttribute('aria-expanded', !isExpanded);
                mobileMenu.classList.toggle('hidden');
                menuIconOpen.classList.toggle('hidden');
                menuIconClose.classList.toggle('hidden');
            });
        }
    </script>
</body>

</html>
