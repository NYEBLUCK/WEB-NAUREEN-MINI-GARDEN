<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tentang Kami - Naureen Mini Garden</title>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    
    <link rel="stylesheet" href="../assets/css/style.css?v=<?= time(); ?>">
    <link rel="stylesheet" href="../assets/css/tentang.css?v=<?= time(); ?>">
</head>
<body class="bg-tentang">

<div id="app">
    <?php include 'templates/navbar_public.php'; ?>

    <main style="padding-top: 100px; padding-bottom: 60px;">
        <div class="container">
            
            <div class="text-center" data-aos="fade-up">
                <h1 class="page-header-title">Tentang Kami</h1>
            </div>

            <div class="row g-4 align-items-center">
                <div class="col-lg-5" data-aos="fade-right">
                    <p class="text-muted small fw-bold mb-3">VISI & MISI KAMI</p>
                    
                    <div class="vm-box">
                        <div class="vm-title"><i class="far fa-eye"></i> Visi</div>
                        <p class="vm-text">
                            Menjadi destinasi wisata edukasi dan rekreasi keluarga yang memberikan pengalaman belajar, bermain, dan berinteraksi dengan alam secara menyenangkan dan bermanfaat bagi masyarakat.
                        </p>
                    </div>

                    <div class="vm-box">
                        <div class="vm-title"><i class="far fa-flag"></i> Misi</div>
                        <ol class="vm-list mb-0">
                            <li>Menyediakan fasilitas rekreasi yang aman, nyaman, dan terjangkau untuk semua kalangan.</li>
                            <li>Mendukung pembelajaran anak tentang alam dan satwa melalui kegiatan interaktif.</li>
                            <li>Melestarikan vegetasi lokal seperti lebah kelulut dan aneka taman bunga yang asri.</li>
                        </ol>
                    </div>
                </div>

                <div class="col-lg-7" data-aos="fade-left">
                    <img src="../assets/images/alami.jpg" alt="Naureen Mini Garden" class="about-hero-img">
                </div>
            </div>

            <div class="about-description" data-aos="fade-up">
                <p class="mb-3">
                    Naureen Mini Garden merupakan destinasi wisata keluarga di Samarinda yang menawarkan suasana alam asri dengan berbagai fasilitas menarik seperti terapi ikan, spot foto estetik, hingga area bermain anak.
                </p>
                <p>
                    Pengembangan tempat ini dilakukan secara bertahap dengan memanfaatkan potensi alam yang ada, menjadikannya salah satu pilihan utama untuk melepas penat sambil belajar mengenal lingkungan bagi siswa maupun keluarga.
                </p>
            </div>

            <div class="timeline-title" data-aos="fade-up">SEJARAH KAMI</div>
            
            <div class="timeline">
                
                <div class="timeline-item" data-aos="fade-up">
                    <div class="timeline-content">
                        <div class="timeline-badge">2020</div>
                        <h5>Awal Mula</h5>
                        <p>Dibangun sebagai kebun sayur keluarga di masa pandemi. Nama diambil dari putri bungsu pemilik.</p>
                    </div>
                </div>

                <div class="timeline-item" data-aos="fade-up">
                    <div class="timeline-content">
                        <div class="timeline-badge">Pengembangan</div>
                        <h5>Vegetasi & Bunga</h5>
                        <p>Mulai membudidayakan lebah kelulut dan menanam beragam bunga sebagai vegetasi pendukung.</p>
                    </div>
                </div>

                <div class="timeline-item" data-aos="fade-up">
                    <div class="timeline-content">
                        <div class="timeline-badge">Masa Kini</div>
                        <h5>Dibuka untuk Umum</h5>
                        <p>Resmi menjadi tempat wisata publik setelah viral sebagai "surga tersembunyi" di Samarinda.</p>
                    </div>
                </div>

                <div class="timeline-item" data-aos="fade-up">
                    <div class="timeline-content">
                        <div class="timeline-badge">Inovasi</div>
                        <h5>Terus Berkembang</h5>
                        <p>Terus menambah fasilitas edukasi satwa dan rencana pembangunan danau buatan di area belakang.</p>
                    </div>
                </div>

            </div>

        </div>
    </main>

    <?php include 'templates/footer_public.php'; ?>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script src="https://unpkg.com/vue@3/dist/vue.global.js"></script>

<script>
    const { createApp, ref, onMounted, computed } = Vue;

    createApp({
        setup() {
            const scrollY = ref(0);
            window.addEventListener('scroll', () => { scrollY.value = window.scrollY; });
            const navStyle = computed(() => {
                return scrollY.value > 50 
                    ? { background: 'rgba(30, 70, 32, 0.95)', boxShadow: '0 4px 6px rgba(0,0,0,0.1)' }
                    : { background: 'rgba(30, 70, 32, 0.9)', boxShadow: 'none' };
            });

            onMounted(() => { AOS.init({ duration: 800, once: true }); });
            return { navStyle };
        }
    }).mount('#app');
</script>
</body>
</html>