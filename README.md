# OpenFlexure ITB Website

Website untuk proyek OpenFlexure Diagnostics - Deteksi TBC Presisi Berbasis Open Source dari Institut Teknologi Bandung.

## 📁 Struktur File

```text
openflexure-itb/
├── index.php                 # Halaman Landing/Home
├── about.php                 # Halaman Tentang Kami & Tim
├── downloads.php             # Halaman Download/Unduh
├── README.md                 # Dokumentasi Repositori (File ini)
├── assets/                   # Folder aset statis
│   └── images/               # Kumpulan gambar (.webp & .svg)
│       ├── assembly/         # Dokumentasi foto perakitan mikroskop
│       └── team/             # Foto anggota tim
├── components/               # Komponen template (diamankan dari akses publik)
│   ├── .htaccess             # Aturan keamanan server
│   ├── header.php            # Navigasi dan tag <head>
│   └── footer.php            # Bagian footer website
├── css/                      # Stylesheet
│   ├── additions.css
│   ├── docs-index.css
│   ├── hardware.css
│   └── styles.css
├── docs/                     # Dokumentasi Proyek
│   ├── hardware-assembly.php # Panduan perakitan hardware
│   └── index.php             # Halaman utama dokumentasi
└── js/                       # Skrip interaktivitas
    └── main.js
```

## Fitur Desain

### Desain yang Diimplementasikan:

- **Color Palette Profesional**: Navy blue, teal accent, dan neutral gray untuk tampilan ilmiah yang modern.
- **Typography**: Menggunakan kombinasi Barlow (heading) dan Inter (body text) untuk keterbacaan optimal.
- **Animations**: Animasi halus pada hover, fade-in effects, dan floating animation.
- **Responsive Layout**: Desain yang responsif untuk berbagai ukuran layar.
- **Grid System**: Implementasi CSS Grid dan Flexbox modern.
- **Micro-interactions**: Hover effects, transitions, dan visual feedback.

### Halaman yang Tersedia:

1. **Landing Page (`index.php`)**

- Hero section dengan background gradient dan overlay pattern.
- Features grid dengan card components.
- Gallery slider untuk citra diagnostik.

2. **About Page (`about.php`)**

- Informasi proyek dengan typography yang readable.
- Team section dengan card layout & grid untuk anggota tim.

3. **Documentation Page (`docs/index.php` & `docs/hardware-assembly.php`)**

- Two-column layout dengan sidebar navigation.
- Numbered steps dengan visual indicators.
- Code blocks dengan syntax highlighting style.

4. **Downloads Page (`downloads.php`)**

- File table dengan preview thumbnails.
- Download buttons dengan hover effects.

## Cara Menjalankan Project

Website ini menggunakan PHP untuk sistem _templating_ komponen. Kamu membutuhkan _local web server_ seperti **Laragon** atau **XAMPP** untuk menjalankannya.

1. **Jalankan Web Server**: Aktifkan Apache di Laragon atau XAMPP.
2. **Pindahkan Folder**: Pastikan folder project ini berada di dalam `htdocs` (XAMPP) atau `www` (Laragon).
3. **Akses via Browser**: Buka `http://localhost/nama-folder-project/index.php`.
4. **Edit Konten**: Edit file `.php` untuk mengubah teks, atau ubah variabel di folder `css/` untuk penyesuaian warna.

## CSS Architecture

### Variables (Custom Properties)

```css
:root {
  --primary-navy: #1a2332;
  --accent-teal: #00838f;
  --text-dark: #1a1a1a;
  --bg-light: #f8f9fa;
}
```

### Typography Scale & Spacing System

- **Hero Title**: 3rem (48px) | **Section Title**: 2.5rem (40px) | **Body**: 1rem (16px)
- **Spacing**: xs (0.5rem), sm (1rem), md (2rem), lg (4rem), xl (6rem)

## Catatan Penting

### Fungsionalitas Tambahan (To-Do):

- JavaScript untuk gallery slider functionality.
- Search functionality untuk downloads page.
- Collapsible sidebar sections di docs.
- Smooth scroll navigation & Mobile menu toggle.

## Browser Support & Responsivitas

- **Kompatibel dengan**: Chrome/Edge, Firefox, Safari (terbaru), serta Mobile browsers.
- **Breakpoints**: Desktop (> 1024px), Tablet (768px - 1024px), Mobile (< 768px).

## Performance & Philosophy

- **Performa**: Optimasi gambar format WebP, pure CSS tanpa _library_ eksternal berat, meminimalisir HTTP _requests_.
- **Filosofi**: Profesional, _Scientific_, _Clean_, _Accessible_, dan _Performant_.

---

```
Dibuat untuk OpenFlexure ITB - Institut Teknologi Bandung
© 2024 Laboratorium Biomedis - Sekolah Teknik Elektronika dan Informatika
```
