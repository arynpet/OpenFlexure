<?php
$page_title = 'Unduh - OpenFlexure ITB';
$base_url = '';  // halaman root
include 'components/header.php';
?>
    <!-- Downloads Content -->
    <section class="downloads-section">
        <div class="downloads-container">
            <!-- Release Header -->
            <div class="release-header">
                <div class="release-info">
                    <h1 class="release-title">Release v7.0.0-Omega</h1>
                    <div class="release-meta">
                        <span class="release-badge">Stable Release</span>
                        <span class="release-dot">•</span>
                        <span class="release-date">January 2026</span>
                        <span class="release-dot">•</span>
                        <span class="release-size">45 MB</span>
                    </div>
                    <p class="release-description">Paket lengkap berisi seluruh file STL, dokumentasi, dan software
                        untuk mikroskop standar.</p>

                    <!-- Ganti ke <a> agar bisa benar-benar mengunduh -->
                    <a href="assets/downloads/openflexure-itb-v7.0.0-omega.zip"
                       class="download-full-btn"
                       download>
                        <span class="download-text">Downloads Full Package (.zip)</span>
                        <span class="download-icon">↓</span>
                    </a>
                </div>

                <!-- Microscope Image -->
                <div class="microscope-display">
                    <img loading="lazy" src="assets/images/mikroskop.webp" alt="Microscope OpenFlexure ITB" class="microscope-img">
                </div>
            </div>

            <!-- Search Box -->
            <div class="search-box">
                <input type="text"
                       id="searchFiles"
                       placeholder="Cari nama file..."
                       class="search-input"
                       aria-label="Cari file">
            </div>

            <!-- Files Table -->
            <div class="files-table">
                <div class="table-header">
                    <div class="table-col col-preview">Preview</div>
                    <div class="table-col col-filename">File Name</div>
                    <div class="table-col col-material">Material</div>
                    <div class="table-col col-settings">Settings</div>
                    <div class="table-col col-action">Action</div>
                </div>

                <!-- File Row 1 -->
                <div class="table-row">
                    <div class="table-col col-preview">
                        <div class="file-preview"></div>
                    </div>
                    <div class="table-col col-filename">
                        <span class="filename">main_body.stl</span>
                    </div>
                    <div class="table-col col-material">
                        <span class="material">PLA</span>
                    </div>
                    <div class="table-col col-settings">
                        <span class="settings">20% Infill</span>
                    </div>
                    <div class="table-col col-action">
                        <a href="assets/downloads/main_body.stl"
                           class="download-file-btn"
                           download>Download</a>
                    </div>
                </div>

                <!-- File Row 2 -->
                <div class="table-row">
                    <div class="table-col col-preview">
                        <div class="file-preview"></div>
                    </div>
                    <div class="table-col col-filename">
                        <span class="filename">focus_gear_large.stl</span>
                    </div>
                    <div class="table-col col-material">
                        <span class="material">PETG</span>
                    </div>
                    <div class="table-col col-settings">
                        <span class="settings">100% Infill</span>
                    </div>
                    <div class="table-col col-action">
                        <a href="assets/downloads/focus_gear_large.stl"
                           class="download-file-btn"
                           download>Download</a>
                    </div>
                </div>

                <!-- File Row 3 -->
                <div class="table-row">
                    <div class="table-col col-preview">
                        <div class="file-preview"></div>
                    </div>
                    <div class="table-col col-filename">
                        <span class="filename">optics_mount.stl</span>
                    </div>
                    <div class="table-col col-material">
                        <span class="material">ABS</span>
                    </div>
                    <div class="table-col col-settings">
                        <span class="settings">0.1mm Layer</span>
                    </div>
                    <div class="table-col col-action">
                        <a href="assets/downloads/optics_mount.stl"
                           class="download-file-btn"
                           download>Download</a>
                    </div>
                </div>

                <!-- File Row 4 -->
                <div class="table-row">
                    <div class="table-col col-preview">
                        <div class="file-preview"></div>
                    </div>
                    <div class="table-col col-filename">
                        <span class="filename">raspberry_pi_case.stl</span>
                    </div>
                    <div class="table-col col-material">
                        <span class="material">PLA</span>
                    </div>
                    <div class="table-col col-settings">
                        <span class="settings">Standard</span>
                    </div>
                    <div class="table-col col-action">
                        <a href="assets/downloads/raspberry_pi_case.stl"
                           class="download-file-btn"
                           download>Download</a>
                    </div>
                </div>

            </div>
        </div>
    </section>

<?php
include 'components/footer.php';
?>