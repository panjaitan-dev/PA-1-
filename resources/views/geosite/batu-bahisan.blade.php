<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, viewport-fit=cover">
    <title>Batu Passa - Geosite Danau Toba</title>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&family=Cormorant+Garamond:wght@400;500;600;700&display=swap" rel="stylesheet">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/batu-bahisan.css') }}">
</head>
<body>

<!-- NAVBAR -->
<div class="navbar">
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
            <a href="{{ url('/') }}" class="nav-link home-btn">Home</a>
            <a href="#sejarah" class="nav-link">Sejarah</a>
            <a href="#galeri" class="nav-link">Galeri</a>
        </div>
        <div class="hamburger" id="hamburger">
            <span></span><span></span><span></span>
        </div>
    </div>
</div>

<!-- Mobile Menu -->
    <div class="mobile-overlay" id="mobileOverlay">
        <div class="mobile-close" id="mobileClose">×</div>
        <a href="{{ url('/') }}" class="mobile-link mobile-home">Home</a>
        <a href="#sejarah" class="mobile-link">Sejarah</a>
        <a href="#galeri" class="mobile-link">Galeri</a>
    </div>

<!-- HERO -->
    <section class="hero">
        <div data-aos="fade-up">
            <h1 class="hero-title">BATU PASSA</h1>
            <p class="hero-subtitle">Pulau Sibandang · Geosite Kaldera Toba UNESCO</p>
        </div>
    </section>

    <!-- SEJARAH -->
    <section id="sejarah" class="section">
        <div class="container">
            <div class="section-title" data-aos="fade-up">
                <h2>Sejarah</h2>
                <div class="divider"></div>
            </div>

            <div class="sejarah-grid">

                <!-- Sejarah 1 -->
                <div class="sejarah-item" data-aos="fade-right">
                    <div class="sejarah-image">
                        <img src="/image/batu/sejarah1.jpg" alt="Batu Passa 1">
                    </div>
                    <div class="sejarah-text">
                        <p>Batu Passa adalah formasi batuan alam di pesisir Pulau Sibandang, Danau Toba. Pulau Sibandang merupakan kubah lava dasit — batuan beku berbutir halus — yang terbentuk sekitar 46.000 tahun lalu, tepatnya 28.000 tahun setelah letusan supervolcano Gunung Purba Toba pada 74.000 tahun yang lalu. Letusan terdahsyat itu berpusat tepat di Kaldera Sibandang, menjadikan kawasan ini salah satu bukti geologi paling penting di dunia.</p>
                    </div>
                </div>

                <!-- Sejarah 2 -->
                <div class="sejarah-item reverse" data-aos="fade-left">
                    <div class="sejarah-image">
                        <img src="/image/batu/sejarah2.jpg" alt="Batu Passa 2">
                    </div>
                    <div class="sejarah-text">
                        <p>Pulau Sibandang, termasuk kawasan Batu Passa, merupakan salah satu dari 16 geosite resmi Toba Caldera UNESCO Global Geopark. Bebatuan di sepanjang pesisir pulau ini adalah bagian dari sisa letusan kaldera yang terangkat menjadi daratan. Masyarakat Batak dari empat marga — Ompusunggu, Rajagukguk, Simaremare, dan Siregar — telah hidup di antara bebatuan vulkanik ini selama berabad-abad, membangun peradaban dan warisan leluhur yang kaya.</p>
                    </div>
                </div>

                <!-- Sejarah 3 -->
                <div class="sejarah-item" data-aos="fade-right">
                    <div class="sejarah-image">
                        <img src="/image/batu/sejarah3.jpg" alt="Batu Passa 3">
                    </div>
                    <div class="sejarah-text">
                        <p>Batu Passa telah lama menjadi tempat peristirahatan dan berkumpul alami bagi masyarakat setempat. Di sekitar kawasan ini, jejak Kerajaan Sibandang masih dapat dijumpai — mulai dari benteng batu, Rumah Bolon (istana raja), hingga situs Partukkoan berupa kursi batu tempat para raja dahulu bermusyawarah. Dari puncak Pulau Sibandang setinggi 910 mdpl, pengunjung dapat menikmati panorama 360 derajat Danau Toba yang memukau.</p>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- GALERI -->
    <section id="galeri" class="section bg-light">
        <div class="container">
            <div class="section-title" data-aos="fade-up">
                <h2>Galeri</h2>
                <div class="divider"></div>
                <p>Keindahan Batu Passa</p>
            </div>

            <div class="galeri-grid" id="galeriGrid">
                <div class="galeri-item"><img src="/image/batu/galeri1.jpg" alt="Batu Passa 1"></div>
                <div class="galeri-item"><img src="/image/batu/galeri2.jpg" alt="Batu Passa 2"></div>
                <div class="galeri-item"><img src="/image/batu/galeri3.jpg" alt="Batu Passa 3"></div>
                <div class="galeri-item"><img src="/image/batu/galeri4.jpg" alt="Batu Passa 4"></div>
                <div class="galeri-item"><img src="/image/batu/galeri5.jpg" alt="Batu Passa 5"></div>
                <div class="galeri-item"><img src="/image/batu/galeri6.jpg" alt="Batu Passa 6"></div>
                <div class="galeri-item"><img src="/image/batu/galeri7.jpg" alt="Batu Passa 7"></div>
                <div class="galeri-item"><img src="/image/batu/galeri8.jpg" alt="Batu Passa 8"></div>
            </div>
        </div>
    </section>

    <!-- Google Maps -->
