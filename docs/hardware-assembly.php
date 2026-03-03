<?php
$page_title = 'Dokumentasi - OpenFlexure ITB';
$base_url = '../';
$extra_css = '<link rel="stylesheet" href="../css/hardware.css">';
include '../components/header.php';
?>
    <!-- Docs Layout -->
    <div class="docs-layout">
        <!-- Sidebar -->
        <aside class="docs-sidebar">
            <nav class="docs-nav">
                <div class="docs-nav-section">
                    <button class="docs-nav-toggle">GETTING STARTED</button>
                    <ul class="docs-nav-list">
                        <li><a href="index.html">Introduction</a></li>
                        <li><a href="index.html#prerequisites">Prerequisites</a></li>
                    </ul>
                </div>
                <div class="docs-nav-section">
                    <button class="docs-nav-toggle active">HARDWARE ASSEMBLY</button>
                    <ul class="docs-nav-list active">
                        <li><a href="#bom" class="active">Bill of Materials</a></li>
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
                        <li><a href="example.html">Flash SD Card</a></li>
                        <li><a href="example.html#network-config">Network Config</a></li>
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

                <!-- Progress Bar -->
                <div class="docs-progress">
                    <div class="progress-item done"></div>
                    <div class="progress-item done"></div>
                    <div class="progress-item active"></div>
                    <div class="progress-item"></div>
                    <div class="progress-item"></div>
                    <div class="progress-item"></div>
                    <div class="progress-item"></div>
                    <div class="progress-item"></div>
                </div>

                <!-- ===== BILL OF MATERIALS ===== -->
                <div class="docs-step" id="bom">
                    <div class="step-header">
                        <span class="step-number" style="background: var(--secondary-navy)">📋</span>
                        <h2 class="step-title">Bill of Materials (BOM)</h2>
                    </div>
                    <div class="step-content">
                        <p class="step-text">Daftar seluruh komponen yang dibutuhkan untuk merakit satu unit Automated Microscope.</p>

                        <!-- Base Plate BOM -->
                        <p class="step-section-title">Base Plate Setup</p>
                        <table class="bom-table">
                            <thead>
                                <tr><th>Komponen</th><th style="text-align:center">Qty</th><th>Keterangan</th></tr>
                            </thead>
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

                        <!-- Motor Y BOM -->
                        <p class="step-section-title">Motor Y-Axis (1/80 Gearbox)</p>
                        <table class="bom-table">
                            <thead>
                                <tr><th>Komponen</th><th style="text-align:center">Qty</th><th>Keterangan</th></tr>
                            </thead>
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

                        <!-- Motor X BOM -->
                        <p class="step-section-title">Motor X-Axis (1/80 Gearbox)</p>
                        <table class="bom-table">
                            <thead>
                                <tr><th>Komponen</th><th style="text-align:center">Qty</th><th>Keterangan</th></tr>
                            </thead>
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

                        <!-- Base Preparat BOM -->
                        <p class="step-section-title">Base Preparat</p>
                        <table class="bom-table">
                            <thead>
                                <tr><th>Komponen</th><th style="text-align:center">Qty</th><th>Keterangan</th></tr>
                            </thead>
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

                        <!-- Bracket & Lead Screw BOM -->
                        <p class="step-section-title">Bracket & Lead Screw</p>
                        <table class="bom-table">
                            <thead>
                                <tr><th>Komponen</th><th style="text-align:center">Qty</th><th>Keterangan</th></tr>
                            </thead>
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
                </div>

                <!-- ===== TAHAP 1 ===== -->
                <div class="docs-step" id="tahap-1">
                    <div class="step-header">
                        <span class="step-number">1</span>
                        <h2 class="step-title">Persiapan Base Plate</h2>
                    </div>
                    <div class="step-content">
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
                                <span><strong>Pasang Bearing Utama:</strong> Masukkan 1× Ball Bearing 688ZZ ke dalam slot yang tersedia di Cover Kiri Belakang yang telah dipasang pada Base Plate.</span>
                            </li>
                            <li>
                                <span class="sub-step-num">2</span>
                                <span><strong>Pasang Mur Pengunci:</strong> Masukkan 6× M3 Nut ke dalam slot di sudut-sudut Base Plate.</span>
                            </li>
                        </ul>

                        <div class="step-note">
                            <strong>📌 Catatan:</strong> Pasang masing-masing 2 nut di setiap sudut, <em>kecuali</em> sudut yang dekat dengan Cover Kiri Belakang (karena sudah ada bearing di sana).
                        </div>
                    </div>
                </div>

                <!-- ===== TAHAP 2 ===== -->
                <div class="docs-step" id="tahap-2">
                    <div class="step-header">
                        <span class="step-number">2</span>
                        <h2 class="step-title">Perakitan Mekanisme Gerak (Bracket & Lead Screw)</h2>
                    </div>
                    <div class="step-content">
                        <div class="stage-badge"><span class="stage-dot"></span>Sliding parts / bagian yang bergerak</div>

                        <div class="tools-chips">
                            <span class="chip">🔧 Phillips Screwdriver</span>
                            <span class="chip">🔧 Flathead Screwdriver</span>
                        </div>

                        <p class="step-section-title">A. Pemasangan Nut & Bracket</p>
                        <ul class="sub-steps">
                            <li>
                                <span class="sub-step-letter">A</span>
                                <span><strong>Left Bracket:</strong> Pasang 1× Round Flange Brass Lead Screw Nut pada Left Bracket (sebelah kiri slot bearing) menggunakan M3 Screw 16 mm.</span>
                            </li>
                            <li>
                                <span class="sub-step-letter">B</span>
                                <span><strong>Middle Bracket:</strong> Pasang Round Flange Brass Nut di kedua sisi Middle Bracket (kiri dan kanan).</span>
                            </li>
                            <li>
                                <span class="sub-step-letter">C</span>
                                <span><strong>Right Cover:</strong> Pasang 1× Cover Kanan di bagian belakang kanan Base Plate menggunakan M3 Screw 21 mm.</span>
                            </li>
                        </ul>

                        <p class="step-section-title">B. Penyatuan Komponen (Assembly)</p>
                        <ul class="sub-steps">
                            <li>
                                <span class="sub-step-num">4</span>
                                <span><strong>Middle Assembly:</strong> Ambil Middle Bracket, lalu pasang Lead Screw 142 mm beserta 2× Ball Bearing 688ZZ di dalamnya.</span>
                            </li>
                            <li>
                                <span class="sub-step-num">5</span>
                                <span><strong>Penyatuan Bracket:</strong> Gabungkan Left Bracket, Middle Bracket, dan Right Bracket menjadi satu kesatuan menggunakan 2× Linear Rods (4×135 mm).</span>
                            </li>
                            <li>
                                <span class="sub-step-num">6</span>
                                <span><strong>Tutup Belakang:</strong> Pasang Back Cover pada Left Bracket dan Right Bracket untuk mengunci posisi. Gunakan 8× M3 Self Tapping Screw 15 mm.</span>
                            </li>
                        </ul>

                        <p class="step-section-title">C. Pemasangan Rods & Screw Panjang</p>
                        <ul class="sub-steps">
                            <li>
                                <span class="sub-step-num">7</span>
                                <span><strong>Linear Rods Panjang:</strong> Pasang 2× Linear Rods (4×160 mm) pada Left Bracket, dan 3× Linear Rods (4×160 mm) pada Right Bracket.</span>
                            </li>
                            <li>
                                <span class="sub-step-num">8</span>
                                <span><strong>T8 Lead Screw:</strong> Masukkan 1× T8 Lead Screw 173 mm pada Left Bracket. Pastikan posisinya sejajar dengan Linear Rods dan ujungnya menembus Ball Bearing 688ZZ yang ada di Base Plate.</span>
                            </li>
                        </ul>

                        <p class="step-section-title">D. Penutupan Akhir (Flexible Covers)</p>
                        <ul class="sub-steps">
                            <li>
                                <span class="sub-step-num">9</span>
                                <span><strong>Left Cover:</strong> Pasang Left Flexible Cover di bagian kiri Base Plate menggunakan M3 Screw 20 mm.</span>
                            </li>
                            <li>
                                <span class="sub-step-num">10</span>
                                <span><strong>Right Cover:</strong> Pasang Right Flexible Cover di bagian kanan Base Plate menggunakan M3 Screw 20 mm.</span>
                            </li>
                        </ul>

                        <div class="step-warning">
                            <strong>⚠️ Penting:</strong> Pastikan Linear Rods masuk pas ke lubang cover dan Lead Screw masuk tepat ke Ball Bearing pada kedua cover. Jangan dipaksakan jika terasa berat — periksa alignment terlebih dahulu.
                        </div>
                    </div>
                </div>

                <!-- ===== TAHAP 3 ===== -->
                <div class="docs-step" id="tahap-3">
                    <div class="step-header">
                        <span class="step-number">3</span>
                        <h2 class="step-title">Perakitan Motor Y-Axis (Gearbox 1/80)</h2>
                    </div>
                    <div class="step-content">
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
                            <li><span class="sub-step-num">3</span><span>Pasang <strong>Housing</strong> pada body motor stepper. Kencangkan dengan 4× M3 Socket Head Hexagonal Cap Screw 19 mm.</span></li>
                        </ul>

                        <p class="step-section-title">Planet Gear Assembly</p>
                        <ul class="sub-steps">
                            <li><span class="sub-step-num">4</span><span>Pasang 1× Ball Bearing 625Z di tengah-tengah Planet Carrier.</span></li>
                            <li><span class="sub-step-num">5</span><span>Pasang 3× Ball Bearing MR62ZZ pada ketiga posisi Planet Gear.</span></li>
                            <li><span class="sub-step-num">6</span><span>Pasang Planet Gear ke Carrier menggunakan 3× M3 Nut dan 3× M3 Socket Head Screw 19 mm.</span></li>
                        </ul>

                        <p class="step-section-title">Finalisasi Gearbox</p>
                        <ul class="sub-steps">
                            <li><span class="sub-step-num">7</span><span>Masukkan rakitan gear ke dalam Housing.</span></li>
                            <li><span class="sub-step-num">8</span><span><strong>Persiapan Output Hub:</strong> Pasang 4× M3 Nut dan 4× M3 Screw 6 mm pada 4 lubang yang tersedia di Output Hub.</span></li>
                            <li><span class="sub-step-num">9</span><span>Tutup gearbox menggunakan Output Hub yang sudah dipasangi baut tersebut.</span></li>
                            <li><span class="sub-step-num">10</span><span>Pasang 4× M3 Nut di keempat sudut Housing untuk persiapan penguncian.</span></li>
                        </ul>

                        <p class="step-section-title">Mounting ke Base</p>
                        <ul class="sub-steps">
                            <li><span class="sub-step-num">11</span><span>Siapkan Face Plate (Bentuk Persegi Panjang/Rectangle).</span></li>
                            <li><span class="sub-step-num">12</span><span>Pasang SRAM DUB Bearing (29×42×7 mm) bersama Face Plate.</span></li>
                            <li><span class="sub-step-num">13</span><span>Gunakan 3× M3 Screw 32 mm untuk mengunci gearbox lengkap ke Face Plate dan base plate.</span></li>
                        </ul>
                    </div>
                </div>

                <!-- ===== TAHAP 4 ===== -->
                <div class="docs-step" id="tahap-4">
                    <div class="step-header">
                        <span class="step-number">4</span>
                        <h2 class="step-title">Perakitan Motor X-Axis (Gearbox 1/80)</h2>
                    </div>
                    <div class="step-content">
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
                            2. Gunakan 2× M3 Screw <strong>50 mm</strong> untuk mounting ke base (bukan 32 mm).<br>
                            3. Hanya pasang 2× M3 Nut di sudut-sudut atas Housing (bukan 4).
                        </div>

                        <p class="step-section-title">Persiapan Shaft</p>
                        <ul class="sub-steps">
                            <li><span class="sub-step-num">1</span><span>Pasang Sun Gear pada shaft output depan.</span></li>
                            <li><span class="sub-step-num">2</span><span>Pasang Hand Wheel pada shaft belakang.</span></li>
                        </ul>

                        <p class="step-section-title">Housing & Gearbox</p>
                        <ul class="sub-steps">
                            <li><span class="sub-step-num">3</span><span>Pasang Housing pada motor menggunakan 4× M3 Socket Head Hexagonal Cap Screw 19 mm.</span></li>
                            <li><span class="sub-step-num">4</span><span>Pasang 1× Ball Bearing 625Z di tengah Planet Carrier, dan 3× Ball Bearing MR62ZZ untuk Planet Gear.</span></li>
                            <li><span class="sub-step-num">5</span><span>Rakit Planet Gear menggunakan 3× M3 Nut dan 3× M3 Socket Head Screw 19 mm.</span></li>
                            <li><span class="sub-step-num">6</span><span>Masukkan gear ke dalam Housing, pasang Output Hub dengan 4× M3 Nut dan 4× M3 Screw 6 mm.</span></li>
                            <li><span class="sub-step-num">7</span><span>Pasang 2× M3 Nut di sudut-sudut atas Housing.</span></li>
                        </ul>

                        <p class="step-section-title">Mounting ke Base</p>
                        <ul class="sub-steps">
                            <li><span class="sub-step-num">8</span><span>Pasang SRAM DUB Bearing (29×42×7 mm) bersama Face Plate Square ke posisi mountingnya.</span></li>
                            <li><span class="sub-step-num">9</span><span>Gunakan 2× M3 Screw 50 mm untuk mengunci gearbox ke Face Plate dan base plate sambil mengencangkan seluruh rakitan.</span></li>
                        </ul>
                    </div>
                </div>

                <!-- ===== TAHAP 5 ===== -->
                <div class="docs-step" id="tahap-5">
                    <div class="step-header">
                        <span class="step-number">5</span>
                        <h2 class="step-title">Instalasi Rangka Utama ke Mikroskop</h2>
                    </div>
                    <div class="step-content">
                        <div class="stage-badge"><span class="stage-dot"></span>Menyatukan seluruh sistem ke unit mikroskop</div>
                        <p class="step-text">Pastikan seluruh rangka (Base Plate, Bracket, dan Motor) sudah terakit lengkap menjadi satu kesatuan sebelum memulai tahap ini.</p>

                        <ul class="sub-steps">
                            <li><span class="sub-step-num">1</span><span><strong>Persiapan:</strong> Pastikan seluruh rangka sudah terakit lengkap menjadi satu kesatuan.</span></li>
                            <li><span class="sub-step-num">2</span><span><strong>Penjajaran (Alignment):</strong> Letakkan rangka di atas plate mikroskop. Sejajarkan 4 lubang yang ada di tengah Base Plate dengan lubang baut pada plate mikroskop.</span></li>
                            <li><span class="sub-step-num">3</span><span><strong>Penguncian:</strong> Pasang dan kencangkan rangka ke mikroskop menggunakan 4× M3 Screw 26 mm dan 4× M3 Nut.</span></li>
                        </ul>
                    </div>
                </div>

                <!-- ===== TAHAP 6 ===== -->
                <div class="docs-step" id="tahap-6">
                    <div class="step-header">
                        <span class="step-number">6</span>
                        <h2 class="step-title">Perakitan Base Preparat (Dudukan Sampel)</h2>
                    </div>
                    <div class="step-content">
                        <div class="stage-badge"><span class="stage-dot"></span>Penjepit kaca preparat</div>

                        <div class="tools-chips">
                            <span class="chip printed">🖨️ Base Preparat</span>
                            <span class="chip printed">🖨️ Preparat Clipper ×2</span>
                        </div>

                        <p class="step-section-title">A. Perakitan Unit Base Preparat</p>
                        <ul class="sub-steps">
                            <li><span class="sub-step-num">1</span><span><strong>Pemasangan Per (Spring):</strong> Masukkan 2× Blue Die Spring (9 mm) ke dalam lubang yang tersedia di sisi kiri dan kanan Base Preparat.</span></li>
                            <li><span class="sub-step-num">2</span><span><strong>Pemasangan Clipper:</strong> Letakkan Clipper di atas masing-masing per (spring).</span></li>
                            <li>
                                <span class="sub-step-num">3</span>
                                <span><strong>Penguncian Clipper:</strong> Kunci clipper dengan urutan: masukkan M4 Screw 31 mm dari atas clipper → kunci di bagian bawah dengan M4 Ring → kunci dengan M4 Nut. Lakukan untuk kedua sisi.</span>
                            </li>
                        </ul>

                        <p class="step-section-title">B. Pemasangan ke Sistem Gerak</p>
                        <ul class="sub-steps">
                            <li><span class="sub-step-num">4</span><span><strong>Persiapan Middle Bracket:</strong> Masukkan 2× M3 Nut ke dalam lubang hexagonal yang terdapat pada Middle Bracket.</span></li>
                            <li><span class="sub-step-num">5</span><span><strong>Penyatuan:</strong> Pasang unit Base Preparat yang sudah jadi ke Middle Bracket.</span></li>
                            <li><span class="sub-step-num">6</span><span><strong>Penguncian Akhir:</strong> Kunci posisinya menggunakan 2× M3 Ring dan 2× M3 Screw 27 mm. Pastikan kencang agar preparat stabil.</span></li>
                        </ul>
                    </div>
                </div>

                <!-- ===== TAHAP 7 ===== -->
                <div class="docs-step" id="tahap-7">
                    <div class="step-header">
                        <span class="step-number">7</span>
                        <h2 class="step-title">Pemasangan Kamera</h2>
                    </div>
                    <div class="step-content">
                        <div class="stage-badge"><span class="stage-dot"></span>Sistem optik</div>

                        <div class="tools-chips">
                            <span class="chip printed">🖨️ Camera Mounting</span>
                            <span class="chip">📷 Kamera</span>
                        </div>

                        <ul class="sub-steps">
                            <li><span class="sub-step-num">1</span><span><strong>Rakitan Kamera:</strong> Pasang kamera ke dalam Camera Mounting (adapter).</span></li>
                            <li><span class="sub-step-num">2</span><span><strong>Instalasi ke Mikroskop:</strong> Masukkan unit Camera Mounting beserta kameranya ke dalam lubang Optical Path (jalur optik) pada mikroskop.</span></li>
                        </ul>
                    </div>
                </div>

                <!-- ===== TAHAP 8 ===== -->
                <div class="docs-step" id="tahap-8">
                    <div class="step-header">
                        <span class="step-number">8</span>
                        <h2 class="step-title">Pemasangan Control Center (Case & Base)</h2>
                    </div>
                    <div class="step-content">
                        <div class="stage-badge"><span class="stage-dot"></span>Wadah komponen elektronik</div>

                        <div class="tools-chips">
                            <span class="chip printed">🖨️ Control Case</span>
                            <span class="chip printed">🖨️ Control Base</span>
                            <span class="chip">🔌 Double Tape kuat</span>
                        </div>

                        <ul class="sub-steps">
                            <li><span class="sub-step-num">1</span><span><strong>Persiapan:</strong> Siapkan komponen hasil cetak 3D Control Base dan Control Case.</span></li>
                            <li><span class="sub-step-num">2</span><span><strong>Pemasangan Base:</strong> Tempelkan Double Tape yang kuat pada bagian bawah Control Base. Rekatkan pada posisi yang diinginkan di Stand Microscope (tiang/dudukan). Pastikan posisinya tidak mengganggu pergerakan meja preparat.</span></li>
                            <li><span class="sub-step-num">3</span><span><strong>Penutupan:</strong> Setelah komponen elektronik dipasang dan dirapikan di dalam base (pada tahap wiring), tutup menggunakan Control Case. Pastikan casing menutup dengan rapat untuk melindungi elektronik dari debu.</span></li>
                        </ul>

                        <div class="step-note">
                            <strong>✅ Selesai!</strong> Hardware assembly sudah lengkap. Lanjut ke tahap Software Setup untuk mengonfigurasi Raspberry Pi dan menjalankan perangkat lunak.
                        </div>

                        <div style="margin-top: 1.5rem;">
                            <a href="example.html" class="download-btn" style="display: inline-block; text-decoration: none;">Lanjut ke Software Setup →</a>
                        </div>
                    </div>
                </div>

            </article>
        </main>
    </div>

<?php
include '../components/footer.php';
?>