<?php require_once 'headerb.php'?>

    <main>
        <section class="bg-[#FF7144] py-16 md:py-20 lg:py-24 relative overflow-hidden">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="lg:grid lg:grid-cols-12 lg:gap-x-12 xl:gap-x-16 lg:items-center">
                    <!-- Left Content -->
                    <div class="lg:col-span-5 xl:col-span-6 text-center lg:text-left mb-12 lg:mb-0">
                        <img src="../assets/orang1.png" alt="Professional Woman" class="w-32 h-32 sm:w-40 sm:h-40 mx-auto lg:mx-0 mb-6 lg:mb-0 lg:absolute lg:left-0 lg:bottom-0 lg:w-48 lg:h-48 object-contain">
                    </div>

                    <!-- Center Content -->
                    <div class="lg:col-span-7 xl:col-span-6 text-center">
                        <h1 class="text-3xl sm:text-4xl md:text-5xl font-bold text-white mb-8 leading-tight">
                            Daftarkan Pekerjaan Impian<br>
                            Anda Di AntiNganggur
                        </h1>

                        <!-- Search Form -->
                        <div class="bg-white rounded-lg p-4 shadow-lg max-w-2xl mx-auto">
                            <form method="GET" action="">
                                <div class="flex flex-col sm:flex-row gap-3">
                                    <div class="flex-1">
                                        <input type="text" name="posisi" placeholder="Posisi Pekerjaan" value="<?php echo isset($_GET['posisi']) ? htmlspecialchars($_GET['posisi']) : ''; ?>" class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-[#FF7144] focus:border-transparent">
                                    </div>
                                    <div class="flex-1">
                                        <select name="lokasi" class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-[#FF7144] focus:border-transparent bg-white">
                                            <option value="">Semua Lokasi</option>
                                            <option value="Jakarta" <?php echo (isset($_GET['lokasi']) && $_GET['lokasi'] == 'Jakarta') ? 'selected' : ''; ?>>Jakarta</option>
                                            <option value="Surabaya" <?php echo (isset($_GET['lokasi']) && $_GET['lokasi'] == 'Surabaya') ? 'selected' : ''; ?>>Surabaya</option>
                                            <option value="Bandung" <?php echo (isset($_GET['lokasi']) && $_GET['lokasi'] == 'Bandung') ? 'selected' : ''; ?>>Bandung</option>
                                            <option value="Medan" <?php echo (isset($_GET['lokasi']) && $_GET['lokasi'] == 'Medan') ? 'selected' : ''; ?>>Medan</option>
                                            <option value="Semarang" <?php echo (isset($_GET['lokasi']) && $_GET['lokasi'] == 'Semarang') ? 'selected' : ''; ?>>Semarang</option>
                                            <option value="Makassar" <?php echo (isset($_GET['lokasi']) && $_GET['lokasi'] == 'Makassar') ? 'selected' : ''; ?>>Makassar</option>
                                            <option value="Palembang" <?php echo (isset($_GET['lokasi']) && $_GET['lokasi'] == 'Palembang') ? 'selected' : ''; ?>>Palembang</option>
                                            <option value="Tangerang" <?php echo (isset($_GET['lokasi']) && $_GET['lokasi'] == 'Tangerang') ? 'selected' : ''; ?>>Tangerang</option>
                                            <option value="Depok" <?php echo (isset($_GET['lokasi']) && $_GET['lokasi'] == 'Depok') ? 'selected' : ''; ?>>Depok</option>
                                            <option value="Bekasi" <?php echo (isset($_GET['lokasi']) && $_GET['lokasi'] == 'Bekasi') ? 'selected' : ''; ?>>Bekasi</option>
                                            <option value="Surakarta" <?php echo (isset($_GET['lokasi']) && $_GET['lokasi'] == 'Surakarta') ? 'selected' : ''; ?>>Surakarta</option>
                                        </select>
                                    </div>
                                    <button type="submit" class="bg-[#FF7144] text-white px-8 py-3 rounded-lg font-semibold hover:bg-orange-600 transition-colors duration-200">
                                        Cari
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>

                    <!-- Right Content -->
                    <div class="hidden lg:block lg:absolute lg:right-0 lg:bottom-0">
                        <img src="../assets/orang2.png" alt="Professional Man" class="w-48 h-48 object-contain">
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
                        <h2 class="text-3xl sm:text-4xl font-bold text-slate-800 mb-4">
                            Lowongan Kerja<br>
                            Yang Sedang<br>
                            Trending
                        </h2>
                        <p class="text-slate-600 leading-relaxed">
                            Temukan Lowongan Pekerjaan Terbaru Yang Sedang Diminati Oleh Para Pencari Kerja
                        </p>
                    </div>

                    <!-- Right Content - Job Cards -->
                    <div class="lg:col-span-8">
                        <div class="grid gap-6 md:grid-cols-2 lg:grid-cols-3">
                            <?php
                            // Sample trending jobs data
                            $trendingJobs = [
                                [
                                    'title' => 'Frontend Developer',
                                    'company' => 'Anti Nganggur',
                                    'location' => 'Surakarta',
                                    'salary' => 'Rp10-15jt/Bulan',
                                    'type' => 'Full-Time',
                                    'workType' => 'Work From Office',
                                    'description' => 'Membutuhkan Frontend Developer Berpengalaman React Js Untuk Membangun Antarmuka Web Yang Responsif, Menarik, Dan Mudah Digunakan.'
                                ],
                                [
                                    'title' => 'Backend Developer',
                                    'company' => 'Anti Nganggur',
                                    'location' => 'Surakarta',
                                    'salary' => 'Rp12-18jt/Bulan',
                                    'type' => 'Full-Time',
                                    'workType' => 'Work From Office',
                                    'description' => 'Membutuhkan Backend Developer Berpengalaman Node.js Untuk Membangun API Yang Robust Dan Scalable.'
                                ],
                                [
                                    'title' => 'UI/UX Designer',
                                    'company' => 'Anti Nganggur',
                                    'location' => 'Surakarta',
                                    'salary' => 'Rp8-12jt/Bulan',
                                    'type' => 'Full-Time',
                                    'workType' => 'Work From Office',
                                    'description' => 'Membutuhkan UI/UX Designer Yang Kreatif Untuk Merancang Pengalaman Pengguna Yang Menarik Dan Intuitif.'
                                ]
                            ];

                            foreach ($trendingJobs as $job): ?>
                            <!-- Trending Job Card -->
                            <div class="bg-white rounded-xl shadow-lg p-6 hover:shadow-xl transition-shadow duration-300">
                                <div class="flex items-center mb-4">
                                    <div class="w-12 h-12 bg-orange-100 rounded-lg flex items-center justify-center">
                                        <svg class="w-6 h-6 text-[#FF7144]" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M17.25 6.75L22.5 12l-5.25 5.25m-10.5 0L1.5 12l5.25-5.25m7.5-3l-4.5 16.5" />
                                        </svg>
                                    </div>
                                </div>
                                <h3 class="text-lg font-semibold text-slate-900 mb-2"><?php echo htmlspecialchars($job['title']); ?></h3>
                                <p class="text-sm text-slate-500 mb-3"><?php echo htmlspecialchars($job['company']); ?></p>
                                <p class="text-xs text-slate-600 mb-4"><?php echo htmlspecialchars($job['description']); ?></p>
                                <div class="space-y-2 text-xs text-slate-500 mb-4">
                                    <div class="flex items-center">
                                        <span class="w-2 h-2 bg-[#FF7144] rounded-full mr-2"></span>
                                        <span><?php echo htmlspecialchars($job['location']); ?></span>
                                    </div>
                                    <div class="flex items-center">
                                        <span class="w-2 h-2 bg-[#FF7144] rounded-full mr-2"></span>
                                        <span><?php echo htmlspecialchars($job['salary']); ?></span>
                                    </div>
                                    <div class="flex items-center">
                                        <span class="w-2 h-2 bg-[#FF7144] rounded-full mr-2"></span>
                                        <span><?php echo htmlspecialchars($job['workType']); ?></span>
                                    </div>
                                    <div class="flex items-center">
                                        <span class="w-2 h-2 bg-[#FF7144] rounded-full mr-2"></span>
                                        <span><?php echo htmlspecialchars($job['type']); ?></span>
                                    </div>
                                </div>
                                <button class="w-full bg-[#FF7144] text-white py-2 rounded-lg font-semibold hover:bg-orange-600 transition-colors duration-200">
                                    Lamar
                                </button>
                            </div>
                            <?php endforeach; ?>
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
                    <?php
                    // Sample latest jobs data
                    $latestJobs = [
                        [
                            'title' => 'Frontend Developer',
                            'company' => 'Anti Nganggur',
                            'location' => 'Surakarta',
                            'type' => 'Full-Time',
                            'workType' => 'Work From Office',
                            'description' => 'Membutuhkan Frontend Developer Berpengalaman React Js Untuk Membangun Antarmuka Web Yang Responsif, Menarik, Dan Mudah Digunakan. Kandidat Harus Memahami Integrasi API, Version Control, Dan Prinsip Desain UI Yang Baik.',
                            'icon' => 'M17.25 6.75L22.5 12l-5.25 5.25m-10.5 0L1.5 12l5.25-5.25m7.5-3l-4.5 16.5'
                        ],
                        [
                            'title' => 'Data Scientist',
                            'company' => 'Anti Nganggur',
                            'location' => 'Surakarta',
                            'type' => 'Full-Time',
                            'workType' => 'Work From Office',
                            'description' => 'AntiNganggur Membuka Lowongan Untuk Data Scientist Yang Mampu Mengolah Data Kompleks Menggunakan Python & Machine Learning. Kandidat Akan Membantu Menghasilkan Insight Yang Bermanfaat Bagi Pengambilan Keputusan Bisnis.',
                            'icon' => 'M20.25 6.375c0 2.278-3.694 4.125-8.25 4.125S3.75 8.653 3.75 6.375m16.5 0c0-2.278-3.694-4.125-8.25-4.125S3.75 4.097 3.75 6.375m16.5 0v11.25c0 2.278-3.694 4.125-8.25 4.125s-8.25-1.847-8.25-4.125V6.375m16.5 0v3.75m-16.5-3.75v3.75m16.5 0v3.75C20.25 16.153 16.556 18 12 18s-8.25-1.847-8.25-4.125v-3.75m16.5 0c0 2.278-3.694 4.125-8.25 4.125s-8.25-1.847-8.25-4.125'
                        ],
                        [
                            'title' => 'Cyber Security Analyst',
                            'company' => 'Anti Nganggur',
                            'location' => 'Surakarta',
                            'type' => 'Full-Time',
                            'workType' => 'Work From Office',
                            'description' => 'Dibutuhkan Cyber Security Analyst Yang Berpengalaman Menjaga Sistem IT Tetap Aman Dari Ancaman. Bertanggung Jawab Atas Pemantauan Keamanan, Analisis Kerentanan, Dan Implementasi Kebijakan Perlindungan Data.',
                            'icon' => 'M9 12.75L11.25 15 15 9.75m-3-7.036A11.959 11.959 0 013.598 6 11.99 11.99 0 003 9.749c0 5.592 3.824 10.29 9 11.623 5.176-1.332 9-6.03 9-11.622A11.99 11.99 0 0018.402 6a11.959 11.959 0 01-1.909-.786A11.971 11.971 0 0012 2.25c-2.649 0-5.106.904-7.091 2.464z'
                        ]
                    ];

                    // Duplicate the jobs to show 9 total
                    $allJobs = array_merge($latestJobs, $latestJobs, $latestJobs);

                    // Filter jobs based on search parameters
                    $filteredJobs = $allJobs;
                    if (isset($_GET['posisi']) && !empty($_GET['posisi'])) {
                        $filteredJobs = array_filter($filteredJobs, function($job) {
                            return stripos($job['title'], $_GET['posisi']) !== false;
                        });
                    }
                    if (isset($_GET['lokasi']) && !empty($_GET['lokasi'])) {
                        $filteredJobs = array_filter($filteredJobs, function($job) {
                            return $job['location'] === $_GET['lokasi'];
                        });
                    }

                    foreach ($filteredJobs as $index => $job): ?>
                    <!-- Job Card -->
                    <div class="bg-white rounded-xl shadow-lg overflow-hidden hover:shadow-xl transition-shadow duration-300">
                        <div class="p-6">
                            <div class="flex items-start mb-4">
                                <div class="w-12 h-12 bg-orange-100 rounded-lg flex items-center justify-center mr-4">
                                    <svg class="w-6 h-6 text-[#FF7144]" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="<?php echo $job['icon']; ?>" />
                                    </svg>
                                </div>
                                <div>
                                    <h3 class="text-lg font-semibold text-slate-900"><?php echo htmlspecialchars($job['title']); ?></h3>
                                    <p class="text-sm text-slate-500"><?php echo htmlspecialchars($job['company']); ?></p>
                                </div>
                            </div>

                            <div class="flex flex-wrap gap-2 mb-4">
                                <span class="inline-flex items-center px-2 py-1 rounded-full text-xs font-medium bg-orange-100 text-orange-700">
                                    <svg class="w-3 h-3 mr-1" fill="currentColor" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd" d="M5.05 4.05a7 7 0 119.9 9.9L10 18.9l-4.95-4.95a7 7 0 010-9.9zM10 11a2 2 0 100-4 2 2 0 000 4z" clip-rule="evenodd" />
                                    </svg>
                                    <?php echo htmlspecialchars($job['location']); ?>
                                </span>
                                <span class="inline-flex items-center px-2 py-1 rounded-full text-xs font-medium bg-orange-100 text-orange-700">
                                    <svg class="w-3 h-3 mr-1" fill="currentColor" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm1-12a1 1 0 10-2 0v4a1 1 0 00.293.707l2.828 2.829a1 1 0 101.415-1.415L11 9.586V6z" clip-rule="evenodd" />
                                    </svg>
                                    <?php echo htmlspecialchars($job['type']); ?>
                                </span>
                                <span class="inline-flex items-center px-2 py-1 rounded-full text-xs font-medium bg-orange-100 text-orange-700">
                                    <?php echo htmlspecialchars($job['workType']); ?>
                                </span>
                            </div>

                            <p class="text-sm text-slate-600 mb-4 leading-relaxed">
                                <?php echo htmlspecialchars($job['description']); ?>
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
                    <?php endforeach; ?>

                    <?php if (empty($filteredJobs)): ?>
                    <div class="col-span-full text-center py-12">
                        <div class="text-gray-500 text-lg mb-4">Tidak ada lowongan yang ditemukan</div>
                        <p class="text-gray-400">Coba ubah kata kunci pencarian atau lokasi Anda</p>
                    </div>
                    <?php endif; ?>
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
                        <li><a href="index.php" class="hover:text-orange-200 transition-colors duration-200">Beranda</a></li>
                        <li><a href="lowongan.php" class="hover:text-orange-200 transition-colors duration-200">Lowongan Di AntiNganggur</a></li>
                        <li><a href="aboutus.php" class="hover:text-orange-200 transition-colors duration-200">Tentang Kami</a></li>
                        <li><a href="contact.php" class="hover:text-orange-200 transition-colors duration-200">Hubungi Kami</a></li>
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
                    <form class="space-y-3" method="POST" action="">
                        <input type="email" name="email" placeholder="Masukkan Email" class="w-full px-3 py-2 text-gray-900 rounded-lg focus:outline-none focus:ring-2 focus:ring-orange-300" required>
                        <textarea name="message" placeholder="Pesan Anda" rows="3" class="w-full px-3 py-2 text-gray-900 rounded-lg focus:outline-none focus:ring-2 focus:ring-orange-300 resize-none" required></textarea>
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
