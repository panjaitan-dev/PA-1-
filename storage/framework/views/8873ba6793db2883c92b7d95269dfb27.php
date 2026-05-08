<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Museum Huta Bolon Simanindo - Geosite Danau Toba</title>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&family=Cormorant+Garamond:wght@400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="/css/meat.css">
</head>
<body>

<!-- NAVBAR -->
<div class="navbar" id="navbar">
    <div class="nav-container">
        <div class="nav-logo">
            <img src="[GANTI_LINK_BENDERA]" alt="Bendera" class="flag-img">
            <div class="logo-divider"></div>
            <img src="[GANTI_LINK_DEL]" alt="Del" class="del-img">
            <div class="logo-divider"></div>
            <div class="logo-text">
                <h4>GEOTOBA</h4>
                <p>Geopark Danau Toba</p>
            </div>
        </div>
        <div class="nav-menu">
            <a href="<?php echo e(url('/')); ?>" class="nav-link home-btn">Home</a>
            <a href="#sejarah" class="nav-link">Sejarah</a>
            <a href="#koleksi" class="nav-link">Koleksi</a>
            <a href="#atraksi" class="nav-link">Atraksi Budaya</a>
            <a href="#fasilitas" class="nav-link">Fasilitas</a>
            <a href="#galeri" class="nav-link">Galeri</a>
            <a href="#lokasi" class="nav-link">Lokasi</a>
        </div>
        <div class="hamburger" id="hamburger">
            <span></span><span></span><span></span>
        </div>
    </div>
</div>

<div class="mobile-overlay" id="mobileOverlay">
    <div class="mobile-close" id="mobileClose">×</div>
    <a href="<?php echo e(url('/')); ?>" class="mobile-link mobile-home">Home</a>
    <a href="#sejarah" class="mobile-link">Sejarah</a>
    <a href="#koleksi" class="mobile-link">Koleksi</a>
    <a href="#atraksi" class="mobile-link">Atraksi Budaya</a>
    <a href="#fasilitas" class="mobile-link">Fasilitas</a>
    <a href="#galeri" class="mobile-link">Galeri</a>
    <a href="#lokasi" class="mobile-link">Lokasi</a>
</div>

<!-- HERO -->
<section class="hero">
    <div>
        <h1 class="hero-title">MUSEUM HUTA BOLON</h1>
        <p class="hero-subtitle">SIMANINDO · Pulau Samosir · Danau Toba</p>
    </div>
</section>

<!-- SEJARAH -->
<section id="sejarah" class="section">
    <div class="container">
        <div class="section-title">
            <h2>GeoWisata & Sejarah</h2>
            <div class="divider"></div>
            <p>Museum Huta Bolon Simanindo adalah permata budaya Batak Toba yang tak ternilai, berlokasi di Desa Simanindo, ujung utara Pulau Samosir, dalam kawasan Geosite Simanindo–Batu Hoda, Geopark Kaldera Toba yang diakui UNESCO.</p>
        </div>

        <div class="sejarah-item">
            <div class="sejarah-image"><img src="/image/hutabolon/sejarah1.jpg" alt="Kompleks Rumah Adat Huta Bolon"></div>
            <div class="sejarah-text">
                <h3>Asal-Usul Kompleks Huta Bolon</h3>
                <p>Museum Huta Bolon Simanindo merupakan kompleks rumah adat Batak Toba yang dibangun pada tahun 1895 oleh Raja Sidauruk sebagai kediaman resmi beserta keluarga dan kerabatnya. Bangunan utama "Rumah Bolon" memiliki 14 ruangan yang mencerminkan jumlah istri sang raja. Pada atapnya terpasang 10 tanduk kerbau yang melambangkan 10 generasi dinasti Batak — simbol kejayaan dan keagungan yang masih berdiri kokoh hingga kini.</p>
            </div>
        </div>

        <div class="sejarah-item reverse">
            <div class="sejarah-image"><img src="/image/hutabolon/sejarah2.jpg" alt="Artefak dan Koleksi Museum"></div>
            <div class="sejarah-text">
                <h3>Dijadikan Museum Terbuka Sejak 1969</h3>
                <p>Sejak tahun 1969, kompleks istana Raja Sidauruk resmi dijadikan museum terbuka (open-air museum) untuk umum oleh pemerintah guna melestarikan dan memperkenalkan warisan budaya Batak Toba kepada dunia. Museum ini menyimpan koleksi peninggalan leluhur Batak Toba, antara lain <em>parhalaan</em> (penanggalan tradisional Batak), <em>pustaha laklak</em> (kitab kuno dari kulit kayu), <em>tunggal panaluan</em> (tongkat sakral para datu), dan <em>solu bolon</em> (perahu besar tradisional). Museum ini termasuk dalam kawasan Geosite Simanindo–Batu Hoda dalam Geopark Kaldera Toba yang diakui UNESCO.</p>
            </div>
        </div>

        <div class="sejarah-item">
            <div class="sejarah-image"><img src="/image/hutabolon/sejarah3.jpg" alt="Arsitektur Gorga Rumah Bolon"></div>
            <div class="sejarah-text">
                <h3>Arsitektur Khas & Warisan Geologi Toba</h3>
                <p>Kompleks Huta Bolon menampilkan arsitektur tradisional khas Batak Toba: atap piramida beratap ijuk, dinding papan kayu berukir <em>gorga</em> dengan motif merah-hitam-putih, lantai tanah, serta gerbang batu yang kokoh. Kawasan ini juga berada di atas formasi batuan vulkanik dan endapan piroklastik hasil letusan supervolcano Toba sekitar 74.000 tahun silam — menjadikannya perpaduan luar biasa antara warisan budaya dan warisan geologi dunia.</p>
            </div>
        </div>
    </div>
