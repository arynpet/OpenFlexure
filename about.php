<?php
$page_title = 'Tentang Kami - OpenFlexure ITB';
include 'components/header.php';
?>

    <!-- About Hero -->
    <section class="about-hero">
        <div class="about-overlay"></div>
        <h1 class="about-hero-title">About Us</h1>
    </section>

    <!-- About Content -->
    <section class="about-content">
        <div class="container">
            <h2 class="about-section-title">Tentang Proyek ini</h2>
            <div class="about-text-block">
                <p>Proyek ini merupakan inisiatif riset interdisipliner di Institut Teknologi Bandung (ITB) yang
                    bertujuan untuk mengatasi tantangan diagnosa TBC di daerah dengan keterbatasan fasilitas medis.</p>
                <p>Dengan memanfaatkan teknologi OpenFlexure Microscope, kami memodifikasi dan mengoptimalkan alat ini
                    secara khusus untuk deteksi bakteri <em>Mycobacterium tuberculosis</em>. Kami percaya bahwa
                    teknologi sains harus inklusif dan dapat diakses oleh semua lapisan masyarakat. Melalui pendekatan
                    open source hardware, kami berharap berkontribusi dalam dapat membantu tenaga kesehatan dalam upaya
                    eliminasi TBC di Indonesia.</p>
            </div>
        </div>
    </section>

    <!-- Team Section -->
    <section class="team-section">
        <div class="container">
            <h2 class="team-title">TIM KAMI</h2>

            <!-- Lead -->
            <div class="team-lead">
                <div class="team-member-card lead-card">
                    <div class="member-photo">
                        <img src="assets/images/team/1.jpeg" alt="Budi Santoso">
                    </div>
                    <h3 class="member-name">BUDI SANTOSO</h3>
                    <p class="member-role">Software & Computer Vision Engineer</p>
                    <p class="member-desc">Mengembangkan algoritma pengolahan citra untuk deteksi otomatis serta
                        antarmuka pengguna.</p>
                </div>
            </div>

            <!-- Team Members -->
            <div class="team-grid">
                <div class="team-member-card">
                    <div class="member-photo">
                        <img src="assets/images/team/2.jpeg" alt="Rizky Pratama">
                    </div>
                    <h3 class="member-name">RIZKY PRATAMA</h3>
                    <p class="member-role">Lead Mechanical Engineer</p>
                    <p class="member-desc">Merancang struktur modular dan menyempurnakan sistem aktuator presisi.</p>
                </div>
                <div class="team-member-card">
                    <div class="member-photo">
                        <img src="assets/images/team/3.jpeg" alt="Rahmat Hidayat">
                    </div>
                    <h3 class="member-name">RAHMAT HIDAYAT</h3>
                    <p class="member-role">Embedded Systems Developer</p>
                    <p class="member-desc">Mengintegrasikan Raspberry Pi serta mengembangkan antarmuka pengguna.</p>
                </div>
                <div class="team-member-card">
                    <div class="member-photo">
                        <img src="assets/images/team/4.jpeg" alt="Ryan Gosling">
                    </div>
                    <h3 class="member-name">RYAN GOSLING</h3>
                    <p class="member-role">Biomedical Researcher</p>
                    <p class="member-desc">Melakukan validasi sampel klinis dan standarisasi protokol medis.</p>
                </div>
            </div>
        </div>
    </section>

<?php include 'components/footer.php'; ?>