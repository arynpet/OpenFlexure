# OpenFlexure ITB Website

Website untuk proyek OpenFlexure Diagnostics - Deteksi TBC Presisi Berbasis Open Source dari Institut Teknologi Bandung.

## 📁 Struktur File

```
openflexure-itb/
├── index.html          # Halaman Landing/Home
├── about.html          # Halaman Tentang Kami & Tim
├── docs.html           # Halaman Dokumentasi
├── downloads.html      # Halaman Download/Unduh
├── css/styles.css          # File CSS utama
└── README.md           # File ini
```

## 🎨 Fitur Desain

### Desain yang Diimplementasikan:
- **Color Palette Profesional**: Navy blue, teal accent, dan neutral gray untuk tampilan ilmiah yang modern
- **Typography**: Menggunakan kombinasi Barlow (heading) dan Inter (body text) untuk keterbacaan optimal
- **Animations**: Animasi halus pada hover, fade-in effects, dan floating animation
- **Responsive Layout**: Desain yang responsif untuk berbagai ukuran layar
- **Grid System**: Implementasi CSS Grid dan Flexbox modern
- **Micro-interactions**: Hover effects, transitions, dan visual feedback

### Halaman yang Tersedia:

1. **Landing Page (index.html)**
   - Hero section dengan background gradient dan overlay pattern
   - Features grid dengan card components
   - Gallery slider untuk citra diagnostik
   - Call-to-action buttons

2. **About Page (about.html)**
   - Hero section dengan outline text effect
   - Informasi proyek dengan typography yang readable
   - Team section dengan card layout
   - Grid layout untuk anggota tim

3. **Documentation Page (docs.html)**
   - Two-column layout dengan sidebar navigation
   - Numbered steps dengan visual indicators
   - Code blocks dengan syntax highlighting style
   - Info boxes untuk konten tambahan
   - Collapsible navigation sections

4. **Downloads Page (downloads.html)**
   - Release information header
   - File table dengan preview thumbnails
   - Download buttons dengan hover effects
   - Search functionality styling
   - Material badges dan metadata display

## 🚀 Cara Menggunakan

1. **Buka langsung di browser**:
   - Buka file `index.html` di browser untuk melihat landing page
   - Navigasi antar halaman menggunakan menu di navigation bar

2. **Edit konten**:
   - Edit file HTML untuk mengubah konten teks
   - Ganti placeholder images dengan gambar asli (ITB logo, microscope images, team photos)
   - Sesuaikan warna di CSS variables jika diperlukan

3. **Customization**:
   - Semua warna didefinisikan sebagai CSS variables di bagian `:root`
   - Typography scales bisa diatur melalui CSS variables
   - Spacing menggunakan consistent spacing variables

## 🎨 CSS Architecture

### Variables (Custom Properties)
```css
--primary-navy: #1a2332
--accent-teal: #00838f
--text-dark: #1a1a1a
--bg-light: #f8f9fa
```

### Typography Scale
- Hero Title: 3rem (48px)
- Section Title: 2.5rem (40px)
- Card Title: 1.5rem (24px)
- Body: 1rem (16px)

### Spacing System
- xs: 0.5rem
- sm: 1rem
- md: 2rem
- lg: 4rem
- xl: 6rem

## 📝 Catatan Penting

### Images yang Perlu Diganti:
1. ITB Logo (`itb-logo.png`)
2. Microscope images untuk hero dan features
3. Team member photos
4. Gallery diagnostic images
5. 3D printing parts visuals
6. File preview thumbnails

### Fungsionalitas yang Bisa Ditambahkan:
- JavaScript untuk gallery slider functionality
- Search functionality untuk downloads page
- Collapsible sidebar sections di docs
- Smooth scroll navigation
- Mobile menu toggle

## 🔧 Browser Support

Website ini kompatibel dengan:
- Chrome/Edge (latest)
- Firefox (latest)
- Safari (latest)
- Mobile browsers (iOS Safari, Chrome Mobile)

## 📱 Responsive Breakpoints

- Desktop: > 1024px
- Tablet: 768px - 1024px
- Mobile: < 768px

## ⚡ Performance

- Pure CSS (no external libraries selain Google Fonts)
- Minimal HTTP requests
- Optimized animations dengan CSS transforms
- Mobile-first responsive approach

## 🎯 Desain Philosophy

Website ini didesain dengan prinsip:
1. **Professional & Scientific**: Cocok untuk proyek riset akademis
2. **Clean & Modern**: Desain minimalis tapi tidak membosankan
3. **Accessible**: Readable typography dan color contrast yang baik
4. **Performant**: Pure CSS tanpa dependencies berat
5. **Distinctive**: Menghindari template generic dengan custom design choices

---

Dibuat untuk OpenFlexure ITB - Institut Teknologi Bandung
© 2024 Laboratorium Biomedis - Sekolah Teknik Elektronika dan Informatika