</section>

<!-- KOLEKSI (menggantikan UMKM) -->
<section id="koleksi" class="section bg-light">
    <div class="container">
        <div class="section-title">
            <h2>Koleksi Museum</h2>
            <div class="divider"></div>
            <p>Artefak dan peninggalan leluhur Batak Toba yang tersimpan di Museum Huta Bolon Simanindo</p>
        </div>

        <div class="grid-3">

            <!-- Card 1 -->
            <div class="card">
                <img src="/image/hutabolon/koleksi-pustaha.jpg" class="card-img" alt="Pustaha Laklak">
                <div class="card-content">
                    <h3>Pustaha Laklak</h3>
                    <p>Kitab kuno Batak Toba yang ditulis di atas kulit kayu oleh para <em>datu</em> (pemuka adat dan ahli spiritual). Berisi ilmu pengetahuan tentang pengobatan tradisional, ramalan, mantra, dan hukum adat Batak yang diwariskan turun-temurun.</p>
                    <div class="card-location">📍 Ruang Pamer Utama Museum</div>
                    <div class="card-contact">🏛️ Koleksi Artefak Batak Toba</div>
                </div>
            </div>

            <!-- Card 2 -->
            <div class="card">
                <img src="/image/hutabolon/koleksi-tungkot.jpg" class="card-img" alt="Tunggal Panaluan dan Tungkot">
                <div class="card-content">
                    <h3>Tunggal Panaluan & Tungkot</h3>
                    <p><em>Tunggal panaluan</em> adalah tongkat sakral berukir milik para pemimpin adat Batak. <em>Tungkot</em> berfungsi sebagai senjata dan alat ritual — dipercaya mampu meramalkan masa depan dan memiliki kekuatan magis. Merupakan salah satu artefak paling ikonik di museum ini.</p>
                    <div class="card-location">📍 Ruang Pamer Koleksi Adat</div>
                    <div class="card-contact">🏛️ Warisan Budaya Tak Benda</div>
                </div>
            </div>

            <!-- Card 3 -->
            <div class="card">
                <img src="/image/hutabolon/koleksi-solubolon.jpg" class="card-img" alt="Solu Bolon dan Parhalaan">
                <div class="card-content">
                    <h3>Solu Bolon & Parhalaan</h3>
                    <p><em>Solu bolon</em> adalah perahu besar tradisional Batak Toba yang digunakan dalam upacara adat dan pelayaran di Danau Toba. <em>Parhalaan</em> merupakan sistem penanggalan tradisional Batak untuk menentukan hari baik dalam berbagai upacara adat dan kehidupan sehari-hari.</p>
                    <div class="card-location">📍 Area Outdoor Museum</div>
                    <div class="card-contact">🏛️ Koleksi Kemaritiman & Adat</div>
                </div>
            </div>

        </div>
    </div>
