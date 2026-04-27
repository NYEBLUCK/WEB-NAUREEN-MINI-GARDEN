<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <title>Detail Wisata - Naureen Mini Garden</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700;800&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    
    <link rel="stylesheet" href="../assets/css/style.css?v=<?= time(); ?>">
    <link rel="stylesheet" href="../assets/css/detail.css?v=<?= time(); ?>">
    
</head>
<body class="dw-body">

<div id="app">

    <?php include 'templates/navbar_public.php'; ?>

    <main class="dw-main">

        <section class="dw-hero" data-aos="zoom-in" data-aos-duration="1000">
            <div class="dw-hero-bg"></div>
            <div class="dw-hero-curve"></div>
            <div class="dw-hero-content" data-aos="fade-right" data-aos-delay="300">
                <span class="dw-hero-badge">Wisata Alam & Edukasi</span>
                <h1>Yuk Jelajahi Serunya<br>Naureen Mini Garden</h1>
            </div>
            <div class="dw-ticket-card" data-aos="fade-left" data-aos-delay="500">
                <p>Tiket Masuk Hanya</p>
                <div class="dw-ticket-price">
                    <span class="dw-price-main">10k</span>
                    <span class="dw-price-sub">/orang</span>
                </div>
            </div>
        </section>

        <section id="spot-foto" class="dw-activity">
            <div class="container-fluid" style="max-width:1280px">
                <div class="text-center mb-5" data-aos="fade-up">
                    <h2 class="dw-section-title">Spot Foto & Aktivitas Seru</h2>
                    <p class="dw-section-sub mt-2">Nikmati berbagai spot foto gratis, area unggulan, dan permainan seru di Naureen Mini Garden.</p>
                </div>

                <div style="max-width:1180px;margin:0 auto 80px">
                    <div class="mb-4" data-aos="fade-up">
                        <h3 style="font-size:1.7rem;font-weight:700;color:#18402f;margin-bottom:6px">Spot Foto Gratis</h3>
                        <p class="dw-section-sub">Semua spot dapat dinikmati tanpa biaya tambahan (termasuk tiket masuk)</p>
                    </div>
                    <div class="dw-free-spot-grid" data-aos="fade-up" data-aos-delay="200">
                        <div class="dw-free-item dw-fi-1 dw-wide" style="background-image:url('../assets/images/foto-1.jpg'); cursor: pointer;" @click="openLightbox('../assets/images/foto-1.jpg')">
                            <span class="dw-free-badge">FREE SPOT</span>
                        </div>
                        <div class="dw-free-item dw-fi-2" style="background-image:url('../assets/images/foto-2.jpg'); cursor: pointer;" @click="openLightbox('../assets/images/foto-2.jpg')"></div>
                        <div class="dw-free-item dw-fi-3 dw-tall" style="background-image:url('../assets/images/spot-foto.jpg'); cursor: pointer;" @click="openLightbox('../assets/images/spot-foto.jpg')"></div>
                        <div class="dw-free-item dw-fi-4" style="background-image:url('../assets/images/lebah.jpg'); cursor: pointer;" @click="openLightbox('../assets/images/lebah.jpg')"></div>
                        <div class="dw-free-item dw-fi-5 dw-tall" style="background-image:url('../assets/images/foto-5.jpg'); cursor: pointer;" @click="openLightbox('../assets/images/foto-5.jpg')"></div>
                        <div class="dw-free-item dw-fi-6" style="background-image:url('../assets/images/foto-6.jpg'); cursor: pointer;" @click="openLightbox('../assets/images/foto-6.jpg')"></div>
                        <div class="dw-free-item dw-fi-7" style="background-image:url('../assets/images/kura.jpg'); cursor: pointer;" @click="openLightbox('../assets/images/kura.jpg')"></div>
                        <div class="dw-free-item dw-fi-8 dw-wide" style="background-image:url('../assets/images/foto-8.jpg'); cursor: pointer;" @click="openLightbox('../assets/images/foto-8.jpg')"></div>
                    </div>
                </div>

                <div class="dw-premium-wrapper" data-aos="fade-up">
                    <div class="dw-premium-grid">
                        <div class="dw-premium-intro" data-aos="fade-right">
                            <h3>Spot Unggulan</h3>
                            <div class="dw-premium-subtitle">
                                <span style="color:#795900;font-size:1.1rem"><i class="fa-solid fa-star"></i></span>
                                <p>Spot Terbaru di Naureen Mini Garden</p>
                            </div>
                            <p class="dw-premium-desc">Yuk kunjungi area spot terbaru dan nikmati berbagai permainan seru di Naureen Mini Garden!</p>
                        </div>

                        <article class="dw-premium-card dw-pc-large" data-aos="zoom-in" data-aos-delay="100">
                            <div class="dw-premium-img dw-pimg-1" style="cursor: pointer;" @click="openLightbox('../assets/images/jembatan.jpg')"></div>
                            <h4>Spot Jembatan</h4>
                            <p>Salah satu spot terbaru di NMG yang wajib kamu coba! Dengan pemandangan alam yang indah, jembatan ini jadi salah satu spot foto favorit pengunjung.</p>
                            <span class="dw-price-pill">5K / orang</span>
                        </article>

                        <article class="dw-premium-card dw-pc-wide" data-aos="fade-up" data-aos-delay="200">
                            <div class="dw-premium-img dw-pimg-2" style="cursor: pointer;" @click="openLightbox('../assets/images/hidden-garden.jpg')"></div>
                            <h4>Naureen Hidden Garden</h4>
                            <p>Taman tersembunyi dengan suasana asri dan nyaman, cocok untuk liburan bareng keluarga, teman, maupun sahabat.</p>
                            <span class="dw-price-pill">5K / orang</span>
                        </article>

                        <article class="dw-premium-card dw-pc-small" data-aos="fade-left" data-aos-delay="300">
                            <div class="dw-premium-img dw-pimg-3" style="cursor: pointer;" @click="openLightbox('../assets/images/nerf-nmg.jpeg')"></div>
                            <h4>Nerf Fun Shooting</h4>
                            <p>Permainan seru yang bisa melatih fokus, motorik, dan ketangkasan anak dengan cara yang menyenangkan.</p>
                            <div class="dw-price-group">
                                <span class="dw-price-pill" style="font-size:.8rem">15K / 30 peluru</span>
                                <span class="dw-price-pill dw-gold">20K / 40 peluru</span>
                            </div>
                        </article>
                    </div>
                </div>
            </div>
        </section>

        <section id="terapi" class="dw-fish">
            <div class="dw-fish-container">
                <div class="mb-5" data-aos="fade-up">
                    <h2 class="dw-section-title" style="color: #2d5a27;">Terapi Ikan</h2>
                    <p class="dw-section-sub mt-2" style="max-width: 700px;">Nikmati pengalaman terapi ikan yang unik dengan berbagai pilihan sensasi yang menyenangkan dan menenangkan.</p>
                </div>
                <div class="dw-fish-grid">
                    <div class="dw-fish-free" data-aos="fade-right">
                        <div class="dw-therapy-label">
                            <h3>Gratis</h3>
                        </div>
                        <div class="dw-free-card">
                            <div class="dw-free-card-img" style="cursor: pointer;" @click="openLightbox('../assets/images/nila-merah.jpg')"></div>
                            <div class="dw-free-card-info">
                                <div class="dw-free-icon"><i class="fa-solid fa-fish text-white"></i></div>
                                <div>
                                    <h4>Ikan Nila Merah</h4>
                                    <p>Nikmati pengalaman bermain dan terapi ringan bersama ikan nila merah secara gratis untuk semua pengunjung.</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="dw-fish-paid" data-aos="fade-left" data-aos-delay="200">
                        <div class="dw-therapy-label">
                            <h3>Berbayar</h3>
                        </div>
                        <div class="dw-paid-card">
                            <div class="dw-paid-bg" style="cursor: pointer;" @click="openLightbox('../assets/images/terapi.jpg')"></div>
                            <div class="dw-paid-content">
                                <h4>Ikan Nilem</h4>
                                <p>Sensasi kesemutan lembut yang membantu melancarkan sirkulasi darah dan memberikan efek relaksasi.</p>
                                <div class="dw-price-grid">
                                    <div class="dw-price-box dw-gold-box"><span>15 Mnt</span><strong>20k</strong></div>
                                    <div class="dw-price-box dw-gold-box"><span>30 Mnt</span><strong>35k</strong></div>
                                    <div class="dw-price-box dw-gold-box"><span>60 Mnt</span><strong>60k</strong></div>
                                </div>
                            </div>
                        </div>

                        <div class="dw-paid-card">
                            <div class="dw-paid-bg" style="cursor: pointer;" @click="openLightbox('../assets/images/terapi.jpg')"></div>
                            <div class="dw-paid-content">
                                <h4>Ikan Garra Rufa</h4>
                                <p>Memberikan sensasi seperti dipijat, membantu mengangkat sel kulit mati dan merilekskan kaki.</p>
                                <div class="dw-price-grid">
                                    <div class="dw-price-box dw-blue-box"><span>15 Mnt</span><strong>25k</strong></div>
                                    <div class="dw-price-box dw-blue-box"><span>30 Mnt</span><strong>40k</strong></div>
                                    <div class="dw-price-box dw-blue-box"><span>60 Mnt</span><strong>65k</strong></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <section id="mancing" class="dw-fishing" data-aos="fade-up">
                    <div class="dw-fishing-content">
                        <h2>Pemancingan</h2>
                        <p>Nikmati pengalaman memancing di area danau yang asri dan menenangkan. Cocok untuk bersantai bersama keluarga maupun menikmati hobi di suasana alam terbuka.</p>
                        <div class="dw-fishing-row">
                            <div class="dw-fishing-item">
                                <div class="dw-fishing-icon"><i class="fa-solid fa-shrimp fa-fw" style="color: #18402f;"></i></div>
                                <div><span>Sewa Pancing</span><strong>30k</strong></div>
                            </div>
                            <div class="dw-fishing-item">
                                <div class="dw-fishing-icon"><i class="fa-solid fa-bug" style="color: #18402f;"></i></div>
                                <div><span>Umpan</span><strong>10k</strong></div>
                            </div>
                        </div>
                        <div class="dw-fishing-note">
                            <p>Catatan: Hasil tangkapan dapat langsung dibawa pulang tanpa ditimbang.</p>
                        </div>
                    </div>
                    <div class="dw-fishing-img" style="cursor: pointer;" @click="openLightbox('../assets/images/mancing.jpg')"></div>
                </section>
            </div>
        </section>

        <section id="edukasi">
            <div class="dw-edu">
                <h2 class="dw-section-title" data-aos="fade-up">Fasilitas Edukasi Gratis</h2>
                <p class="dw-section-sub mt-2 mx-auto" style="max-width:500px" data-aos="fade-up" data-aos-delay="100">
                    Semua fasilitas ini sudah termasuk dalam tiket masuk utama. Selama mengikuti program edukasi, pengunjung akan mendapatkan:
                </p>

                <div class="dw-edu-grid">
                    <div class="dw-edu-card dw-edu-main" data-aos="fade-up" data-aos-delay="100">
                        <div class="dw-edu-icon dw-black"><i class="fa-solid fa-user-tie"></i></div>
                        <h3>Tour Guide (Pemandu)</h3>
                        <p>Mendampingi kegiatan dan memberikan penjelasan secara langsung</p>
                    </div>
                    <div class="dw-edu-card dw-edu-lgreen" data-aos="fade-up" data-aos-delay="200">
                        <div class="dw-edu-icon dw-glass"><i class="fa-solid fa-gift"></i></div>
                        <h4>Free Merchandise</h4>
                        <p>Dapatkan souvenir menarik sebagai kenangan kunjungan Anda.</p>
                    </div>
                    <div class="dw-edu-card dw-edu-syellow" data-aos="fade-up" data-aos-delay="300">
                        <div class="dw-edu-icon dw-glass"><i class="fa-solid fa-camera-retro"></i></div>
                        <h4>Dokumentasi Foto & Video</h4>
                        <p>Seluruh kegiatan didokumentasikan sebagai kenang-kenangan</p>
                    </div>
                    <div class="dw-edu-card dw-edu-list" data-aos="fade-up" data-aos-delay="400">
                        <h3>Edukasi Ikan</h3>
                        <ul>
                            <li>Ikan nila besar & nila merah</li>
                            <li>Ikan koi indukan</li>
                            <li>Ikan patin</li>
                            <li>Ikan koi & patin albino</li>
                            <li>Ikan gurame</li>
                        </ul>
                    </div>
                    <div class="dw-edu-card dw-edu-list" data-aos="fade-up" data-aos-delay="500">
                        <h3>Edukasi Tanaman</h3>
                        <ul class="dw-brown">
                            <li>Tanaman jenggot musa</li>
                            <li>Tanaman apotek hidup</li>
                            <li>Bunga alamanda & kaktus koboy</li>
                        </ul>
                    </div>
                    <div class="dw-edu-card dw-edu-list" data-aos="fade-up" data-aos-delay="600">
                        <h3>Edukasi Hewan</h3>
                        <ul>
                            <li>Burung merpati / dara hias</li>
                            <li>Burung hantu</li>
                            <li>Lebah kelulut</li>
                            <li>Iguana</li>
                        </ul>
                    </div>
                    <div class="dw-edu-card dw-edu-yellow" data-aos="fade-up" data-aos-delay="700">
                        <h4>Eksperimen Bunga Telang</h4>
                        <p>Aktivitas sederhana mengenal perubahan warna alami</p>
                    </div>
                </div>
            </div>
        </section>

        <section id="fasilitas-eks" class="dw-extra">
            <div class="dw-extra-container">
                <div class="text-center mb-5" data-aos="fade-up">
                    <h2 class="dw-section-title">Paket Edukasi Tambahan</h2>
                    <p class="dw-section-sub mt-2">Pilih paket edukasi tambahan untuk pengalaman belajar yang lebih lengkap dan menyenangkan.</p>
                </div>

                <div class="dw-pkg-title" data-aos="fade-right">
                    <span class="dw-pkg-icon" style="color: #18402f;"><i class="fa-solid fa-palette"></i></span>
                    <h3>Paket Kreativitas</h3>
                </div>
                <div class="dw-creativity-grid">
                    <article class="dw-creative-card dw-cc-gray" data-aos="zoom-in" data-aos-delay="100">
                        <div class="dw-creative-img" style="background-image:url('../assets/images/telang.jpeg'); cursor: pointer;" @click="openLightbox('../assets/images/telang.jpeg')"></div>
                        <div class="dw-creative-body">
                            <div class="dw-creative-price">10K <span>/kelompok</span></div>
                            <h4>Eksperimen Minuman Bunga Telang</h4>
                            <p>Fasilitas: alat, bahan, dan tour guide</p>
                        </div>
                    </article>
                    <article class="dw-creative-card dw-cc-white" data-aos="zoom-in" data-aos-delay="200">
                        <div class="dw-creative-img" style="background-image:url('../assets/images/membatik.jpeg'); cursor: pointer;" @click="openLightbox('../assets/images/membatik.jpeg')"></div>
                        <div class="dw-creative-body">
                            <div class="dw-creative-price">15K <span>/orang</span></div>
                            <h4>Membatik Sapu Tangan</h4>
                            <p>Fasilitas: sketsa kain, pewarna, alat membatik, dan tour guide. Hasil dapat dibawa pulang.</p>
                        </div>
                    </article>
                    <article class="dw-creative-card dw-cc-gray" data-aos="zoom-in" data-aos-delay="300">
                        <div class="dw-creative-img" style="background-image:url('../assets/images/tabungan.jpeg'); cursor: pointer;" @click="openLightbox('../assets/images/tabungan.jpeg')"></div>
                        <div class="dw-creative-body">
                            <div class="dw-creative-price">18K <span>/orang</span></div>
                            <h4>Mewarnai Tabungan Karakter</h4>
                            <p>Fasilitas: celengan gipsum, cat warna, kuas, air, dan contoh mewarnai. Hasil dapat dibawa pulang.</p>
                        </div>
                    </article>
                    <article class="dw-creative-card dw-cc-white" data-aos="zoom-in" data-aos-delay="400">
                        <div class="dw-creative-img" style="background-image:url('../assets/images/goodie.jpeg'); cursor: pointer;" @click="openLightbox('../assets/images/goodie.jpeg')"></div>
                        <div class="dw-creative-body">
                            <div class="dw-creative-price">18K <span>/orang</span></div>
                            <h4>Mewarnai Goodie Bag</h4>
                            <p>Fasilitas: tas karakter, cat warna, kuas, dan tour guide. Hasil dapat dibawa pulang.</p>
                        </div>
                    </article>
                </div>

                <div class="dw-extra-bento">
                    <div class="dw-animal-pkg" data-aos="fade-right">
                        <div class="dw-pkg-title">
                            <span class="dw-pkg-icon" style="color: #18402f;"><i class="fa-solid fa-paw"></i></span>
                            <h3>Paket Edukasi Hewan</h3>
                        </div>
                        <div class="dw-animal-grid">
                            <div class="dw-animal-note">
                                <div style="font-size:1.5rem; color:#18402f;"><i class="fa-solid fa-clipboard-check"></i></div>
                                <p style="font-size:.82rem;color:#57534e">Fasilitas mencakup tour guide, edukasi pengenalan hewan, serta interaksi langsung.</p>
                            </div>
                            <article class="dw-animal-card">
                                <div class="dw-animal-img" style="background-image:url('../assets/images/owllandak.jpeg'); cursor: pointer;" @click="openLightbox('../assets/images/owllandak.jpeg')"></div>
                                <div><h4>Owl & Landak Mini</h4><div class="dw-animal-price">50K <span style="font-weight:400">/sekolah</span></div></div>
                            </article>
                            <article class="dw-animal-card">
                                <div class="dw-animal-img" style="background-image:url('../assets/images/ular.jpeg'); cursor: pointer;" @click="openLightbox('../assets/images/ular.jpeg')"></div>
                                <div><h4>Ular Ball Python</h4><div class="dw-animal-price">20K <span style="font-weight:400">/sekolah</span></div></div>
                            </article>
                            <article class="dw-animal-card">
                                <div class="dw-animal-img" style="background-image:url('../assets/images/musang.jpeg'); cursor: pointer;" @click="openLightbox('../assets/images/musang.jpeg')"></div>
                                <div><h4>Musang Bulan</h4><div class="dw-animal-price">20K <span style="font-weight:400">/sekolah</span></div></div>
                            </article>
                            <article class="dw-animal-card">
                                <div class="dw-animal-img" style="background-image:url('../assets/images/kurakura.jpeg'); cursor: pointer;" @click="openLightbox('../assets/images/kurakura.jpeg')"></div>
                                <div><h4>Kura-Kura Sulcata</h4><div class="dw-animal-price">20K <span style="font-weight:400">/sekolah</span></div></div>
                            </article>
                            <article class="dw-animal-card">
                                <div class="dw-animal-img" style="background-image:url('../assets/images/sugarglider.jpeg'); cursor: pointer;" @click="openLightbox('../assets/images/sugarglider.jpeg')"></div>
                                <div><h4>Sugar Glider</h4><div class="dw-animal-price">20K <span style="font-weight:400">/sekolah</span></div></div>
                            </article>
                        </div>
                    </div>

                    <div data-aos="fade-left">
                        <div class="dw-pkg-title">
                            <span class="dw-pkg-icon" style="color: #18402f;"><i class="fa-solid fa-wand-magic-sparkles"></i></span>
                            <h3>Paket Hiburan Edukatif</h3>
                        </div>
                        <article class="dw-magic-card">
                            <div class="dw-magic-img" style="background-image:url('../assets/images/sulap.jpeg'); cursor: pointer;" @click="openLightbox('../assets/images/sulap.jpeg')"></div>
                            <div style="width:100%;text-align:center">
                                <h4 style="font-size:1.1rem;font-weight:700;color:#18402f;margin-bottom:6px">Paket Sulap</h4>
                                <div class="dw-magic-price">50K <span style="font-size:.9rem;font-weight:500;color:#866a1c">/sekolah</span></div>
                                <p style="font-size:.82rem;color:#57534e">Fasilitas: pertunjukan sulap interaktif dengan partisipasi anak-anak</p>
                            </div>
                        </article>
                    </div>
                </div>
            </div>
        </section>

        <section id="gazebo" class="dw-rental">
            <div class="dw-rental-container">
                <div class="text-center mb-4" data-aos="fade-up">
                    <h2 class="dw-section-title">Penyewaan Gazebo & Cottage</h2>
                    <p class="dw-section-sub mt-2 mx-auto" style="max-width:640px">
                        Tempat berkumpul yang nyaman untuk bersantai, piknik, atau menikmati momen bersama keluarga dan teman di suasana alam yang asri.
                    </p>
                </div>

                <div class="dw-session-row" data-aos="fade-up" data-aos-delay="100">
                    <div class="dw-session-pill"><span>Sesi Pagi</span><i class="fa-regular fa-clock me-2"></i>09:00 - 13:00</div>
                    <div class="dw-session-pill"><span>Sesi Siang</span><i class="fa-solid fa-clock me-2"></i>14:00 - 18:00</div>
                </div>

                <div class="dw-rental-lg">
                    <?php
                    $rentals_large = [
                        ['name'=>'Gazebo Sahilin',    'cap'=>'50-60 ORG', 'price'=>'800K', 'img'=>'sahilin.jpeg',      'fac'=>['Karpet','Listrik','Kipas Angin','Meja']],
                        ['name'=>'Gazebo Azkazachary','cap'=>'18-21 ORG', 'price'=>'300K', 'img'=>'azkazachary.jpeg',  'fac'=>['Karpet','Listrik','Kipas Angin']],
                        ['name'=>'Cottage Mini',      'cap'=>null,         'price'=>'400K', 'img'=>'cottage.jpeg',      'fac'=>['Karpet','Listrik','Kipas Angin','Bantal','Kursi','Meja Mini','Kaca','Tempat Sampah','Sapu','Stop Kontak','Terapi Ikan Pribadi']],
                        ['name'=>'Gazebo Farisakha',  'cap'=>'12 ORG',    'price'=>'170K', 'img'=>'farisakha.jpeg',    'fac'=>['Listrik','Kipas Angin']],
                        ['name'=>'Gazebo Naureen',    'cap'=>'15-18 ORG', 'price'=>'250K', 'img'=>'naureen.jpeg',      'fac'=>['Karpet','Listrik','Kipas Angin']],
                        ['name'=>'Cottage Tepi Danau','cap'=>null,         'price'=>'450K', 'img'=>'cottagetepi.jpeg',  'fac'=>['Karpet','Listrik','Kipas Angin','Bantal','Kursi','Meja Mini','Kaca','Tempat Sampah','Sapu','Stop Kontak','Halaman untuk Memancing']],
                    ];
                    $delay = 100;
                    foreach($rentals_large as $r): ?>
                    <article class="dw-rental-card" data-aos="fade-up" data-aos-delay="<?= $delay ?>">
                        <div class="dw-rental-img" style="background-image:url('../assets/images/<?= htmlspecialchars($r['img']) ?>'); cursor: pointer;" @click="openLightbox('../assets/images/<?= htmlspecialchars($r['img']) ?>')"></div>
                        <div class="dw-rental-body">
                            <div class="dw-rental-top">
                                <h3><?= htmlspecialchars($r['name']) ?></h3>
                                <?php if($r['cap']): ?>
                                <span class="dw-cap-pill"><?= htmlspecialchars($r['cap']) ?></span>
                                <?php endif; ?>
                            </div>
                            <div class="dw-rental-price"><?= $r['price'] ?> <span>/sesi</span></div>
                            <div class="dw-fac-tags">
                                <?php foreach($r['fac'] as $f): ?>
                                <span><?= htmlspecialchars($f) ?></span>
                                <?php endforeach; ?>
                            </div>
                        </div>
                    </article>
                    <?php $delay += 100; if($delay > 300) $delay = 100; endforeach; ?>
                </div>

                <div class="dw-rental-sm">
                    <?php
                    $rentals_small = [
                        ['name'=>'Gazebo Gavin',   'cap'=>'8-10 ORG','price'=>'140K','img'=>'gavin.jpeg',   'fac'=>['Gorden','Listrik','Kipas Angin']],
                        ['name'=>'Gazebo Saverio', 'cap'=>'8-10 ORG','price'=>'140K','img'=>'saverio.jpeg', 'fac'=>['Gorden','Listrik','Kipas Angin']],
                        ['name'=>'Gazebo Azalea',  'cap'=>'5 ORG',   'price'=>'100K','img'=>'azalea.jpeg',  'fac'=>['Listrik','Kipas Angin']],
                        ['name'=>'Gazebo Rafania', 'cap'=>'5 ORG',   'price'=>'100K','img'=>'rafania.jpeg', 'fac'=>['Listrik','Kipas Angin']],
                    ];
                    $delay = 100;
                    foreach($rentals_small as $r): ?>
                    <article class="dw-rental-card" data-aos="fade-up" data-aos-delay="<?= $delay ?>">
                        <div class="dw-rental-img" style="background-image:url('../assets/images/<?= htmlspecialchars($r['img']) ?>'); cursor: pointer;" @click="openLightbox('../assets/images/<?= htmlspecialchars($r['img']) ?>')"></div>
                        <div class="dw-rental-body">
                            <div class="dw-rental-top">
                                <h3><?= htmlspecialchars($r['name']) ?></h3>
                                <span class="dw-cap-pill"><?= htmlspecialchars($r['cap']) ?></span>
                            </div>
                            <div class="dw-rental-price"><?= $r['price'] ?> <span>/sesi</span></div>
                            <div class="dw-fac-tags">
                                <?php foreach($r['fac'] as $f): ?>
                                <span><?= htmlspecialchars($f) ?></span>
                                <?php endforeach; ?>
                            </div>
                        </div>
                    </article>
                    <?php $delay += 100; if($delay > 400) $delay = 100; endforeach; ?>
                </div>
            </div>
        </section>

        <section class="dw-support">
            <div class="dw-support-container">
                <div class="text-center mb-5" data-aos="fade-up">
                    <h2 class="dw-section-title">Fasilitas Pendukung</h2>
                    <p class="dw-section-sub mt-2 mx-auto" style="max-width:500px">
                        Fasilitas tambahan untuk menunjang kenyamanan Anda selama berkunjung di Naureen Mini Garden.
                    </p>
                </div>
                <div class="dw-support-grid">
                    <article class="dw-support-card" style="background-image:url('../assets/images/mushola.jpg'); cursor: pointer;" @click="openLightbox('../assets/images/mushola.jpg')" data-aos="zoom-in" data-aos-delay="100">
                        <div class="dw-support-overlay"></div>
                        <div class="dw-support-content">
                            <div class="dw-support-icon"><i class="fa-solid fa-mosque text-white"></i></div>
                            <h3>Musholla</h3>
                            <p>Area ibadah yang tenang dan nyaman bagi pengunjung.</p>
                        </div>
                    </article>
                    <article class="dw-support-card" style="background-image:url('../assets/images/wc.jpg'); cursor: pointer;" @click="openLightbox('../assets/images/wc.jpg')" data-aos="zoom-in" data-aos-delay="200">
                        <div class="dw-support-overlay"></div>
                        <div class="dw-support-content">
                            <div class="dw-support-icon"><i class="fa-solid fa-restroom text-white"></i></div>
                            <h3>Toilet</h3>
                            <p>Fasilitas bersih dan mudah diakses untuk kenyamanan Anda.</p>
                        </div>
                    </article>
                    <article class="dw-support-card" style="background-image:url('../assets/images/cafe.jpg'); cursor: pointer;" @click="openLightbox('../assets/images/cafe.jpg')" data-aos="zoom-in" data-aos-delay="300">
                        <div class="dw-support-overlay"></div>
                        <div class="dw-support-content">
                            <div class="dw-support-icon"><i class="fa-solid fa-mug-hot text-white"></i></div>
                            <h3>Mini Cafetaria</h3>
                            <p>Tempat bersantai sambil menikmati makanan dan minuman ringan.</p>
                        </div>
                    </article>
                </div>
            </div>
        </section>

        <transition name="fade-lightbox">
            <div v-if="lightbox.open" class="dw-lightbox" @click="closeLightbox">
                <span class="dw-lightbox-close" @click.stop="closeLightbox"><i class="fa-solid fa-xmark"></i></span>
                <img :src="lightbox.src" alt="Zoomed Image" class="dw-lightbox-img" @click.stop>
            </div>
        </transition>

    </main>

    <?php include 'templates/footer_public.php'; ?>

</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://unpkg.com/vue@3/dist/vue.global.js"></script>
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>

<script>
    const { createApp, ref, onMounted, computed } = Vue;

    createApp({
        setup() {
            const scrollY = ref(0);
            const activeTab = ref('all');
            const lightbox = ref({ open: false, src: '' });

            window.addEventListener('scroll', () => { 
                scrollY.value = window.scrollY; 
            });

            const navStyle = computed(() => {
                return scrollY.value > 50 
                    ? { background: 'rgba(30, 70, 32, 0.95)', boxShadow: '0 4px 6px rgba(0,0,0,0.1)' }
                    : { background: 'rgba(30, 70, 32, 0.9)', boxShadow: 'none' };
            });

            const openLightbox = (src) => {
                lightbox.value = { open: true, src };
            };

            const closeLightbox = () => {
                lightbox.value.open = false;
            };

            onMounted(() => {
                AOS.init({ 
                    duration: 800, 
                    once: true,
                    offset: 50
                });
            });

            return { scrollY, navStyle, activeTab, lightbox, openLightbox, closeLightbox };
        }
    }).mount('#app');
</script>

</body>
</html>