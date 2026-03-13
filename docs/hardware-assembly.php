<?php
$page_title = 'Panduan Perakitan Hardware - OpenFlexure ITB';
$base_url = '../';
$extra_css = '<link rel="stylesheet" href="../css/hardware.css"><link rel="stylesheet" href="../css/hardware-assembly.css">';
include '../components/header.php';
?>

<style>
/* ── Image Placeholder System ──────────────────────────── */
.img-placeholder {
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: center;
    gap: 0.5rem;
    background: linear-gradient(135deg, #f0f9fa 0%, #e0f2f1 100%);
    border: 2px dashed #80cbc4;
    border-radius: 10px;
    padding: 1.25rem 1rem;
    margin: 0.75rem 0;
    min-height: 160px;
    position: relative;
    cursor: default;
    transition: border-color 0.2s;
}
.img-placeholder:hover { border-color: var(--accent-teal); }

.img-placeholder .ph-icon {
    font-size: 2rem;
    opacity: 0.5;
}
.img-placeholder .ph-filename {
    font-family: 'Courier New', monospace;
    font-size: 0.78rem;
    font-weight: 700;
    color: var(--accent-teal);
    background: rgba(0,131,143,0.08);
    padding: 0.2rem 0.65rem;
    border-radius: 4px;
    letter-spacing: 0.02em;
}
.img-placeholder .ph-label {
    font-size: 0.8rem;
    color: #546e7a;
    text-align: center;
    max-width: 280px;
    line-height: 1.4;
}
.img-placeholder .ph-badge {
    position: absolute;
    top: 8px;
    right: 8px;
    background: #fff;
    border: 1px solid #b2dfdb;
    border-radius: 4px;
    font-size: 0.65rem;
    color: #80cbc4;
    font-weight: 600;
    padding: 2px 6px;
    text-transform: uppercase;
    letter-spacing: 0.05em;
}

/* landscape placeholder is wider */
.img-placeholder.landscape { min-height: 110px; }
.img-placeholder.portrait  { min-height: 200px; max-width: 220px; }

/* Side-by-side pair */
.img-pair {
    display: flex;
    gap: 0.75rem;
    margin: 0.75rem 0;
    flex-wrap: wrap;
}
.img-pair .img-placeholder { flex: 1; min-width: 140px; }

/* Image caption */
.img-caption {
    text-align: center;
    font-size: 0.8rem;
    color: var(--text-gray);
    font-style: italic;
    margin-bottom: 1rem;
    margin-top: -0.25rem;
}

/* Upload tip banner */
.upload-tip {
    background: linear-gradient(90deg, var(--primary-navy) 0%, #2d3e50 100%);
    color: rgba(255,255,255,0.9);
    border-radius: 10px;
    padding: 0.9rem 1.25rem;
    font-size: 0.85rem;
    display: flex;
    align-items: center;
    gap: 0.75rem;
    margin-bottom: 2rem;
}
.upload-tip strong { color: #80deea; }
.upload-tip .tip-icon { font-size: 1.3rem; flex-shrink: 0; }
.step-img {
    display: block;
    max-width: 100%;
    width: auto;
    max-height: 400px;
    margin: 0.75rem auto 0.25rem;
    border-radius: 10px;
    border: 1px solid var(--border-gray);
    box-shadow: 0 2px 8px rgba(0,0,0,0.08);
}
</style>

<!-- Sticky Reading Progress Bar -->
<div id="reading-progress-bar"></div>

<!-- Docs Layout -->
<div class="docs-layout">
    <!-- Sidebar -->
    <aside class="docs-sidebar">
        <nav class="docs-nav">
            <div class="docs-nav-section">
                <button class="docs-nav-toggle">GETTING STARTED</button>
                <ul class="docs-nav-list">
                    <li><a href="index.php">Introduction</a></li>
                    <li><a href="index.php#prerequisites">Prerequisites</a></li>
                </ul>
            </div>
            <div class="docs-nav-section">
                <button class="docs-nav-toggle active">HARDWARE ASSEMBLY</button>
                <ul class="docs-nav-list active">
                    <li><a href="#bom">Bill of Materials</a></li>
                    <li><a href="#tahap-1">Tahap 1: Base Plate</a></li>
                    <li><a href="#tahap-2">Tahap 2: Bracket & Lead Screw</a></li>
                    <li><a href="#tahap-3">Tahap 3: Motor Y-Axis</a></li>
                    <li><a href="#tahap-4">Tahap 4: Motor X-Axis</a></li>
                    <li><a href="#tahap-5">Tahap 5: Instalasi ke Mikroskop</a></li>
                    <li><a href="#tahap-6">Tahap 6: Base Preparat</a></li>
                    <li><a href="#tahap-7">Tahap 7: Kamera</a></li>
                    <li><a href="#tahap-8">Tahap 8: Control Center</a></li>
                </ul>
            </div>
            <div class="docs-nav-section">
                <button class="docs-nav-toggle">SOFTWARE SETUP</button>
                <ul class="docs-nav-list">
                    <li><a href="example.php">Flash SD Card</a></li>
                    <li><a href="example.php#network-config">Network Config</a></li>
                </ul>
            </div>
        </nav>
    </aside>

    <!-- Main Content -->
    <main class="docs-main">
        <div class="docs-breadcrumb">
            <span>Docs</span>
            <span class="breadcrumb-separator">›</span>
            <span>Hardware Assembly</span>
        </div>

        <article class="docs-article">
            <h1 class="docs-title">Panduan Perakitan Hardware</h1>
            <p class="step-text">Panduan lengkap perakitan Automated Microscope dari awal hingga siap digunakan. Ikuti setiap tahap secara berurutan untuk memastikan hasil yang optimal.</p>


            <!-- ═══════════════════════════════════════
                 BILL OF MATERIALS
            ══════════════════════════════════════════ -->
            <div class="docs-step" id="bom">
                <div class="step-header">
                    <span class="step-number" style="background:var(--secondary-navy)">📋</span>
                    <h2 class="step-title">Bill of Materials (BOM)</h2>
                </div>
                <p class="step-text">Daftar seluruh komponen yang dibutuhkan untuk merakit satu unit Automated Microscope.</p>

                <p class="step-section-title">Base Plate Setup</p>
                <table class="bom-table">
                    <thead><tr><th>Komponen</th><th style="text-align:center">Qty</th><th>Keterangan</th></tr></thead>
                    <tbody>
                        <tr class="category-row"><td colspan="3">🔧 Tools</td></tr>
                        <tr><td>Precision Phillips Screwdriver</td><td class="qty">1</td><td>—</td></tr>
                        <tr class="category-row"><td colspan="3">🖨️ Printed Parts</td></tr>
                        <tr><td>Base Plate Part</td><td class="qty">1</td><td>—</td></tr>
                        <tr><td>Left Back Flexible Cover</td><td class="qty">1</td><td>—</td></tr>
                        <tr class="category-row"><td colspan="3">⚙️ Mechanical Parts</td></tr>
                        <tr><td>M3 Nut</td><td class="qty">12</td><td>—</td></tr>
                        <tr><td>M3 Screw 26 mm</td><td class="qty">4</td><td>Untuk penguncian ke mikroskop</td></tr>
                        <tr><td>Ball Bearing 8×16×5 mm (688ZZ)</td><td class="qty">1</td><td>Bearing utama</td></tr>
                    </tbody>
                </table>

                <p class="step-section-title">Motor Y-Axis (1/80 Gearbox)</p>
                <table class="bom-table">
                    <thead><tr><th>Komponen</th><th style="text-align:center">Qty</th><th>Keterangan</th></tr></thead>
                    <tbody>
                        <tr class="category-row"><td colspan="3">🔧 Tools</td></tr>
                        <tr><td>Precision Phillips Screwdriver</td><td class="qty">1</td><td>—</td></tr>
                        <tr><td>2 mm Hex Wrench</td><td class="qty">1</td><td>—</td></tr>
                        <tr class="category-row"><td colspan="3">🖨️ Printed Parts</td></tr>
                        <tr><td>Face Plate (Rectangle)</td><td class="qty">1</td><td>—</td></tr>
                        <tr><td>Output Hub</td><td class="qty">1</td><td>—</td></tr>
                        <tr><td>Planet Carrier</td><td class="qty">1</td><td>—</td></tr>
                        <tr><td>Planet Gear</td><td class="qty">3</td><td>—</td></tr>
                        <tr><td>Sun Gear</td><td class="qty">1</td><td>—</td></tr>
                        <tr><td>Housing</td><td class="qty">1</td><td>—</td></tr>
                        <tr><td>Hand Wheel</td><td class="qty">1</td><td>—</td></tr>
                        <tr class="category-row"><td colspan="3">⚙️ Mechanical Parts</td></tr>
                        <tr><td>SRAM DUB Bearing 29×42×7 mm (6806/29)</td><td class="qty">1</td><td>—</td></tr>
                        <tr><td>M3 Nut</td><td class="qty">11</td><td>—</td></tr>
                        <tr><td>M3 Screw 32 mm</td><td class="qty">3</td><td>—</td></tr>
                        <tr><td>M3 Screw 6 mm</td><td class="qty">4</td><td>—</td></tr>
                        <tr><td>M3 Socket Head Hexagonal Cap Screw 19 mm</td><td class="qty">7</td><td>—</td></tr>
                        <tr><td>Ball Bearing 5×16×5 mm (625Z)</td><td class="qty">1</td><td>—</td></tr>
                        <tr><td>Ball Bearing 2×6×2 mm (MR62ZZ)</td><td class="qty">1</td><td>—</td></tr>
                        <tr><td>Nema 17 Dual Shaft Motor Stepper</td><td class="qty">1</td><td>—</td></tr>
                    </tbody>
                </table>

                <p class="step-section-title">Motor X-Axis (1/80 Gearbox)</p>
                <table class="bom-table">
                    <thead><tr><th>Komponen</th><th style="text-align:center">Qty</th><th>Keterangan</th></tr></thead>
                    <tbody>
                        <tr class="category-row"><td colspan="3">🔧 Tools</td></tr>
                        <tr><td>Precision Phillips Screwdriver</td><td class="qty">1</td><td>—</td></tr>
                        <tr><td>2 mm Hex Wrench</td><td class="qty">1</td><td>—</td></tr>
                        <tr class="category-row"><td colspan="3">🖨️ Printed Parts</td></tr>
                        <tr><td>Face Plate (Square)</td><td class="qty">1</td><td>Beda dengan Y-Axis</td></tr>
                        <tr><td>Output Hub</td><td class="qty">1</td><td>—</td></tr>
                        <tr><td>Planet Carrier</td><td class="qty">1</td><td>—</td></tr>
                        <tr><td>Planet Gear</td><td class="qty">3</td><td>—</td></tr>
                        <tr><td>Sun Gear</td><td class="qty">1</td><td>—</td></tr>
                        <tr><td>Housing</td><td class="qty">1</td><td>—</td></tr>
                        <tr><td>Hand Wheel</td><td class="qty">1</td><td>—</td></tr>
                        <tr class="category-row"><td colspan="3">⚙️ Mechanical Parts</td></tr>
                        <tr><td>SRAM DUB Bearing 29×42×7 mm (6806/29)</td><td class="qty">1</td><td>—</td></tr>
                        <tr><td>M3 Nut</td><td class="qty">9</td><td>—</td></tr>
                        <tr><td>M3 Screw 50 mm</td><td class="qty">2</td><td>Lebih panjang dari Y-Axis</td></tr>
                        <tr><td>M3 Screw 6 mm</td><td class="qty">4</td><td>—</td></tr>
                        <tr><td>M3 Socket Head Hexagonal Cap Screw 19 mm</td><td class="qty">7</td><td>—</td></tr>
                        <tr><td>Ball Bearing 5×16×5 mm (625Z)</td><td class="qty">1</td><td>—</td></tr>
                        <tr><td>Ball Bearing 2×6×2 mm (MR62ZZ)</td><td class="qty">1</td><td>—</td></tr>
                        <tr><td>Nema 17 Dual Shaft Motor Stepper</td><td class="qty">1</td><td>—</td></tr>
                    </tbody>
                </table>

                <p class="step-section-title">Base Preparat</p>
                <table class="bom-table">
                    <thead><tr><th>Komponen</th><th style="text-align:center">Qty</th><th>Keterangan</th></tr></thead>
                    <tbody>
                        <tr class="category-row"><td colspan="3">🖨️ Printed Parts</td></tr>
                        <tr><td>Base Preparat</td><td class="qty">1</td><td>—</td></tr>
                        <tr><td>Preparat Clipper</td><td class="qty">2</td><td>Penjepit kaca preparat</td></tr>
                        <tr class="category-row"><td colspan="3">⚙️ Mechanical Parts</td></tr>
                        <tr><td>M4 Nut</td><td class="qty">2</td><td>—</td></tr>
                        <tr><td>M4 Screw 31 mm</td><td class="qty">2</td><td>—</td></tr>
                        <tr><td>Blue Die Spring 9 mm (ISO 10243)</td><td class="qty">2</td><td>—</td></tr>
                        <tr><td>M4 Ring</td><td class="qty">2</td><td>—</td></tr>
                        <tr><td>M3 Screw 27 mm</td><td class="qty">2</td><td>—</td></tr>
                        <tr><td>M3 Nut</td><td class="qty">2</td><td>—</td></tr>
                        <tr><td>M3 Ring</td><td class="qty">2</td><td>—</td></tr>
                    </tbody>
                </table>

                <p class="step-section-title">Bracket & Lead Screw</p>
                <table class="bom-table">
                    <thead><tr><th>Komponen</th><th style="text-align:center">Qty</th><th>Keterangan</th></tr></thead>
                    <tbody>
                        <tr class="category-row"><td colspan="3">🔧 Tools</td></tr>
                        <tr><td>Precision Phillips Screwdriver</td><td class="qty">1</td><td>—</td></tr>
                        <tr><td>Precision Flathead Screwdriver</td><td class="qty">1</td><td>—</td></tr>
                        <tr class="category-row"><td colspan="3">🖨️ Printed Parts</td></tr>
                        <tr><td>Right Flexible Cover (3 Holes for Linear Rods)</td><td class="qty">2</td><td>—</td></tr>
                        <tr><td>Left Flexible Cover (With Bearing)</td><td class="qty">1</td><td>—</td></tr>
                        <tr><td>Back Cover</td><td class="qty">1</td><td>—</td></tr>
                        <tr><td>Left Bracket</td><td class="qty">1</td><td>—</td></tr>
                        <tr><td>Middle Bracket</td><td class="qty">1</td><td>—</td></tr>
                        <tr><td>Right Bracket</td><td class="qty">1</td><td>—</td></tr>
                        <tr class="category-row"><td colspan="3">⚙️ Mechanical Parts</td></tr>
                        <tr><td>M3 Screw 16 mm</td><td class="qty">6</td><td>—</td></tr>
                        <tr><td>M3 Self Tapping Screw 15 mm</td><td class="qty">8</td><td>Untuk Back Cover</td></tr>
                        <tr><td>Ball Bearing 8×16×5 mm (688ZZ)</td><td class="qty">3</td><td>—</td></tr>
                        <tr><td>M3 Screw 21 mm</td><td class="qty">6</td><td>—</td></tr>
                        <tr><td>T8 Lead Screw 142 mm</td><td class="qty">1</td><td>—</td></tr>
                        <tr><td>T8 Lead Screw 173 mm</td><td class="qty">1</td><td>—</td></tr>
                        <tr><td>Linear Rod 4×160 mm</td><td class="qty">5</td><td>—</td></tr>
                        <tr><td>Linear Rod 4×135 mm</td><td class="qty">2</td><td>—</td></tr>
                        <tr><td>Round Flange Brass Lead Screw Nut</td><td class="qty">3</td><td>—</td></tr>
                    </tbody>
                </table>
            </div>

            <!-- ═══════════════════════════════════════
                 TAHAP 1
            ══════════════════════════════════════════ -->
            <div class="docs-step" id="tahap-1">
                <div class="step-header">
                    <span class="step-number">1</span>
                    <h2 class="step-title">Persiapan Base Plate</h2>
                </div>
                <div class="stage-badge"><span class="stage-dot"></span>Fondasi utama alat</div>
                <div class="tools-chips">
                    <span class="chip">🔧 Phillips Screwdriver</span>
                    <span class="chip printed">🖨️ Base Plate Part</span>
                    <span class="chip printed">🖨️ Left Back Flexible Cover</span>
                </div>
                <p class="step-text">Langkah ini menyiapkan pondasi alat. Pastikan semua komponen sudah siap sebelum memulai.</p>

                <ul class="sub-steps">
                    <li>
                        <span class="sub-step-num">1</span>
                        <span><strong>Pasang Bearing Utama:</strong> Masukkan <strong>1× Ball Bearing 688ZZ</strong> ke dalam slot yang tersedia di <strong>Cover Kiri Belakang</strong> yang telah dipasang pada Base Plate.</span>
                    </li>
                </ul>

                <img loading="lazy" src="../assets/images/assembly/t1-bearing-cover.webp" 
                alt="Ball Bearing 688ZZ dimasukkan ke slot Cover Kiri Belakang pada Base Plate"
                class="step-img">
                <p class="img-caption">Gambar 1.1 — Pemasangan Ball Bearing 688ZZ pada Cover Kiri Belakang</p>

                <ul class="sub-steps">
                    <li>
                        <span class="sub-step-num">2</span>
                        <span><strong>Pasang Mur Pengunci:</strong> Masukkan <strong>6× M3 Nut</strong> ke dalam slot di sudut-sudut Base Plate.</span>
                    </li>
                </ul>

                <div class="step-note">
                    <strong>📌 Catatan:</strong> Pasang masing-masing 2 nut di setiap sudut, <em>kecuali</em> sudut yang dekat dengan Cover Kiri Belakang (karena sudah ada bearing di sana).
                </div>

                <img loading="lazy" src="../assets/images/assembly/t1-nut-baseplate.webp" 
                alt="6× M3 Nut terpasang di sudut-sudut Base Plate (2 per sudut, 3 sudut)"
                class="step-img">
                <p class="img-caption">Gambar 1.2 — M3 Nut terpasang di sudut-sudut Base Plate</p>
            </div>
            <!-- ═══════════════════════════════════════
                 TAHAP 2
            ══════════════════════════════════════════ -->
            <div class="docs-step" id="tahap-2">
                <div class="step-header">
                    <span class="step-number">2</span>
                    <h2 class="step-title">Perakitan Mekanisme Gerak (Bracket & Lead Screw)</h2>
                </div>
                <div class="stage-badge"><span class="stage-dot"></span>Sliding parts / bagian yang bergerak</div>
                <div class="tools-chips">
                    <span class="chip">🔧 Phillips Screwdriver</span>
                    <span class="chip">🔧 Flathead Screwdriver</span>
                </div>
                <p class="step-text">Langkah ini menggabungkan bagian yang bergerak (sliding parts).</p>

                <p class="step-section-title">A. Pemasangan Nut & Bracket</p>
                <ul class="sub-steps">
                    <li>
                        <span class="sub-step-letter">A</span>
                        <span><strong>Left Bracket:</strong> Pasang <strong>1× Round Flange Brass Lead Screw Nut</strong> pada Left Bracket (sebelah kiri slot bearing) menggunakan <strong>M3 Screw 16 mm</strong>.</span>
                    </li>
                </ul>

                <!-- IMG pair: Left Bracket sebelum & sesudah -->
                <div class="img-pair">
                    <img loading="lazy" src="../assets/images/assembly/t2-left-bracket-1.webp" 
                         alt="Left Bracket sebelum" class="step-img">
                    <img loading="lazy" src="../assets/images/assembly/t2-left-bracket-2.webp" 
                         alt="Left Bracket sesudah" class="step-img">
                </div>
                <p class="img-caption">Gambar 2.1 — Pemasangan Lead Screw Nut pada Left Bracket</p>

                <ul class="sub-steps">
                    <li>
                        <span class="sub-step-letter">B</span>
                        <span><strong>Middle Bracket:</strong> Pasang <strong>Round Flange Brass Nut</strong> di <strong>kedua sisi</strong> Middle Bracket (kiri dan kanan).</span>
                    </li>
                    <li>
                        <span class="sub-step-letter">C</span>
                        <span><strong>Right Cover:</strong> Pasang <strong>1× Cover Kanan</strong> di bagian belakang kanan Base Plate menggunakan <strong>M3 Screw 21 mm</strong>.</span>
                    </li>
                </ul>

                <!-- IMG: Right Cover terpasang -->
                <img loading="lazy" src="../assets/images/assembly/t2-right-cover.webp" 
                     alt="Cover Kanan terpasang di bagian belakang kanan Base Plate"
                     class="step-img">
                <p class="img-caption">Gambar 2.2 — Pemasangan Cover Kanan pada Base Plate</p>

                <p class="step-section-title">B. Penyatuan Komponen (Assembly)</p>
                <ul class="sub-steps">
                    <li>
                        <span class="sub-step-num">4</span>
                        <span><strong>Middle Assembly:</strong> Ambil Middle Bracket, lalu pasang <strong>Lead Screw 142 mm</strong> beserta <strong>2× Ball Bearing 688ZZ</strong> di dalamnya.</span>
                    </li>
                </ul>

                <!-- IMG: Middle Assembly landscape -->
                <img loading="lazy" src="../assets/images/assembly/t2-middle-assembly.webp" 
                     alt="Middle Bracket dengan Lead Screw 142 mm dan 2× Ball Bearing 688ZZ terpasang di dalamnya"
                     class="step-img">
                <p class="img-caption">Gambar 2.3 — Middle Assembly dengan Lead Screw dan Ball Bearing</p>

                <ul class="sub-steps">
                    <li>
                        <span class="sub-step-num">5</span>
                        <span><strong>Penyatuan Bracket:</strong> Gabungkan Left Bracket, Middle Bracket, dan Right Bracket menjadi satu kesatuan menggunakan <strong>2× Linear Rods (4×135 mm)</strong>.</span>
                    </li>
                    <li>
                        <span class="sub-step-num">6</span>
                        <span><strong>Tutup Belakang:</strong> Pasang Back Cover pada Left Bracket dan Right Bracket untuk mengunci posisi. Gunakan <strong>8× M3 Self Tapping Screw 15 mm</strong>.</span>
                    </li>
                </ul>

                <!-- IMG: Back Cover terpasang -->
                <img loading="lazy" src="../assets/images/assembly/t2-back-cover.webp" 
                     alt="Back Cover mengunci posisi Left dan Right Bracket dengan 8× M3 Self Tapping Screw"
                     class="step-img">
                <p class="img-caption">Gambar 2.4 — Back Cover terpasang mengunci posisi bracket</p>

                <p class="step-section-title">C. Pemasangan Rods & Lead Screw Panjang</p>
                <ul class="sub-steps">
                    <li>
                        <span class="sub-step-num">7</span>
                        <span><strong>Linear Rods Panjang:</strong> Pasang <strong>2× Linear Rods (4×160 mm)</strong> pada Left Bracket, dan <strong>3× Linear Rods (4×160 mm)</strong> pada Right Bracket.</span>
                    </li>
                </ul>

                <!-- IMG: Linear Rods terpasang -->
                <img loading="lazy" src="../assets/images/assembly/t2-linear-rods.webp" 
                     alt="5× Linear Rods (4×160 mm) terpasang: 2 di Left Bracket, 3 di Right Bracket"
                     class="step-img">
                <p class="img-caption">Gambar 2.5 — Pemasangan Linear Rods pada bracket</p>

                <ul class="sub-steps">
                    <li>
                        <span class="sub-step-num">8</span>
                        <span><strong>T8 Lead Screw:</strong> Masukkan <strong>1× T8 Lead Screw 173 mm</strong> pada Left Bracket. Pastikan posisinya sejajar dengan Linear Rods dan ujungnya menembus Ball Bearing 688ZZ yang ada di Base Plate.</span>
                    </li>
                </ul>

                <!-- IMG: T8 Lead Screw -->
                <img loading="lazy" src="../assets/images/assembly/t2-lead-screw-173.webp" 
                     alt="T8 Lead Screw 173 mm terpasang sejajar dengan Linear Rods, ujung menembus Ball Bearing Base Plate"
                     class="step-img">
                <p class="img-caption">Gambar 2.6 — T8 Lead Screw 173 mm terpasang pada Left Bracket</p>

                <p class="step-section-title">D. Penutupan Akhir (Flexible Covers)</p>
                <ul class="sub-steps">
                    <li>
                        <span class="sub-step-num">9</span>
                        <span><strong>Left Cover:</strong> Pasang Left Flexible Cover di bagian kiri Base Plate menggunakan <strong>M3 Screw 20 mm</strong>.</span>
                    </li>
                </ul>

                <!-- IMG pair: Left Cover -->
                <div class="img-pair">
                    <img loading="lazy" src="../assets/images/assembly/t2-left-cover-1.webp" 
                         alt="Left Flexible Cover sebelum dipasang — tampak lubang untuk Rods dan Bearing"
                         class="step-img">
                    <img loading="lazy" src="../assets/images/assembly/t2-left-cover-2.webp" 
                         alt="Left Flexible Cover sesudah dipasang"
                         class="step-img">
                </div>
                <p class="img-caption">Gambar 2.7 — Pemasangan Left Flexible Cover</p>

                <ul class="sub-steps">
                    <li>
                        <span class="sub-step-num">10</span>
                        <span><strong>Right Cover:</strong> Pasang Right Flexible Cover di bagian kanan Base Plate menggunakan <strong>M3 Screw 20 mm</strong>. Pastikan Linear Rods masuk ke lubang cover dengan pas.</span>
                    </li>
                </ul>

                <!-- IMG pair: Right Cover -->
                <div class="img-pair">
                    <img loading="lazy" src="../assets/images/assembly/t2-right-flex-cover-1.webp" 
                         alt="Right Flexible Cover — tampak 3 lubang untuk Linear Rods"
                         class="step-img">
                    <img loading="lazy" src="../assets/images/assembly/t2-right-flex-cover-2.webp" 
                         alt="Right Flexible Cover terpasang, Rods masuk ke lubang dengan pas"
                         class="step-img">
                </div>
                <p class="img-caption">Gambar 2.8 — Pemasangan Right Flexible Cover</p>

                <div class="step-warning">
                    <strong>⚠️ Penting:</strong> Pastikan Linear Rods masuk pas ke lubang cover dan Lead Screw masuk tepat ke Ball Bearing pada kedua cover. Jangan dipaksakan jika terasa berat — periksa alignment terlebih dahulu.
                </div>
            </div>

            <!-- ═══════════════════════════════════════
                 TAHAP 3
            ══════════════════════════════════════════ -->
            <div class="docs-step" id="tahap-3">
                <div class="step-header">
                    <span class="step-number">3</span>
                    <h2 class="step-title">Perakitan Motor Y-Axis (Gearbox 1/80)</h2>
                </div>
                <div class="stage-badge"><span class="stage-dot"></span>Motor penggerak sumbu Y</div>
                <div class="tools-chips">
                    <span class="chip">🔧 Phillips Screwdriver</span>
                    <span class="chip">🔧 2mm Hex Wrench</span>
                    <span class="chip printed">🖨️ Face Plate (Rectangle)</span>
                </div>

                <p class="step-section-title">Persiapan Shaft</p>
                <ul class="sub-steps">
                    <li><span class="sub-step-num">1</span><span>Pasang <strong>Sun Gear</strong> pada shaft output (depan) motor stepper.</span></li>
                    <li><span class="sub-step-num">2</span><span>Pasang <strong>Hand Wheel</strong> (knob manual) pada ujung shaft belakang motor.</span></li>
                </ul>

                <p class="step-section-title">Housing Motor</p>
                <ul class="sub-steps">
                    <li><span class="sub-step-num">3</span><span>Pasang <strong>Housing</strong> pada body motor stepper. Kencangkan dengan <strong>4× M3 Socket Head Hexagonal Cap Screw 19 mm</strong>.</span></li>
                </ul>

                <p class="step-section-title">Planet Gear Assembly</p>
                <ul class="sub-steps">
                    <li><span class="sub-step-num">4</span><span>Pasang <strong>1× Ball Bearing 625Z</strong> di tengah-tengah Planet Carrier.</span></li>
                    <li><span class="sub-step-num">5</span><span>Pasang <strong>3× Ball Bearing MR62ZZ</strong> pada ketiga posisi Planet Gear.</span></li>
                    <li><span class="sub-step-num">6</span><span>Pasang Planet Gear ke Carrier menggunakan <strong>3× M3 Nut</strong> dan <strong>3× M3 Socket Head Screw 19 mm</strong>.</span></li>
                </ul>

                <p class="step-section-title">Finalisasi Gearbox</p>
                <ul class="sub-steps">
                    <li><span class="sub-step-num">7</span><span>Masukkan rakitan gear ke dalam Housing.</span></li>
                    <li><span class="sub-step-num">8</span><span><strong>Persiapan Output Hub:</strong> Pasang <strong>4× M3 Nut</strong> dan <strong>4× M3 Screw 6 mm</strong> pada 4 lubang di Output Hub.</span></li>
                    <li><span class="sub-step-num">9</span><span>Tutup gearbox menggunakan Output Hub yang sudah dipasangi baut tersebut.</span></li>
                    <li><span class="sub-step-num">10</span><span>Pasang <strong>4× M3 Nut</strong> di keempat sudut Housing untuk persiapan penguncian.</span></li>
                </ul>

                <!-- IMG pair: Gearbox Y-Axis -->
                <div class="img-pair">
                    <img loading="lazy" src="../assets/images/assembly/t3-gearbox-y-1.webp" 
                         alt="Rakitan planet gear di dalam housing sebelum ditutup Output Hub"
                         class="step-img">
                    <img loading="lazy" src="../assets/images/assembly/t3-gearbox-y-2.webp" 
                         alt="Gearbox Y-Axis lengkap — Output Hub terpasang, M3 Nut di sudut Housing"
                         class="step-img">
                </div>
                <p class="img-caption">Gambar 3.1 — Rakitan Gearbox Y-Axis</p>

                <p class="step-section-title">Mounting ke Base</p>
                <ul class="sub-steps">
                    <li><span class="sub-step-num">11</span><span>Siapkan <strong>Face Plate (Bentuk Persegi Panjang / Rectangle)</strong>.</span></li>
                    <li><span class="sub-step-num">12</span><span>Pasang <strong>SRAM DUB Bearing (29×42×7 mm)</strong> bersama Face Plate.</span></li>
                </ul>

                <!-- IMG: SRAM DUB Bearing + Face Plate Rectangle -->
                <img loading="lazy" src="../assets/images/assembly/t3-faceplate-bearing-y.webp" 
                     alt="SRAM DUB Bearing (29×42×7 mm) terpasang bersama Face Plate Rectangle"
                     class="step-img">
                <p class="img-caption">Gambar 3.2 — SRAM DUB Bearing dan Face Plate Rectangle</p>

                <ul class="sub-steps">
                    <li><span class="sub-step-num">13</span><span>Gunakan <strong>3× M3 Screw 32 mm</strong> untuk mengunci gearbox lengkap ke Face Plate dan base plate.</span></li>
                </ul>

                <!-- IMG: Motor Y terpasang di base -->
                <img loading="lazy" src="../assets/images/assembly/t3-motor-y-mounted.webp" 
                     alt="Motor Y-Axis beserta gearbox terpasang penuh pada base plate dengan 3× M3 Screw 32 mm"
                     class="step-img">
                <p class="img-caption">Gambar 3.3 — Motor Y-Axis terpasang pada base plate</p>
            </div>

            <!-- ═══════════════════════════════════════
                 TAHAP 4
            ══════════════════════════════════════════ -->
            <div class="docs-step" id="tahap-4">
                <div class="step-header">
                    <span class="step-number">4</span>
                    <h2 class="step-title">Perakitan Motor X-Axis (Gearbox 1/80)</h2>
                </div>
                <div class="stage-badge"><span class="stage-dot"></span>Motor penggerak sumbu X — mirip Y-Axis, beda di plate & panjang baut</div>
                <div class="tools-chips">
                    <span class="chip">🔧 Phillips Screwdriver</span>
                    <span class="chip">🔧 2mm Hex Wrench</span>
                    <span class="chip printed">🖨️ Face Plate (Square)</span>
                </div>

                <p class="step-text">Langkahnya identik dengan Tahap 3 (Motor Y-Axis), dengan dua perbedaan utama:</p>
                <div class="step-note">
                    <strong>🔄 Perbedaan dari Y-Axis:</strong><br>
                    1. Gunakan Face Plate <strong>Square (Persegi)</strong> — bukan Rectangle.<br>
                    2. Gunakan <strong>2× M3 Screw 50 mm</strong> untuk mounting ke base (bukan 32 mm).<br>
                    3. Hanya pasang <strong>2× M3 Nut</strong> di sudut-sudut atas Housing (bukan 4).
                </div>

                <p class="step-section-title">Persiapan Shaft</p>
                <ul class="sub-steps">
                    <li><span class="sub-step-num">1</span><span>Pasang Sun Gear pada shaft output depan.</span></li>
                    <li><span class="sub-step-num">2</span><span>Pasang Hand Wheel pada shaft belakang.</span></li>
                </ul>

                <p class="step-section-title">Housing & Gearbox</p>
                <ul class="sub-steps">
                    <li><span class="sub-step-num">3</span><span>Pasang Housing pada motor menggunakan <strong>4× M3 Socket Head Hexagonal Cap Screw 19 mm</strong>.</span></li>
                    <li><span class="sub-step-num">4</span><span>Pasang <strong>1× Ball Bearing 625Z</strong> di tengah Planet Carrier, dan <strong>3× Ball Bearing MR62ZZ</strong> untuk Planet Gear.</span></li>
                    <li><span class="sub-step-num">5</span><span>Rakit Planet Gear menggunakan <strong>3× M3 Nut</strong> dan <strong>3× M3 Socket Head Screw 19 mm</strong>.</span></li>
                    <li><span class="sub-step-num">6</span><span>Masukkan gear ke dalam Housing, pasang Output Hub dengan <strong>4× M3 Nut</strong> dan <strong>4× M3 Screw 6 mm</strong>.</span></li>
                    <li><span class="sub-step-num">7</span><span>Pasang <strong>2× M3 Nut</strong> di sudut-sudut atas Housing.</span></li>
                </ul>

                <p class="step-section-title">Mounting ke Base</p>
                <ul class="sub-steps">
                    <li><span class="sub-step-num">8</span><span>Pasang <strong>SRAM DUB Bearing (29×42×7 mm)</strong> bersama Face Plate <strong>Square</strong> ke posisi mountingnya.</span></li>
                    <li><span class="sub-step-num">9</span><span>Gunakan <strong>2× M3 Screw 50 mm</strong> untuk mengunci gearbox ke Face Plate dan base plate.</span></li>
                </ul>

                <!-- IMG: Motor X terpasang — landscape -->
                <img loading="lazy" src="../assets/images/assembly/t4-motor-x-mounted.webp" 
                     alt="Motor X-Axis terpasang dengan Face Plate Square dan 2× M3 Screw 50 mm"
                     class="step-img">
                <p class="img-caption">Gambar 4.1 — Motor X-Axis terpasang pada base plate</p>
            </div>

            <!-- ═══════════════════════════════════════
                 TAHAP 5
            ══════════════════════════════════════════ -->
            <div class="docs-step" id="tahap-5">
                <div class="step-header">
                    <span class="step-number">5</span>
                    <h2 class="step-title">Instalasi Rangka Utama ke Mikroskop</h2>
                </div>
                <div class="stage-badge"><span class="stage-dot"></span>Menyatukan seluruh sistem ke unit mikroskop</div>
                <p class="step-text">Pastikan seluruh rangka (Base Plate, Bracket, dan Motor) sudah terakit lengkap menjadi satu kesatuan sebelum memulai tahap ini.</p>

                <ul class="sub-steps">
                    <li><span class="sub-step-num">1</span><span><strong>Persiapan:</strong> Pastikan seluruh rangka sudah terakit lengkap menjadi satu kesatuan.</span></li>
                    <li><span class="sub-step-num">2</span><span><strong>Penjajaran (Alignment):</strong> Letakkan rangka di atas plate mikroskop. Sejajarkan <strong>4 lubang</strong> yang ada di tengah Base Plate dengan lubang baut pada plate mikroskop.</span></li>
                    <li><span class="sub-step-num">3</span><span><strong>Penguncian:</strong> Pasang dan kencangkan rangka ke mikroskop menggunakan <strong>4× M3 Screw 26 mm</strong> dan <strong>4× M3 Nut</strong>.</span></li>
                </ul>

                <!-- IMG pair: Rangka di atas plate + setelah dikunci -->
                <div class="img-pair">
                    <img loading="lazy" src="../assets/images/assembly/t5-alignment.webp" 
                         alt="Rangka ditempatkan di atas plate mikroskop — tampak 4 lubang yang disejajarkan"
                         class="step-img">
                    <img loading="lazy" src="../assets/images/assembly/t5-locked.webp" 
                         alt="Rangka terkunci penuh ke mikroskop dengan 4× M3 Screw 26 mm"
                         class="step-img">
                </div>
                <p class="img-caption">Gambar 5.1 — Rangka terpasang pada plate mikroskop</p>
            </div>

            <!-- ═══════════════════════════════════════
                 TAHAP 6
            ══════════════════════════════════════════ -->
            <div class="docs-step" id="tahap-6">
                <div class="step-header">
                    <span class="step-number">6</span>
                    <h2 class="step-title">Perakitan Base Preparat (Dudukan Sampel)</h2>
                </div>
                <div class="stage-badge"><span class="stage-dot"></span>Penjepit kaca preparat</div>
                <div class="tools-chips">
                    <span class="chip printed">🖨️ Base Preparat</span>
                    <span class="chip printed">🖨️ Preparat Clipper ×2</span>
                </div>

                <p class="step-section-title">A. Perakitan Unit Base Preparat</p>
                <ul class="sub-steps">
                    <li><span class="sub-step-num">1</span><span><strong>Pemasangan Per (Spring):</strong> Masukkan <strong>2× Blue Die Spring (9 mm)</strong> ke dalam lubang yang tersedia di sisi kiri dan kanan Base Preparat.</span></li>
                    <li><span class="sub-step-num">2</span><span><strong>Pemasangan Clipper:</strong> Letakkan Clipper di atas masing-masing per (spring).</span></li>
                    <li>
                        <span class="sub-step-num">3</span>
                        <span><strong>Penguncian Clipper:</strong> Kunci clipper dengan urutan: masukkan <strong>M4 Screw 31 mm</strong> dari atas clipper → kunci di bagian bawah dengan <strong>M4 Ring</strong> → kunci dengan <strong>M4 Nut</strong>. Lakukan untuk kedua sisi.</span>
                    </li>
                </ul>

                <!-- IMG: Base Preparat dengan spring + clipper -->
                <img loading="lazy" src="../assets/images/assembly/t6-base-preparat.webp" 
                     alt="Unit Base Preparat lengkap — 2× clipper terpasang dengan spring, M4 Screw, Ring, dan Nut"
                     class="step-img">
                <p class="img-caption">Gambar 6.1 — Unit Base Preparat dengan clipper dan spring terpasang</p>

                <p class="step-section-title">B. Pemasangan ke Sistem Gerak</p>
                <ul class="sub-steps">
                    <li><span class="sub-step-num">4</span><span><strong>Persiapan Middle Bracket:</strong> Masukkan <strong>2× M3 Nut</strong> ke dalam lubang hexagonal yang terdapat pada Middle Bracket.</span></li>
                    <li><span class="sub-step-num">5</span><span><strong>Penyatuan:</strong> Pasang unit Base Preparat yang sudah jadi ke Middle Bracket.</span></li>
                    <li><span class="sub-step-num">6</span><span><strong>Penguncian Akhir:</strong> Kunci posisinya menggunakan <strong>2× M3 Ring</strong> dan <strong>2× M3 Screw 27 mm</strong>. Pastikan kencang agar preparat stabil.</span></li>
                </ul>

                <!-- IMG: Base Preparat di Middle Bracket -->
                <img loading="lazy" src="../assets/images/assembly/t6-preparat-mounted.webp" 
                     alt="Base Preparat terpasang pada Middle Bracket, dikunci dengan M3 Ring dan M3 Screw 27 mm"
                     class="step-img">
                <p class="img-caption">Gambar 6.2 — Base Preparat terpasang pada Middle Bracket</p>
            </div>

            <!-- ═══════════════════════════════════════
                 TAHAP 7
            ══════════════════════════════════════════ -->
            <div class="docs-step" id="tahap-7">
                <div class="step-header">
                    <span class="step-number">7</span>
                    <h2 class="step-title">Pemasangan Kamera (Mounting Camera)</h2>
                </div>
                <div class="stage-badge"><span class="stage-dot"></span>Sistem optik</div>
                <div class="tools-chips">
                    <span class="chip printed">🖨️ Camera Mounting</span>
                    <span class="chip">📷 Kamera</span>
                </div>

                <ul class="sub-steps">
                    <li><span class="sub-step-num">1</span><span><strong>Rakitan Kamera:</strong> Pasang kamera ke dalam <strong>Mounting Camera</strong> (adapter).</span></li>
                </ul>

                <!-- IMG: Kamera di dalam mounting -->
                <img loading="lazy" src="../assets/images/assembly/t7-camera-mount.webp" 
                     alt="Kamera terpasang di dalam Mounting Camera adapter — tampak lensa menghadap ke dalam"
                     class="step-img">
                <p class="img-caption">Gambar 7.1 — Kamera terpasang pada Mounting Camera adapter</p>

                <ul class="sub-steps">
                    <li><span class="sub-step-num">2</span><span><strong>Instalasi ke Mikroskop:</strong> Masukkan unit Mounting Camera beserta kameranya ke dalam lubang <strong>Optical Path</strong> (jalur optik) pada mikroskop.</span></li>
                </ul>

                <!-- IMG: Camera unit di jalur optik -->
                <img loading="lazy" src="../assets/images/assembly/t7-camera-installed.webp" 
                     alt="Unit kamera dan mounting terpasang di dalam lubang Optical Path mikroskop"
                     class="step-img">
                <p class="img-caption">Gambar 7.2 — Unit kamera dan mounting terpasang di dalam lubang Optical Path mikroskop</p>
            </div>

            <!-- ═══════════════════════════════════════
                 TAHAP 8
            ══════════════════════════════════════════ -->
            <div class="docs-step" id="tahap-8">
                <div class="step-header">
                    <span class="step-number">8</span>
                    <h2 class="step-title">Pemasangan Control Center (Case & Base)</h2>
                </div>
                <div class="stage-badge"><span class="stage-dot"></span>Wadah komponen elektronik</div>
                <div class="tools-chips">
                    <span class="chip printed">🖨️ Control Case</span>
                    <span class="chip printed">🖨️ Control Base</span>
                    <span class="chip">🔌 Double Tape kuat</span>
                </div>

                <ul class="sub-steps">
                    <li><span class="sub-step-num">1</span><span><strong>Persiapan:</strong> Siapkan komponen hasil cetak 3D Control Base dan Control Case.</span></li>
                    <li><span class="sub-step-num">2</span><span><strong>Pemasangan Base:</strong> Tempelkan <strong>Double Tape</strong> yang kuat pada bagian bawah Control Base. Rekatkan pada posisi yang diinginkan di <strong>Stand Microscope</strong>. Pastikan posisinya tidak mengganggu pergerakan meja preparat.</span></li>
                </ul>

                <!-- IMG: Control Base di stand -->
                <img loading="lazy" src="../assets/images/assembly/t8-control-base.webp" 
                     alt="Control Base ditempel pada Stand Microscope menggunakan Double Tape — posisi tidak mengganggu pergerakan meja"
                     class="step-img">
                <p class="img-caption">Gambar 8.1 — Control Base terpasang pada stand mikroskop</p>

                <ul class="sub-steps">
                    <li><span class="sub-step-num">3</span><span><strong>Penutupan:</strong> Setelah komponen elektronik dipasang dan dirapikan di dalam base (pada tahap <em>wiring</em> nanti), tutup menggunakan <strong>Control Case</strong>. Pastikan casing menutup dengan rapat (snap-fit atau terkunci) untuk melindungi elektronik dari debu.</span></li>
                </ul>

                <!-- IMG: Control Case tertutup -->
                <img loading="lazy" src="../assets/images/assembly/t8-control-case.webp" 
                     alt="Control Case menutup rapat di atas Control Base — tampak snap-fit atau pengunci terpasang"
                     class="step-img">
                <p class="img-caption">Gambar 8.2 — Control Case menutup komponen elektronik</p>

                <div class="step-note">
                    <strong>✅ Selesai!</strong> Hardware assembly sudah lengkap. Lanjut ke tahap Software Setup untuk mengonfigurasi Raspberry Pi dan menjalankan perangkat lunak.
                </div>

                <div style="margin-top:1.5rem">
                    <a href="example.php" class="download-btn" style="display:inline-block;text-decoration:none;">
                        Lanjut ke Software Setup →
                    </a>
                </div>
            </div>

        </article>
    </main>
</div>

<script>
(function () {
    /* ── Reading Progress Bar ── */
    const bar = document.getElementById('reading-progress-bar');

    function updateReadingProgress() {
        const scrollTop    = window.scrollY;
        const docHeight    = document.documentElement.scrollHeight - window.innerHeight;
        const pct          = docHeight > 0 ? (scrollTop / docHeight) * 100 : 0;
        bar.style.width    = pct.toFixed(1) + '%';
    }

    window.addEventListener('scroll', updateReadingProgress, { passive: true });
    updateReadingProgress(); // init on load

    /* ── Sidebar Scroll-Spy ── */
    const sectionIds = ['bom','tahap-1','tahap-2','tahap-3','tahap-4','tahap-5','tahap-6','tahap-7','tahap-8'];
    const navLinks   = Array.from(document.querySelectorAll('.docs-nav-list a[href^="#"]'));

    function setNavActive(id) {
        navLinks.forEach(link => {
            link.classList.toggle('active', link.getAttribute('href').replace('#','') === id);
        });
    }

    const observer = new IntersectionObserver((entries) => {
        const visible = entries
            .filter(e => e.isIntersecting)
            .sort((a, b) => a.boundingClientRect.top - b.boundingClientRect.top);
        if (visible.length > 0) setNavActive(visible[0].target.id);
    }, { rootMargin: '-20% 0px -60% 0px', threshold: 0 });

    sectionIds.forEach(id => {
        const el = document.getElementById(id);
        if (el) observer.observe(el);
    });

    navLinks.forEach(link => {
        link.addEventListener('click', function () {
            setNavActive(this.getAttribute('href').replace('#',''));
        });
    });
})();
</script>

<?php include '../components/footer.php'; ?>