</section>

<!-- ATRAKSI BUDAYA (menggantikan PENGINAPAN) -->
<section id="atraksi" class="section">
    <div class="container">

        <div class="section-title">
            <h2>Atraksi & Pertunjukan Budaya</h2>
            <div class="divider"></div>
            <p>Pengalaman budaya hidup yang tak terlupakan di Museum Huta Bolon Simanindo</p>
        </div>

        <div class="grid-3">

            <!-- Card 1 -->
            <div class="card">
                <img src="/image/hutabolon/atraksi-tortor.jpg" class="card-img" alt="Tari Tor-Tor">
                <div class="card-content">
                    <h3>Tari Tor-Tor & Gondang</h3>
                    <p>Pertunjukan tari sakral <em>Tor-Tor</em> yang diiringi musik <em>gondang sabangunan</em> — ansambel musik tradisional Batak yang otentik dimainkan oleh musisi lokal, bukan rekaman audio. Pengunjung bahkan berkesempatan ikut menari bersama para penari berbusana adat.</p>
                    <div class="card-price">🎭 Jadwal: Senin–Sabtu pukul 10.30 WIB</div>
                    <div class="card-contact">📅 Minggu: pukul 11.45 WIB</div>
                </div>
            </div>

            <!-- Card 2 -->
            <div class="card">
                <img src="/image/hutabolon/atraksi-sigalegale.jpg" class="card-img" alt="Boneka Sigale-gale">
                <div class="card-content">
                    <h3>Pertunjukan Sigale-gale</h3>
                    <p>Atraksi unik boneka kayu <em>Sigale-gale</em> yang bergerak mengikuti irama musik gondang. Terbuat dari kayu <em>hau pokki</em> (Eusideroxylon Zwageri), boneka ini menggambarkan kisah sedih seorang raja yang kehilangan anaknya — warisan budaya tak benda yang tiada duanya di dunia.</p>
                    <div class="card-price">🪆 Ditampilkan bersamaan dengan Tor-Tor</div>
                    <div class="card-contact">📅 Tidak ada pertunjukan hari Minggu</div>
                </div>
            </div>

            <!-- Card 3 -->
            <div class="card">
                <img src="/image/hutabolon/atraksi-ulos.jpg" class="card-img" alt="Tenun Ulos Batak">
                <div class="card-content">
                    <h3>Edukasi Budaya & Ulos</h3>
                    <p>Pengunjung dapat berinteraksi langsung dengan pemandu lokal yang berpengetahuan, mempelajari arsitektur <em>gorga</em>, filosofi Batak Toba, dan sistem kekerabatan <em>Tarombo</em> (silsilah Batak). Tersedia juga demonstrasi tenun <em>ulos</em> — kain sakral Batak yang tak terpisahkan dari kehidupan adat.</p>
                    <div class="card-price">🧵 Termasuk dalam tiket masuk</div>
                    <div class="card-contact">📅 Setiap hari kunjungan</div>
                </div>
            </div>

        </div>
    </div>
</section>

