<?php
include 'components/header.php';
?>
<!-- Hero Section -->
<section class="hero">
    <div class="hero-overlay"></div>
    <div class="hero-content">
        <h1 class="hero-title">OpenFlexure Diagnostics: Deteksi TBC Presisi Berbasis Open Source</h1>
        <p class="hero-subtitle">Mengembangkan solusi mikroskop berbiaya rendah dengan presisi tinggi untuk
            mendukung diagnosis Tuberkulosis (TBC) yang lebih cepat dan akurat di Indonesia.</p>
        <div class="hero-buttons">
            <a href="downloads.php" class="btn btn-primary">Unduh</a>
            <a href="docs/index.php" class="btn btn-secondary">Dokumentasi</a>
        </div>
    </div>

    <img loading="lazy" src="assets/images/mikroskop.webp" alt="Microscope" class="hero-microscope">
</section>

<!-- Features Section -->
<section class="features">
    <div class="container">
        <h2 class="section-title">Fitur Utama</h2>
        <div class="features-grid">
            <div class="feature-card card-large card-span-2">
                <div class="feature-content">
                    <h3 class="feature-title">Presisi Optik Sub-Mikrometer</h3>
                    <p class="feature-description">Visualisasi jelas basil TBC berukuran mikrometer.</p>
                </div>
                <div class="feature-image">
                    <div class="microscope-view"><img loading="lazy" src="./assets/images/preparat1.webp" alt="Citra mikroskopik preparat TBC"></div>
                </div>
            </div>
            <div class="feature-card card-vertical">
                <div class="feature-content">
                    <h3 class="feature-title">Fabrikasi 3D Printing Modular</h3>
                    <p class="feature-description">Komponen modular yang mudah dicetak dan diperbaiki.</p>
                </div>
                <div class="feature-image">
                    <div class="printing-parts"><img loading="lazy" src="./assets/images/3Dpart.webp" alt="Komponen 3D printing"></div>
                </div>
            </div>
            <div class="feature-card card-centered">
                <div class="feature-icon raspberry-icon"><img loading="lazy" src="./assets/images/raspberry.svg" alt="Raspberry Pi logo"></div>
                <h3 class="feature-title">Terintegrasi Raspberry Pi</h3>
                <p class="feature-description">Sistem digital otomatis untuk kontrol dan pencatatan.</p>
            </div>
            <div class="feature-card card-centered">
                <div class="feature-icon opensource-icon"><img loading="lazy" src="./assets/images/github.svg" alt="GitHub logo"></div>
                <h3 class="feature-title">100% Desain Open Source</h3>
                <p class="feature-description">Akses penuh desain dan kode untuk kolaborasi.</p>
            </div>
            <div class="feature-card card-centered">
                <div class="feature-icon cost-icon"><img loading="lazy" src="./assets/images/affordable-icon.svg" alt="Ikon biaya efektif"></div>
                <h3 class="feature-title">Solusi Biaya Efektif</h3>
                <p class="feature-description">Alternatif diagnosis berkualitas dengan biaya rendah.</p>
            </div>
        </div>
    </div>
</section>

<!-- Gallery Section -->
<section class="gallery">
    <div class="gallery-header">
        <h2 class="section-title">Galeri Citra Diagnostik</h2>
    </div>
    <div class="gallery-slider">
        <button class="gallery-nav prev" aria-label="Slide sebelumnya">&lt;</button>
        <div class="gallery-track">
            <div class="gallery-slide active">
                <div class="gallery-image"></div>
                <p class="gallery-caption">Hasil citra mikroskopis sampel dahak (Sputum Smear) yang menunjukkan
                    keberadaan basil TBC merah (Ziehl-Neelsen stain).</p>
            </div>
        </div>
        <button class="gallery-nav next" aria-label="Slide berikutnya">&gt;</button>
    </div>
</section>
<?php
include 'components/footer.php';
?>