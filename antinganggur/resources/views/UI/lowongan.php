<?php require_once 'headerb.php'?>

    <main>
        <!-- ===== Hero Section Mulai ===== -->
        <section class="bg-[#FF7144] py-16 md:py-20 lg:py-24 relative overflow-hidden">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative">
                <!-- Left Person Image -->
                <div class="absolute left-0 bottom-0 hidden lg:block">
                    <img src="../assets/orang1.png" alt="Professional Person 1" class="h-80 object-cover object-bottom">
                </div>

                <!-- Right Person Image -->
                <div class="absolute right-0 bottom-0 hidden lg:block">
                    <img src="../assets/orang2.png" alt="Professional Person 2" class="h-80 object-cover object-bottom">
                </div>

                <!-- Center Content -->
                <div class="text-center">
                    <h1 class="text-3xl sm:text-4xl md:text-5xl lg:text-5xl font-bold text-white mb-8 leading-tight max-w-4xl mx-auto">
                        Daftarkan Pekerjaan Impian<br>
                        Anda Di AntiNganggur
                    </h1>

                    <!-- Search Form -->
                    <div class="bg-white rounded-lg p-4 shadow-lg max-w-2xl mx-auto">
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
                            <button class="bg-[#FF7144] text-white px-8 py-3 rounded-lg font-semibold hover:bg-[#E55A2B] transition-colors duration-200 whitespace-nowrap">
                                Cari
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- ===== Hero Section Selesai ===== -->

        <!-- ===== Trending Jobs Section Mulai ===== -->
        <section class="py-16 md:py-20 bg-[#FFE8E0]">
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
                        <div class="grid gap-6 md:grid-cols-3">
                            <!-- Trending Job Card 1 -->
                            <div class="bg-white rounded-xl shadow-md p-6 hover:shadow-xl transition-shadow duration-300">
                                <div class="flex items-center mb-4">
                                    <div class="w-12 h-12 bg-[#FFE8E0] rounded-lg flex items-center justify-center">
                                        <svg class="w-6 h-6 text-[#FF7144]" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
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
                                        <span>Full-Time</span>
                                    </div>
                                </div>
                                <button class="w-full bg-[#FF7144] text-white py-2 rounded-lg font-semibold hover:bg-[#E55A2B] transition-colors duration-200">
                                    Lamar
                                </button>
                            </div>

                            <!-- Trending Job Card 2 -->
                            <div class="bg-white rounded-xl shadow-md p-6 hover:shadow-xl transition-shadow duration-300">
                                <div class="flex items-center mb-4">
                                    <div class="w-12 h-12 bg-[#FFE8E0] rounded-lg flex items-center justify-center">
                                        <svg class="w-6 h-6 text-[#FF7144]" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M20.25 6.375c0 2.278-3.694 4.125-8.25 4.125S3.75 8.653 3.75 6.375m16.5 0c0-2.278-3.694-4.125-8.25-4.125S3.75 4.097 3.75 6.375m16.5 0v11.25c0 2.278-3.694 4.125-8.25 4.125s-8.25-1.847-8.25-4.125V6.375m16.5 0v3.75m-16.5-3.75v3.75m16.5 0v3.75C20.25 16.153 16.556 18 12 18s-8.25-1.847-8.25-4.125v-3.75m16.5 0c0 2.278-3.694 4.125-8.25 4.125s-8.25-1.847-8.25-4.125" />
                                        </svg>
                                    </div>
                                </div>
                                <h3 class="text-lg font-semibold text-slate-900 mb-2">Data Scientist</h3>
                                <p class="text-sm text-slate-500 mb-3">Anti Nganggur</p>
                                <p class="text-xs text-slate-600 mb-4">AntiNganggur Membuka Lowongan Untuk Data Scientist Yang Mampu Mengolah Data Kompleks Menggunakan Python & Machine Learning.</p>
                                <div class="space-y-2 text-xs text-slate-500 mb-4">
                                    <div class="flex items-center">
                                        <span class="w-2 h-2 bg-[#FF7144] rounded-full mr-2"></span>
                                        <span>Surakarta</span>
                                    </div>
                                    <div class="flex items-center">
                                        <span class="w-2 h-2 bg-[#FF7144] rounded-full mr-2"></span>
                                        <span>Rp22-32jt/Bulan</span>
                                    </div>
                                    <div class="flex items-center">
                                        <span class="w-2 h-2 bg-[#FF7144] rounded-full mr-2"></span>
                                        <span>Full-Time</span>
                                    </div>
                                </div>
                                <button class="w-full bg-[#FF7144] text-white py-2 rounded-lg font-semibold hover:bg-[#E55A2B] transition-colors duration-200">
                                    Lamar
                                </button>
                            </div>

                            <!-- Trending Job Card 3 -->
                            <div class="bg-white rounded-xl shadow-md p-6 hover:shadow-xl transition-shadow duration-300">
                                <div class="flex items-center mb-4">
                                    <div class="w-12 h-12 bg-[#FFE8E0] rounded-lg flex items-center justify-center">
                                        <svg class="w-6 h-6 text-[#FF7144]" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75L11.25 15 15 9.75m-3-7.036A11.959 11.959 0 013.598 6 11.99 11.99 0 003 9.749c0 5.592 3.824 10.29 9 11.623 5.176-1.332 9-6.03 9-11.622A11.99 11.99 0 0018.402 6a11.959 11.959 0 01-1.909-.786A11.971 11.971 0 0012 2.25c-2.649 0-5.106.904-7.091 2.464z" />
                                        </svg>
                                    </div>
                                </div>
                                <h3 class="text-lg font-semibold text-slate-900 mb-2">Cyber Security Analyst</h3>
                                <p class="text-sm text-slate-500 mb-3">Anti Nganggur</p>
                                <p class="text-xs text-slate-600 mb-4">Dibutuhkan Cyber Security Analyst Yang Berpengalaman Menjaga Sistem IT Tetap Aman Dari Ancaman.</p>
                                <div class="space-y-2 text-xs text-slate-500 mb-4">
                                    <div class="flex items-center">
                                        <span class="w-2 h-2 bg-[#FF7144] rounded-full mr-2"></span>
                                        <span>Surakarta</span>
                                    </div>
                                    <div class="flex items-center">
                                        <span class="w-2 h-2 bg-[#FF7144] rounded-full mr-2"></span>
                                        <span>Rp15-25jt/Bulan</span>
                                    </div>
                                    <div class="flex items-center">
                                        <span class="w-2 h-2 bg-[#FF7144] rounded-full mr-2"></span>
                                        <span>Full-Time</span>
                                    </div>
                                </div>
                                <button class="w-full bg-[#FF7144] text-white py-2 rounded-lg font-semibold hover:bg-[#E55A2B] transition-colors duration-200">
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
        <section class="py-16 md:py-20 bg-[#FFF7F5]">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="text-center mb-12">
                    <h2 class="text-3xl font-bold text-slate-800 mb-4">
                        Lowongan Terbaru
                    </h2>
                </div>

                <div class="grid gap-8 md:grid-cols-2 lg:grid-cols-3">
                    <!-- Job Card 1 -->
                    <div class="bg-white rounded-xl shadow-md overflow-hidden hover:shadow-xl transition-shadow duration-300">
                        <div class="p-6">
                            <div class="flex items-center mb-4">
                                <svg class="w-10 h-10 text-[#FF7144]" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M17.25 6.75L22.5 12l-5.25 5.25m-10.5 0L1.5 12l5.25-5.25m7.5-3l-4.5 16.5" />
                                </svg>
                                <div class="ml-3">
                                    <h3 class="text-lg font-semibold text-slate-900">Frontend Developer</h3>
                                    <p class="text-sm text-slate-500">Anti Nganggur</p>
                                </div>
                            </div>

                            <div class="flex flex-wrap gap-2 mb-4">
                                <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-[#FFE8E0] text-[#FF7144]">
                                    <svg class="w-3 h-3 mr-1" fill="currentColor" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd" d="M5.05 4.05a7 7 0 119.9 9.9L10 18.9l-4.95-4.95a7 7 0 010-9.9zM10 11a2 2 0 100-4 2 2 0 000 4z" clip-rule="evenodd" />
                                    </svg>
                                    Surakarta
                                </span>
                                <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-[#FFE8E0] text-[#FF7144]">
                                    <svg class="w-3 h-3 mr-1" fill="currentColor" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm1-12a1 1 0 10-2 0v4a1 1 0 00.293.707l2.828 2.829a1 1 0 101.415-1.415L11 9.586V6z" clip-rule="evenodd" />
                                    </svg>
                                    Full-Time
                                </span>
                                <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-[#FFE8E0] text-[#FF7144]">
                                    Rp10-15jt/Bulan
                                </span>
                            </div>

                            <p class="text-sm text-slate-600 mb-4 leading-relaxed">
                                Membutuhkan Frontend Developer berpengalaman React Js untuk Membangun Antarmuka Web Yang Responsif, Menarik, Dan Mudah Digunakan. Kandidat Harus Memahami Integrasi API, Version Control, Dan Prinsip Desain UI Yang Baik.
                            </p>
                        </div>

                        <div class="px-6 py-4 bg-gray-50 border-t border-gray-200 flex space-x-3">
                            <button class="flex-1 px-4 py-2 border border-[#FF7144] text-sm font-semibold rounded-lg text-[#FF7144] bg-white hover:bg-[#FFF0EB] transition-colors duration-150">
                                Lihat Detail
                            </button>
                            <button class="flex-1 px-4 py-2 text-sm font-semibold rounded-lg text-white bg-[#FF7144] hover:bg-[#E55A2B] transition-colors duration-150">
                                Lamar
                            </button>
                        </div>
                    </div>

                    <!-- Job Card 2 -->
                    <div class="bg-white rounded-xl shadow-md overflow-hidden hover:shadow-xl transition-shadow duration-300">
                        <div class="p-6">
                            <div class="flex items-center mb-4">
                                <svg class="w-10 h-10 text-[#FF7144]" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M20.25 6.375c0 2.278-3.694 4.125-8.25 4.125S3.75 8.653 3.75 6.375m16.5 0c0-2.278-3.694-4.125-8.25-4.125S3.75 4.097 3.75 6.375m16.5 0v11.25c0 2.278-3.694 4.125-8.25 4.125s-8.25-1.847-8.25-4.125V6.375m16.5 0v3.75m-16.5-3.75v3.75m16.5 0v3.75C20.25 16.153 16.556 18 12 18s-8.25-1.847-8.25-4.125v-3.75m16.5 0c0 2.278-3.694 4.125-8.25 4.125s-8.25-1.847-8.25-4.125" />
                                </svg>
                                <div class="ml-3">
                                    <h3 class="text-lg font-semibold text-slate-900">Data Scientist</h3>
                                    <p class="text-sm text-slate-500">Anti Nganggur</p>
                                </div>
                            </div>

                            <div class="flex flex-wrap gap-2 mb-4">
                                <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-[#FFE8E0] text-[#FF7144]">
                                    <svg class="w-3 h-3 mr-1" fill="currentColor" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd" d="M5.05 4.05a7 7 0 119.9 9.9L10 18.9l-4.95-4.95a7 7 0 010-9.9zM10 11a2 2 0 100-4 2 2 0 000 4z" clip-rule="evenodd" />
                                    </svg>
                                    Surakarta
                                </span>
                                <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-[#FFE8E0] text-[#FF7144]">
                                    <svg class="w-3 h-3 mr-1" fill="currentColor" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm1-12a1 1 0 10-2 0v4a1 1 0 00.293.707l2.828 2.829a1 1 0 101.415-1.415L11 9.586V6z" clip-rule="evenodd" />
                                    </svg>
                                    Full-Time
                                </span>
                                <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-[#FFE8E0] text-[#FF7144]">
                                    Rp22-32jt/Bulan
                                </span>
                            </div>

                            <p class="text-sm text-slate-600 mb-4 leading-relaxed">
                                AntiNganggur Membuka Lowongan Untuk Data Scientist Yang Mampu Mengolah Data Kompleks Menggunakan Python & Machine Learning. Kandidat Akan Membantu Menghasilkan Insight Yang Bermanfaat Bagi Pengambilan Keputusan Bisnis.
                            </p>
                        </div>

                        <div class="px-6 py-4 bg-gray-50 border-t border-gray-200 flex space-x-3">
                            <button class="flex-1 px-4 py-2 border border-[#FF7144] text-sm font-semibold rounded-lg text-[#FF7144] bg-white hover:bg-[#FFF0EB] transition-colors duration-150">
                                Lihat Detail
                            </button>
                            <button class="flex-1 px-4 py-2 text-sm font-semibold rounded-lg text-white bg-[#FF7144] hover:bg-[#E55A2B] transition-colors duration-150">
                                Lamar
                            </button>
                        </div>
                    </div>

                    <!-- Job Card 3 -->
                    <div class="bg-white rounded-xl shadow-md overflow-hidden hover:shadow-xl transition-shadow duration-300">
                        <div class="p-6">
                            <div class="flex items-center mb-4">
                                <svg class="w-10 h-10 text-[#FF7144]" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75L11.25 15 15 9.75m-3-7.036A11.959 11.959 0 013.598 6 11.99 11.99 0 003 9.749c0 5.592 3.824 10.29 9 11.623 5.176-1.332 9-6.03 9-11.622A11.99 11.99 0 0018.402 6a11.959 11.959 0 01-1.909-.786A11.971 11.971 0 0012 2.25c-2.649 0-5.106.904-7.091 2.464z" />
                                </svg>
                                <div class="ml-3">
                                    <h3 class="text-lg font-semibold text-slate-900">Cyber Security Analyst</h3>
                                    <p class="text-sm text-slate-500">Anti Nganggur</p>
                                </div>
                            </div>

                            <div class="flex flex-wrap gap-2 mb-4">
                                <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-[#FFE8E0] text-[#FF7144]">
                                    <svg class="w-3 h-3 mr-1" fill="currentColor" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd" d="M5.05 4.05a7 7 0 119.9 9.9L10 18.9l-4.95-4.95a7 7 0 010-9.9zM10 11a2 2 0 100-4 2 2 0 000 4z" clip-rule="evenodd" />
                                    </svg>
                                    Surakarta
                                </span>
                                <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-[#FFE8E0] text-[#FF7144]">
                                    <svg class="w-3 h-3 mr-1" fill="currentColor" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm1-12a1 1 0 10-2 0v4a1 1 0 00.293.707l2.828 2.829a1 1 0 101.415-1.415L11 9.586V6z" clip-rule="evenodd" />
                                    </svg>
                                    Full-Time
                                </span>
                                <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-[#FFE8E0] text-[#FF7144]">
                                    Rp15-25jt/Bulan
                                </span>
                            </div>

                            <p class="text-sm text-slate-600 mb-4 leading-relaxed">
                                Dibutuhkan Cyber Security Analyst Yang Berpengalaman Menjaga Sistem IT Tetap Aman Dari Ancaman. Bertanggung Jawab Atas Pemantauan Keamanan, Analisis Kerentanan, Dan Implementasi Kebijakan Perlindungan Data.
                            </p>
                        </div>

                        <div class="px-6 py-4 bg-gray-50 border-t border-gray-200 flex space-x-3">
                            <button class="flex-1 px-4 py-2 border border-[#FF7144] text-sm font-semibold rounded-lg text-[#FF7144] bg-white hover:bg-[#FFF0EB] transition-colors duration-150">
                                Lihat Detail
                            </button>
                            <button class="flex-1 px-4 py-2 text-sm font-semibold rounded-lg text-white bg-[#FF7144] hover:bg-[#E55A2B] transition-colors duration-150">
                                Lamar
                            </button>
                        </div>
                    </div>

                    <!-- Job Card 4 -->
                    <div class="bg-white rounded-xl shadow-md overflow-hidden hover:shadow-xl transition-shadow duration-300">
                        <div class="p-6">
                            <div class="flex items-center mb-4">
                                <svg class="w-10 h-10 text-[#FF7144]" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M17.25 6.75L22.5 12l-5.25 5.25m-10.5 0L1.5 12l5.25-5.25m7.5-3l-4.5 16.5" />
                                </svg>
                                <div class="ml-3">
                                    <h3 class="text-lg font-semibold text-slate-900">Frontend Developer</h3>
                                    <p class="text-sm text-slate-500">Anti Nganggur</p>
                                </div>
                            </div>

                            <div class="flex flex-wrap gap-2 mb-4">
                                <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-[#FFE8E0] text-[#FF7144]">
                                    <svg class="w-3 h-3 mr-1" fill="currentColor" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd" d="M5.05 4.05a7 7 0 119.9 9.9L10 18.9l-4.95-4.95a7 7 0 010-9.9zM10 11a2 2 0 100-4 2 2 0 000 4z" clip-rule="evenodd" />
                                    </svg>
                                    Surakarta
                                </span>
                                <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-[#FFE8E0] text-[#FF7144]">
                                    <svg class="w-3 h-3 mr-1" fill="currentColor" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm1-12a1 1 0 10-2 0v4a1 1 0 00.293.707l2.828 2.829a1 1 0 101.415-1.415L11 9.586V6z" clip-rule="evenodd" />
                                    </svg>
                                    Full-Time
                                </span>
                                <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-[#FFE8E0] text-[#FF7144]">
                                    Rp10-15jt/Bulan
                                </span>
                            </div>

                            <p class="text-sm text-slate-600 mb-4 leading-relaxed">
                                Membutuhkan Frontend Developer berpengalaman React Js untuk Membangun Antarmuka Web Yang Responsif, Menarik, Dan Mudah Digunakan. Kandidat Harus Memahami Integrasi API, Version Control, Dan Prinsip Desain UI Yang Baik.
                            </p>
                        </div>

                        <div class="px-6 py-4 bg-gray-50 border-t border-gray-200 flex space-x-3">
                            <button class="flex-1 px-4 py-2 border border-[#FF7144] text-sm font-semibold rounded-lg text-[#FF7144] bg-white hover:bg-[#FFF0EB] transition-colors duration-150">
                                Lihat Detail
                            </button>
                            <button class="flex-1 px-4 py-2 text-sm font-semibold rounded-lg text-white bg-[#FF7144] hover:bg-[#E55A2B] transition-colors duration-150">
                                Lamar
                            </button>
                        </div>
                    </div>

                    <!-- Job Card 5 -->
                    <div class="bg-white rounded-xl shadow-md overflow-hidden hover:shadow-xl transition-shadow duration-300">
                        <div class="p-6">
                            <div class="flex items-center mb-4">
                                <svg class="w-10 h-10 text-[#FF7144]" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M20.25 6.375c0 2.278-3.694 4.125-8.25 4.125S3.75 8.653 3.75 6.375m16.5 0c0-2.278-3.694-4.125-8.25-4.125S3.75 4.097 3.75 6.375m16.5 0v11.25c0 2.278-3.694 4.125-8.25 4.125s-8.25-1.847-8.25-4.125V6.375m16.5 0v3.75m-16.5-3.75v3.75m16.5 0v3.75C20.25 16.153 16.556 18 12 18s-8.25-1.847-8.25-4.125v-3.75m16.5 0c0 2.278-3.694 4.125-8.25 4.125s-8.25-1.847-8.25-4.125" />
                                </svg>
                                <div class="ml-3">
                                    <h3 class="text-lg font-semibold text-slate-900">Data Scientist</h3>
                                    <p class="text-sm text-slate-500">Anti Nganggur</p>
                                </div>
                            </div>

                            <div class="flex flex-wrap gap-2 mb-4">
                                <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-[#FFE8E0] text-[#FF7144]">
                                    <svg class="w-3 h-3 mr-1" fill="currentColor" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd" d="M5.05 4.05a7 7 0 119.9 9.9L10 18.9l-4.95-4.95a7 7 0 010-9.9zM10 11a2 2 0 100-4 2 2 0 000 4z" clip-rule="evenodd" />
                                    </svg>
                                    Surakarta
                                </span>
                                <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-[#FFE8E0] text-[#FF7144]">
                                    <svg class="w-3 h-3 mr-1" fill="currentColor" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm1-12a1 1 0 10-2 0v4a1 1 0 00.293.707l2.828 2.829a1 1 0 101.415-1.415L11 9.586V6z" clip-rule="evenodd" />
                                    </svg>
                                    Full-Time
                                </span>
                                <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-[#FFE8E0] text-[#FF7144]">
                                    Rp22-32jt/Bulan
                                </span>
                            </div>

                            <p class="text-sm text-slate-600 mb-4 leading-relaxed">
                                AntiNganggur Membuka Lowongan Untuk Data Scientist Yang Mampu Mengolah Data Kompleks Menggunakan Python & Machine Learning. Kandidat Akan Membantu Menghasilkan Insight Yang Bermanfaat Bagi Pengambilan Keputusan Bisnis.
                            </p>
                        </div>

                        <div class="px-6 py-4 bg-gray-50 border-t border-gray-200 flex space-x-3">
                            <button class="flex-1 px-4 py-2 border border-[#FF7144] text-sm font-semibold rounded-lg text-[#FF7144] bg-white hover:bg-[#FFF0EB] transition-colors duration-150">
                                Lihat Detail
                            </button>
                            <button class="flex-1 px-4 py-2 text-sm font-semibold rounded-lg text-white bg-[#FF7144] hover:bg-[#E55A2B] transition-colors duration-150">
                                Lamar
                            </button>
                        </div>
                    </div>

                    <!-- Job Card 6 -->
                    <div class="bg-white rounded-xl shadow-md overflow-hidden hover:shadow-xl transition-shadow duration-300">
                        <div class="p-6">
                            <div class="flex items-center mb-4">
                                <svg class="w-10 h-10 text-[#FF7144]" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75L11.25 15 15 9.75m-3-7.036A11.959 11.959 0 013.598 6 11.99 11.99 0 003 9.749c0 5.592 3.824 10.29 9 11.623 5.176-1.332 9-6.03 9-11.622A11.99 11.99 0 0018.402 6a11.959 11.959 0 01-1.909-.786A11.971 11.971 0 0012 2.25c-2.649 0-5.106.904-7.091 2.464z" />
                                </svg>
                                <div class="ml-3">
                                    <h3 class="text-lg font-semibold text-slate-900">Cyber Security Analyst</h3>
                                    <p class="text-sm text-slate-500">Anti Nganggur</p>
                                </div>
                            </div>

                            <div class="flex flex-wrap gap-2 mb-4">
                                <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-[#FFE8E0] text-[#FF7144]">
                                    <svg class="w-3 h-3 mr-1" fill="currentColor" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd" d="M5.05 4.05a7 7 0 119.9 9.9L10 18.9l-4.95-4.95a7 7 0 010-9.9zM10 11a2 2 0 100-4 2 2 0 000 4z" clip-rule="evenodd" />
                                    </svg>
                                    Surakarta
                                </span>
                                <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-[#FFE8E0] text-[#FF7144]">
                                    <svg class="w-3 h-3 mr-1" fill="currentColor" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm1-12a1 1 0 10-2 0v4a1 1 0 00.293.707l2.828 2.829a1 1 0 101.415-1.415L11 9.586V6z" clip-rule="evenodd" />
                                    </svg>
                                    Full-Time
                                </span>
                                <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-[#FFE8E0] text-[#FF7144]">
                                    Rp15-25jt/Bulan
                                </span>
                            </div>

                            <p class="text-sm text-slate-600 mb-4 leading-relaxed">
                                Dibutuhkan Cyber Security Analyst Yang Berpengalaman Menjaga Sistem IT Tetap Aman Dari Ancaman. Bertanggung Jawab Atas Pemantauan Keamanan, Analisis Kerentanan, Dan Implementasi Kebijakan Perlindungan Data.
                            </p>
                        </div>

                        <div class="px-6 py-4 bg-gray-50 border-t border-gray-200 flex space-x-3">
                            <button class="flex-1 px-4 py-2 border border-[#FF7144] text-sm font-semibold rounded-lg text-[#FF7144] bg-white hover:bg-[#FFF0EB] transition-colors duration-150">
                                Lihat Detail
                            </button>
                            <button class="flex-1 px-4 py-2 text-sm font-semibold rounded-lg text-white bg-[#FF7144] hover:bg-[#E55A2B] transition-colors duration-150">
                                Lamar
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- ===== Latest Jobs Section Selesai ===== -->
    </main>

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
