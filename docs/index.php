<?php
$page_title = 'Dokumentasi - OpenFlexure ITB';
$base_url = '../';
$extra_css = '<link rel="stylesheet" href="../css/docs-index.css">';
include '../components/header.php';
?>

    <!-- Hero -->
    <div class="docs-home-hero">
        <h1>📖 Dokumentasi</h1>
        <p>Panduan lengkap untuk merakit, mengonfigurasi, dan mengoperasikan Automated Microscope OpenFlexure ITB.</p>
    </div>

    <!-- Quick Nav Cards -->
    <p class="docs-section-title">Mulai dari sini</p>
    <div class="docs-cards-grid">
        <a href="hardware-assembly.php" class="docs-card">
            <div class="docs-card-icon">🔩</div>
            <h3>Hardware Assembly</h3>
            <p>Panduan perakitan lengkap 8 tahap — dari Base Plate hingga Control Center. Termasuk Bill of Materials.</p>
            <span class="card-arrow">Lihat panduan →</span>
        </a>
        <a href="example.php" class="docs-card">
            <div class="docs-card-icon">💾</div>
            <h3>Software Setup</h3>
            <p>Flash SD Card, konfigurasi jaringan, dan instalasi perangkat lunak OpenFlexure pada Raspberry Pi.</p>
            <span class="card-arrow">Lihat panduan →</span>
        </a>
        <a href="../downloads.php" class="docs-card">
            <div class="docs-card-icon">📦</div>
            <h3>Download File STL</h3>
            <p>Unduh seluruh file STL untuk 3D printing semua komponen printed parts yang dibutuhkan.</p>
            <span class="card-arrow">Ke halaman unduh →</span>
        </a>
    </div>

    <!-- Prerequisites -->
    <div class="prereq-section" id="prerequisites">
        <h2>Prerequisites</h2>
        <ul class="prereq-list">
            <li><span class="icon">🖨️</span>3D Printer (FDM, min. 0.4mm nozzle)</li>
            <li><span class="icon">🔧</span>Basic hand tools (screwdriver, hex wrench)</li>
            <li><span class="icon">🍓</span>Raspberry Pi 4 (min. 2GB RAM)</li>
            <li><span class="icon">💾</span>microSD Card min. 16GB (Class 10)</li>
            <li><span class="icon">📷</span>Kamera kompatibel (Raspberry Pi Cam v2 atau USB)</li>
            <li><span class="icon">🔌</span>Power Supply 5V 3A untuk Raspberry Pi</li>
            <li><span class="icon">🧲</span>Stepper Motor Driver (TMC2208 / A4988)</li>
            <li><span class="icon">💻</span>Komputer untuk flash SD Card</li>
        </ul>
    </div>

<?php
include '../components/footer.php';
?>