<!-- FASILITAS -->
<section id="fasilitas" class="section bg-light">
    <div class="container">

        <div class="section-title">
            <h2>Fasilitas & Layanan</h2>
            <div class="divider"></div>
            <p>Fasilitas lengkap untuk kenyamanan wisatawan di Museum Huta Bolon Simanindo</p>
        </div>

        <div class="grid-2">

            <!-- Fasilitas 1 -->
            <div class="fasilitas-item">
                <img src="/image/hutabolon/fasilitas-museum.jpg" class="fasilitas-img" alt="Ruang Pamer Museum">
                <div class="fasilitas-content">
                    <h4>Ruang Pamer Koleksi Artefak</h4>
                    <p>Ruang pamer dengan koleksi lengkap artefak Batak Toba: pustaha laklak, tunggal panaluan, parhalaan, hingga solu bolon yang tertata apik dan informatif</p>
                    <div class="fasilitas-price">Termasuk dalam tiket masuk</div>
                </div>
            </div>

            <!-- Fasilitas 2 -->
            <div class="fasilitas-item">
                <img src="/image/hutabolon/fasilitas-panggung.jpg" class="fasilitas-img" alt="Panggung Pertunjukan">
                <div class="fasilitas-content">
                    <h4>Panggung Pertunjukan Tradisional</h4>
                    <p>Area pertunjukan terbuka di dalam kompleks Huta Bolon untuk menyaksikan tari Tor-Tor, musik gondang, dan atraksi Sigale-gale yang memukau setiap harinya</p>
                    <div class="fasilitas-price">Termasuk dalam tiket masuk</div>
                </div>
            </div>

            <!-- Fasilitas 3 -->
            <div class="fasilitas-item">
                <img src="/image/hutabolon/fasilitas-rumah-adat.jpg" class="fasilitas-img" alt="Kompleks Rumah Adat">
                <div class="fasilitas-content">
                    <h4>Kompleks Rumah Adat Batak Toba</h4>
                    <p>Berjalan mengelilingi kompleks huta yang otentik: Rumah Bolon utama dengan 14 ruangan, lumbung padi, gerbang batu, dan beberapa rumah adat pendukung berukiran gorga</p>
                    <div class="fasilitas-price">Termasuk dalam tiket masuk</div>
                </div>
            </div>

            <!-- Fasilitas 4 -->
            <div class="fasilitas-item">
                <img src="/image/hutabolon/fasilitas-souvenir.jpg" class="fasilitas-img" alt="Kios Souvenir">
                <div class="fasilitas-content">
                    <h4>Kios Souvenir & Kerajinan Batak</h4>
                    <p>Tersedia kios souvenir yang menjual kerajinan tangan khas Batak Toba, ulos, ukiran kayu gorga, dan berbagai oleh-oleh budaya otentik dari Pulau Samosir</p>
                    <div class="fasilitas-price">Mulai dari Rp 20.000</div>
                </div>
            </div>

            <!-- Fasilitas 5 -->
            <div class="fasilitas-item">
                <img src="/image/hutabolon/fasilitas-parkir.jpg" class="fasilitas-img" alt="Area Parkir">
                <div class="fasilitas-content">
                    <h4>Area Parkir & Toilet</h4>
                    <p>Area parkir yang luas dan aman untuk kendaraan roda dua maupun empat, dilengkapi dengan toilet bersih dan terawat untuk kenyamanan pengunjung</p>
                    <div class="fasilitas-price">Gratis untuk pengunjung</div>
                </div>
            </div>

            <!-- Fasilitas 6 -->
            <div class="fasilitas-item">
                <img src="/image/hutabolon/fasilitas-pemandu.jpg" class="fasilitas-img" alt="Pemandu Lokal">
                <div class="fasilitas-content">
                    <h4>Pemandu Wisata Lokal</h4>
                    <p>Pemandu lokal yang berpengalaman dan berpengetahuan luas siap menemani dan menjelaskan setiap sudut museum — dari arsitektur gorga hingga makna filosofis setiap artefak</p>
                    <div class="fasilitas-price">Tersedia dengan biaya tambahan</div>
                </div>
            </div>

        </div>
    </div>
</section>

<!-- GALERI -->
<section id="galeri" class="section">
    <div class="container">

        <div class="section-title">
            <h2>Galeri Museum Huta Bolon</h2>
            <div class="divider"></div>
            <p>Keindahan arsitektur, koleksi artefak, dan pertunjukan budaya Museum Huta Bolon Simanindo</p>
        </div>

        <div class="galeri-tabs">
            <button class="tab-btn active" data-tab="arsitektur">Arsitektur & Kompleks</button>
            <button class="tab-btn" data-tab="artefak">Koleksi Artefak</button>
            <button class="tab-btn" data-tab="pertunjukan">Pertunjukan Budaya</button>
        </div>

        <div class="galeri-grid" id="galeriGrid">

            <?php for($i=1;$i<=4;$i++): ?>
                <div class="galeri-item arsitektur">
                    <img src="/image/hutabolon/arsitektur-<?php echo e($i); ?>.jpg" alt="Arsitektur Huta Bolon - Foto <?php echo e($i); ?>" loading="lazy">
                </div>
            <?php endfor; ?>

            <?php for($i=1;$i<=4;$i++): ?>
                <div class="galeri-item artefak" style="display:none">
                    <img src="/image/hutabolon/artefak-<?php echo e($i); ?>.jpg" alt="Koleksi Artefak - Foto <?php echo e($i); ?>" loading="lazy">
                </div>
            <?php endfor; ?>

            <?php for($i=1;$i<=4;$i++): ?>
                <div class="galeri-item pertunjukan" style="display:none">
                    <img src="/image/hutabolon/pertunjukan-<?php echo e($i); ?>.jpg" alt="Pertunjukan Budaya - Foto <?php echo e($i); ?>" loading="lazy">
                </div>
            <?php endfor; ?>

        </div>
    </div>
