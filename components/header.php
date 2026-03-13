<!-- Header -->
<?php
$base_url = $base_url ?? '';
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $page_title ?? 'OpenFlexure ITB'; ?></title>
    
    <meta name="description" content="Platform dokumentasi, panduan perakitan, dan informasi terkait Mikroskop OpenFlexure Diagnostics.">
    <meta name="keywords" content="OpenFlexure, Mikroskop 3D, Diagnostics, Sains Terbuka, Perakitan Mikroskop">
    <meta name="author" content="Tim OpenFlexure">

    <meta property="og:title" content="<?php echo $page_title ?? 'OpenFlexure ITB'; ?>">
    <meta property="og:description" content="Platform dokumentasi, panduan perakitan, dan informasi terkait Mikroskop OpenFlexure Diagnostics.">
    <meta property="og:image" content="<?php echo $base_url; ?>assets/images/hero-bg.webp"> 
    <meta property="og:type" content="website">
    
    <link rel="stylesheet" href="<?php echo $base_url; ?>css/styles.css">
    <link rel="stylesheet" href="<?php echo $base_url; ?>css/additions.css">
    
    <?php echo $extra_css ?? ''; ?>
</head>
<body>
    <?php $current_page = basename($_SERVER['PHP_SELF']); ?>
    <nav class="navbar">
        <div class="nav-container">
            <a href="<?php echo $base_url; ?>index.php" class="nav-logo">
                <img loading="lazy" src="<?php echo $base_url; ?>assets/images/itb.svg" alt="ITB Logo" class="logo-img">
                <span class="logo-text">OpenFlexure ITB</span>
            </a>

            <!-- Hamburger button untuk mobile — WAJIB ada id="mobileToggle" -->
            <button
                class="nav-mobile-toggle"
                id="mobileToggle"
                aria-label="Buka navigasi"
                aria-expanded="false"
                aria-controls="navMenu"
            >
                <span></span>
                <span></span>
                <span></span>
            </button>

            <ul class="nav-menu" id="navMenu">
                <li><a href="<?php echo $base_url; ?>downloads.php" class="nav-link <?php echo ($current_page == 'downloads.php') ? 'active' : ''; ?>">Unduh</a></li>
                <li><a href="<?php echo $base_url; ?>docs/index.php" class="nav-link <?php echo (strpos($_SERVER['REQUEST_URI'], '/docs') !== false) ? 'active' : ''; ?>">Dokumentasi</a></li>
                <li><a href="<?php echo $base_url; ?>about.php" class="nav-link <?php echo ($current_page == 'about.php') ? 'active' : ''; ?>">Tentang Kami</a></li>
            </ul>
        </div>
    </nav>