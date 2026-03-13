<!-- Footer -->
<?php
$base_url = $base_url ?? '';
?>
    <footer class="footer">
        <div class="footer-container">
            <div class="footer-about">
                <img loading="lazy" src="<?php echo $base_url; ?>assets/images/itb.svg" alt="ITB Logo" class="footer-logo">
                <div>
                    <h3 class="footer-title">Institut Teknologi Bandung</h3>
                    <p class="footer-text">Proyek mikroskop sumber terbuka yang dibuat untuk aksesibilitas dan sains
                        presisi.</p>
                </div>
            </div>
            <div class="footer-menu">
                <h4 class="footer-heading">Menu</h4>
                <ul class="footer-links">
                    <li><a href="<?php echo $base_url; ?>index.php">Home</a></li>
                    <li><a href="<?php echo $base_url; ?>downloads.php">Unduh</a></li>
                    <li><a href="<?php echo $base_url; ?>docs/index.php">Dokumentasi</a></li>
                    <li><a href="<?php echo $base_url; ?>about.php">Tentang Kami</a></li>
                </ul>
            </div>
            <div class="footer-source">
                <h4 class="footer-heading">Sumber</h4>
                <a href="https://github.com" class="github-button" target="_blank" rel="noopener noreferrer">
                    <img loading="lazy" src="<?php echo $base_url; ?>assets/images/github.svg" alt="github" class="github-icon">
                    Github
                </a>
            </div>
        </div>
        <div class="footer-bottom">
            <p>© 2024 Laboratorium Biomedis - Institut Teknologi Bandung. OpenFlexure Diagnostics Project. Didukung oleh
                Sekolah Teknik Elektronika dan Informatika</p>
        </div>
    </footer>
    <script src="<?php echo $base_url; ?>js/main.js"></script>
</body>
</html>