</section>

<!-- LOKASI -->
<section id="lokasi" class="section bg-light">
    <div class="container">

        <div class="section-title">
            <h2>Lokasi & Cara Mencapai</h2>
            <div class="divider"></div>
            <p>
                Museum Huta Bolon Simanindo berlokasi di Jl. Pelabuhan Simanindo, Desa Simanindo,
                Kecamatan Simanindo, Kabupaten Samosir — sekitar 15 km utara Tuk Tuk, Pulau Samosir.
            </p>
        </div>

        <div class="maps-section">

            <!-- Google Maps -->
<div class="maps-container">
    <iframe
        src="https://www.google.com/maps?q=Museum+Huta+Bolon+Simanindo&hl=id&z=17&output=embed"
        width="100%"
        height="420"
        style="border:0;"
        allowfullscreen=""
        loading="lazy"
        referrerpolicy="no-referrer-when-downgrade">
    </iframe>
</div>

            <!-- Informasi Rute -->
            <div class="rute-info">

                <!-- Rute 1 -->
                <div class="rute-item">
                    <h4>🚗 Dari Medan via Parapat</h4>
                    <p>
                        Medan → Parapat (±4 jam) → Feri ke Samosir (±45 menit)
                        → Simanindo → Museum Huta Bolon (±15 km dari Tuk Tuk, sekitar 30 menit)
                    </p>
                    <span class="rute-time">± 5–6 jam perjalanan total</span>
                </div>

                <!-- Rute 2 -->
                <div class="rute-item">
                    <h4>🏍️ Dari Tuk Tuk / Tomok</h4>
                    <p>
                        Sewa motor atau mobil dari Tuk Tuk → Ikuti jalan utama menuju
                        Simanindo → Museum berada di tepi jalan utama Jl. Pelabuhan Simanindo,
                        mudah dijangkau dan banyak penanda jalan
                    </p>
                    <span class="rute-time">± 30 menit dari Tuk Tuk</span>
                </div>

                <!-- Rute 3 -->
                <div class="rute-item">
                    <h4>🕘 Jam Operasional & Tiket Masuk</h4>
                    <p>
                        Museum buka setiap hari pukul 09.00–17.00 WIB.
                        Pertunjukan Tor-Tor & Sigale-gale: Senin–Sabtu pukul 10.30 WIB
                        dan Minggu pukul 11.45 WIB. Tersedia tiket masuk terjangkau.
                    </p>
                    <span class="rute-time">
                        Waktu terbaik: pagi sebelum pertunjukan dimulai
                    </span>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- CTA -->
<section class="cta">
    <div class="container">
        <h3>Selami Warisan Budaya Batak Toba di Huta Bolon</h3>
        <div class="divider"></div>

        <p>
            Rasakan perpaduan luar biasa antara arsitektur kuno, artefak leluhur, pertunjukan Tor-Tor dan Sigale-gale yang memukau, serta warisan geologi Kaldera Toba yang diakui UNESCO — semua dalam satu destinasi di Geosite Simanindo, Pulau Samosir
        </p>

        <div class="cta-buttons">
            <a href="<?php echo e(url('/')); ?>" class="cta-btn">Kembali ke Beranda</a>
            <a href="#lokasi" class="cta-btn cta-btn-secondary">Lihat Lokasi</a>
        </div>
    </div>
</section>