<div class="maps-container">
    <iframe
        src="https://www.google.com/maps?q=Batu+Passa+Liang+Sipogu&hl=id&z=17&output=embed"
        width="100%"
        height="420"
        style="border:0;"
        allowfullscreen=""
        loading="lazy"
        referrerpolicy="no-referrer-when-downgrade">
    </iframe>
</div>

    <!-- CTA -->
    <section class="cta">
        <div class="container" data-aos="fade-up">
            <h3>Kunjungi Batu Passa Sekarang</h3>
            <div class="divider"></div>
            <p>Nikmati keindahan formasi batuan vulkanik purba dan panorama Danau Toba dari Geosite UNESCO Pulau Sibandang</p>
            <a href="{{ url('/') }}" class="cta-btn">Kembali ke Beranda</a>
        </div>
    </section>

    <!-- LIGHTBOX -->
    <div class="lightbox" id="lightbox">
        <div class="lightbox-close" onclick="closeLightbox()">×</div>
        <img id="lightboxImg">
    </div>



<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script>
    AOS.init({ duration: 700, once: true, offset: 50 });

    // Hamburger Menu
    const hamburger = document.getElementById('hamburger');
    const mobileOverlay = document.getElementById('mobileOverlay');
    const mobileClose = document.getElementById('mobileClose');

    hamburger.addEventListener('click', () => {
        mobileOverlay.classList.add('active');
        document.body.style.overflow = 'hidden';
    });

    const closeMenu = () => {
        mobileOverlay.classList.remove('active');
        document.body.style.overflow = '';
    };

    mobileClose.addEventListener('click', closeMenu);

    document.querySelectorAll('.mobile-link').forEach(link => {
        link.addEventListener('click', closeMenu);
    });

    // Active link on scroll
    const sections = document.querySelectorAll('section[id]');
    const navLinks = document.querySelectorAll('.nav-link:not(.home-btn), .mobile-link:not(.mobile-home)');

    window.addEventListener('scroll', () => {
        let current = '';

        sections.forEach(section => {
            const top = section.offsetTop - 100;
            if (scrollY >= top) current = section.getAttribute('id');
        });

        navLinks.forEach(link => {
            link.classList.remove('active');

            if (link.getAttribute('href') === `#${current}`) {
                link.classList.add('active');
            }
        });
    });

    // Lightbox
    const lightbox = document.getElementById('lightbox');

    document.querySelectorAll('.galeri-item img').forEach(img => {
        img.addEventListener('click', () => {
            lightbox.classList.add('active');
            document.getElementById('lightboxImg').src = img.src;
        });
    });

    function closeLightbox() {
        lightbox.classList.remove('active');
    }

    lightbox.addEventListener('click', (e) => {
        if (e.target === lightbox) closeLightbox();
    });

    // Smooth scroll
    document.querySelectorAll('.nav-link[href^="#"], .mobile-link[href^="#"]').forEach(anchor => {
        anchor.addEventListener('click', function(e) {
            e.preventDefault();

            const target = document.querySelector(this.getAttribute('href'));

            if (target) {
                target.scrollIntoView({
                    behavior: 'smooth'
                });
            }
        });
    });

</script>

</body>
</html>