<!-- FOOTER -->
<footer class="footer">
    <div class="footer-container">
        <div class="footer-logo">
            <img src="[GANTI_LINK_BENDERA]" class="footer-logo-img" alt="Bendera">
            <div class="footer-logo-divider"></div>
            <img src="[GANTI_LINK_DEL]" class="footer-logo-img" alt="Del">
            <div class="footer-logo-divider"></div>
            <div class="footer-logo-text">
                <h4>GEOTOBA</h4>
                <p>Geopark Danau Toba</p>
            </div>
        </div>
        <div class="footer-nav">
            <a href="<?php echo e(url('/')); ?>">Home</a>
            <a href="#sejarah">Sejarah</a>
            <a href="#koleksi">Koleksi</a>
            <a href="#atraksi">Atraksi Budaya</a>
            <a href="#fasilitas">Fasilitas</a>
            <a href="#galeri">Galeri</a>
            <a href="#lokasi">Lokasi</a>
        </div>
        <div class="footer-copyright">
            <p>&copy; 2024 GEOTOBA. All rights reserved.</p>
        </div>
    </div>
</footer>

<!-- LIGHTBOX ZOOM -->
<div class="lightbox" id="lightbox">
    <div class="lightbox-container">
        <div class="lightbox-close" onclick="closeLightbox()">✕</div>
        <button class="lightbox-prev" id="lightboxPrev" onclick="prevLightboxImage()">‹</button>
        <div class="lightbox-image-wrapper">
            <img id="lightboxImg" class="lightbox-img-zoomable">
            <div class="zoom-controls">
                <button class="zoom-btn" onclick="zoomLightboxImage(-0.2)" title="Zoom Out">−</button>
                <span class="zoom-level" id="zoomLevel">100%</span>
                <button class="zoom-btn" onclick="zoomLightboxImage(0.2)" title="Zoom In">+</button>
                <button class="zoom-btn" onclick="resetLightboxZoom()" title="Reset">⟲</button>
            </div>
        </div>
        <button class="lightbox-next" id="lightboxNext" onclick="nextLightboxImage()">›</button>
    </div>
    <div class="lightbox-info">
        <span id="lightboxCounter">1/12</span>
        <span class="lightbox-hint">Scroll untuk zoom | Klik tombol +/- untuk zoom manual</span>
    </div>
</div>

<script>
    // ========== LIGHTBOX ZOOM ADVANCED ==========
    let currentImageIndex = 0;
    let allGaleriImages = [];
    let currentZoom = 1;
    let currentPanX = 0;
    let currentPanY = 0;

    function initLightboxImages() {
        allGaleriImages = Array.from(document.querySelectorAll('.galeri-item:not([style*="display:none"]) img'));
    }

    function openLightbox(img) {
        const lightbox = document.getElementById('lightbox');
        const lightboxImg = document.getElementById('lightboxImg');
        initLightboxImages();

        const allImages = document.querySelectorAll('.galeri-item img');
        currentImageIndex = Array.from(allImages).indexOf(img);

        lightboxImg.src = img.src;
        lightbox.classList.add('active');
        document.body.style.overflow = 'hidden';
        resetLightboxZoom();
        updateLightboxCounter();
    }

    function closeLightbox() {
        const lightbox = document.getElementById('lightbox');
        lightbox.classList.remove('active');
        document.body.style.overflow = '';
        resetLightboxZoom();
    }

    function zoomLightboxImage(delta) {
        const newZoom = currentZoom + delta;
        if (newZoom >= 1 && newZoom <= 3) {
            currentZoom = newZoom;
            updateLightboxImage();
        }
    }

    function resetLightboxZoom() {
        currentZoom = 1;
        currentPanX = 0;
        currentPanY = 0;
        updateLightboxImage();
    }

    function updateLightboxImage() {
        const img = document.getElementById('lightboxImg');
        img.style.transform = `scale(${currentZoom}) translate(${currentPanX}px, ${currentPanY}px)`;
        document.getElementById('zoomLevel').textContent = Math.round(currentZoom * 100) + '%';
    }

    function nextLightboxImage() {
        const allImages = document.querySelectorAll('.galeri-item:not([style*="display:none"]) img');
        currentImageIndex = (currentImageIndex + 1) % allImages.length;
        openLightbox(allImages[currentImageIndex]);
    }

    function prevLightboxImage() {
        const allImages = document.querySelectorAll('.galeri-item:not([style*="display:none"]) img');
        currentImageIndex = (currentImageIndex - 1 + allImages.length) % allImages.length;
        openLightbox(allImages[currentImageIndex]);
    }

    function updateLightboxCounter() {
        const allImages = document.querySelectorAll('.galeri-item:not([style*="display:none"]) img');
        document.getElementById('lightboxCounter').textContent = (currentImageIndex + 1) + '/' + allImages.length;
    }

    // Lightbox scroll zoom
    const lightboxContainer = document.querySelector('.lightbox-image-wrapper');
    if (lightboxContainer) {
        lightboxContainer.addEventListener('wheel', function(e) {
            if (document.getElementById('lightbox').classList.contains('active')) {
                e.preventDefault();
                if (e.deltaY < 0) {
                    zoomLightboxImage(0.1);
                } else {
                    zoomLightboxImage(-0.1);
                }
            }
        }, { passive: false });

        // Pinch zoom support
        let lastDistance = 0;
        lightboxContainer.addEventListener('touchmove', function(e) {
            if (document.getElementById('lightbox').classList.contains('active') && e.touches.length === 2) {
                e.preventDefault();
                const touch1 = e.touches[0];
                const touch2 = e.touches[1];
                const distance = Math.hypot(
                    touch2.clientX - touch1.clientX,
                    touch2.clientY - touch1.clientY
                );
                if (lastDistance !== 0) {
                    const delta = (distance - lastDistance) / 100;
                    zoomLightboxImage(delta);
                }
                lastDistance = distance;
            }
        }, { passive: false });

        lightboxContainer.addEventListener('touchend', function() {
            lastDistance = 0;
        });
    }

    // Lightbox keyboard navigation
    document.addEventListener('keydown', function(e) {
        if (document.getElementById('lightbox').classList.contains('active')) {
            if (e.key === 'ArrowRight') nextLightboxImage();
            if (e.key === 'ArrowLeft') prevLightboxImage();
            if (e.key === 'Escape') closeLightbox();
            if (e.key === '+' || e.key === '=') zoomLightboxImage(0.1);
            if (e.key === '-') zoomLightboxImage(-0.1);
        }
    });

    // ========== HAMBURGER MENU ==========
    var hamburger = document.getElementById('hamburger');
    var mobileOverlay = document.getElementById('mobileOverlay');
    var mobileClose = document.getElementById('mobileClose');

    hamburger.addEventListener('click', function() {
        mobileOverlay.classList.add('active');
        document.body.style.overflow = 'hidden';
    });

    function closeMenu() {
        mobileOverlay.classList.remove('active');
        document.body.style.overflow = '';
    }

    mobileClose.addEventListener('click', closeMenu);
    document.querySelectorAll('.mobile-link').forEach(function(link) {
        link.addEventListener('click', closeMenu);
    });

    // ========== GALERI TABS ==========
    document.querySelectorAll('.tab-btn').forEach(function(btn) {
        btn.addEventListener('click', function() {
            document.querySelectorAll('.tab-btn').forEach(function(b) {
                b.classList.remove('active');
            });
            btn.classList.add('active');
            var tab = btn.dataset.tab;
            document.querySelectorAll('.galeri-item').forEach(function(item) {
                item.style.display = item.classList.contains(tab) ? 'block' : 'none';
            });
            resetLightboxZoom();
        });
    });

    // ========== GALERI IMAGE CLICK ==========
    document.querySelectorAll('.galeri-item img').forEach(function(img) {
        img.addEventListener('click', function() {
            openLightbox(this);
        });
    });

    // Lightbox click outside
    const lightbox = document.getElementById('lightbox');
    lightbox.addEventListener('click', function(e) {
        if (e.target === lightbox) closeLightbox();
    });

    // ========== SMOOTH SCROLL ==========
    document.querySelectorAll('.nav-link[href^="#"], .mobile-link[href^="#"]').forEach(function(anchor) {
        anchor.addEventListener('click', function(e) {
            e.preventDefault();
            var target = document.querySelector(this.getAttribute('href'));
            if (target) target.scrollIntoView({ behavior: 'smooth' });
        });
    });
</script>
</body>
</html>
<?php /**PATH D:\.kuliah\PA 1\PA-1-\resources\views/geosite/liang-sipege.blade.php ENDPATH**/ ?>