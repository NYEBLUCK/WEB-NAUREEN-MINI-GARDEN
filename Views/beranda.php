<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Naureen Mini Garden Samarinda</title>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css" />
    
    <link rel="stylesheet" href="../assets/css/style.css?v=<?= time(); ?>">
    <link rel="stylesheet" href="../assets/css/beranda.css?v=<?= time(); ?>">
</head>
<body>

<div id="app">
    <?php include 'templates/navbar_public.php'; ?>

    <section id="beranda" class="hero-section">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-7" data-aos="fade-right">
                    <h1 class="hero-title mb-3">
                        <span style="color: #267A29;">Naureen</span><br>
                        <span style="color: #153E19;">Mini Garden</span><br>
                        <span style="color: #FFD100;">Samarinda</span>
                    </h1>
                    <p class="hero-subtitle mt-3 mb-4">Destinasi edukasi dan rekreasi dengan suasana alam yang asri,
                        <br>dilengkapi taman bunga, gazebo, dan fasilitas terapi ikan untuk
                        <br>bersantai.
                    </p>
                    <a href="#kenapa" class="btn btn-custom me-2">Jelajahi Sekarang</a>
                    <a href="#fasilitas" class="btn btn-outline-custom">Lihat Fasilitas</a>
                </div>
                <div class="col-lg-5 mt-5 mt-lg-0" data-aos="fade-left">
                    <div class="info-card shadow-lg">
                        <div class="d-flex mb-3">
                            <i class="far fa-clock text-primary-green fs-4 me-3 mt-1"></i>
                            <div>
                                <h6 class="mb-0 fw-bold">Jam Buka</h6>
                                <p class="mb-0 text-muted small">
                                    09:00 - 18:00 WITA
                                    <br>Buka Selasa - Minggu
                                    <br>(Senin Tutup, Kecuali Hari Libur)</p>
                            </div>
                        </div>
                        <div class="d-flex mb-3">
                            <i class="fas fa-ticket-alt text-primary-green fs-4 me-3 mt-1"></i>
                            <div>
                                <h6 class="mb-0 fw-bold">Harga Tiket</h6>
                                <p class="mb-0 text-muted small">Rp 10.000 / orang<br>Area tambahan mulai Rp.5000</p>
                            </div>
                        </div>
                        <div class="d-flex mb-4">
                            <i class="fas fa-map-marker-alt text-primary-green fs-4 me-3 mt-1"></i>
                            <div>
                                <h6 class="mb-0 fw-bold">Lokasi</h6>
                                <p class="mb-0 text-muted small">Jl. Bersama, Sempaja Utara, Kec. Samarinda Utara,<br>Kota Samarinda, Kalimantan Timur</p>
                            </div>
                        </div>
                        <a href="https://maps.app.goo.gl/XjuzNTf6Bkidsv3B7" target="_blank" class="btn btn-light w-100 rounded-pill fw-bold text-primary-green border">Buka di Google Maps</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="kenapa" class="py-5 bg-white">
        <div class="container text-center" data-aos="fade-up">
            <h2 class="section-title">Kenapa Harus ke Naureen Mini Garden?</h2>
            <p class="text-muted mb-5">Naureen Mini Garden adalah destinasi wisata edukasi & rekreasi keluarga yang menawarkan berbagai pengalaman menyenangkan.</p>
            
            <div class="row g-4 text-start">
    
                <div class="col-md-6 col-lg-3" data-aos="fade-up" data-aos-delay="100">
                    <div class="feature-card shadow-sm overlay-putih text-gelap" style="background-image: url('../assets/images/spot-foto.jpg');">
                        <div class="feature-card-body">
                            <div class="icon-box ikon-putih-hijau"><i class="fas fa-camera"></i></div>
                            <h5 class="fw-bold">Spot Foto</h5>
                            <p class="small mb-0">Beragam spot foto estetik dengan latar taman, bunga, dan suasana alami yang cocok untuk mengabadikan momen spesial.</p>
                        </div>
                    </div>
                </div>

                <div class="col-md-6 col-lg-3" data-aos="fade-up" data-aos-delay="200">
                    <div class="feature-card shadow-sm overlay-hijau text-putih" style="background-image: url('../assets/images/alami.jpg');">
                        <div class="feature-card-body">
                            <div class="icon-box ikon-hijau-putih"><i class="fas fa-leaf"></i></div>
                            <h5 class="fw-bold">Suasana Alami</h5>
                            <p class="small mb-0">Nikmati udara segar dan suasana taman yang hijau dan asri, cocok untuk melepas penat dari hiruk pikuk kota.</p>
                        </div>
                    </div>
                </div>

                <div class="col-md-6 col-lg-3" data-aos="fade-up" data-aos-delay="300">
                    <div class="feature-card shadow-sm overlay-biru text-gelap" style="background-image: url('../assets/images/keluarga.jpg');">
                        <div class="feature-card-body">
                            <div class="icon-box ikon-biru"><i class="fas fa-users"></i></div>
                            <h5 class="fw-bold">Wisata Keluarga</h5>
                            <p class="small mb-0">Area yang ramah untuk keluarga, cocok untuk bersantai di gazebo, piknik, dan menikmati waktu bersama orang tersayang.</p>
                        </div>
                    </div>
                </div>

                <div class="col-md-6 col-lg-3" data-aos="fade-up" data-aos-delay="400">
                    <div class="feature-card shadow-sm overlay-kuning text-gelap" style="background-image: url('../assets/images/edukasi.jpg');">
                        <div class="feature-card-body">
                            <div class="icon-box ikon-kuning-gelap"><i class="fas fa-graduation-cap"></i></div>
                            <h5 class="fw-bold">Edukasi</h5>
                            <p class="small mb-0">Belajar sambil bermain melalui berbagai kegiatan edukatif, mulai dari mengenal tanaman hingga interaksi dengan satwa.</p>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <section id="fasilitas" class="py-5" style="background: linear-gradient(180deg, #EBE1B5 0%, #FFFFFF 100%);">
        <div class="container" data-aos="fade-up">
            <div class="text-center mb-5">
                <h2 class="section-title">Fasilitas yang Tersedia</h2>
                <p class="text-muted">Nikmati berbagai fasilitas untuk mendukung kenyamanan Anda.</p>
            </div>

            <div class="row g-3">
                <div v-for="(fasil, index) in fasilitasList" :key="index" class="col-md-6 col-lg-4">
                    <a :href="'detail.php#' + fasil.anchor" class="text-decoration-none d-block h-100">
                        <div class="fasilitas-card shadow-sm h-100" 
                            @mouseenter="hoverId = index" 
                            @mouseleave="hoverId = null">
                            
                            <div class="fasilitas-img-wrapper">
                                <img :src="fasil.img" :alt="fasil.nama" class="fasilitas-img" :class="{ 'scale-img': hoverId === index }">
                            </div>

                            <div class="fasilitas-body">
                                <h6 class="fw-bold mb-2 d-flex align-items-center gap-2 text-primary-green">
                                    <i :class="fasil.icon"></i> {{ fasil.nama }}
                                </h6>
                                
                                <div class="position-relative">
                                    <transition name="fade-text" mode="out-in">
                                        <p v-if="hoverId === index" :key="'desc-' + index" class="small text-muted mb-0">
                                            {{ fasil.desc }}
                                        </p>
                                        <small v-else :key="'link-' + index" class="text-muted text-uppercase fw-bold" style="letter-spacing: 1px; font-size: 0.7rem;">
                                            Lihat Detail <i class="fas fa-chevron-right ms-1"></i>
                                        </small>
                                    </transition>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
            <div class="text-center mt-5" data-aos="fade-up">
                <a href="detail.php" class="btn btn-custom px-4 py-2 shadow-sm" style="font-size: 1.05rem;">
                    Lihat Selengkapnya <i class="fas fa-arrow-right ms-2"></i>
                </a>
            </div>
        </div>
    </section>

    <section id="berita" class="py-5">
        <div class="container" data-aos="fade-up">
            <div class="text-center mb-5">
                <h2 class="section-title">Keseruan Terbaru di Naureen Mini Garden</h2>
                <p class="text-muted">Ikuti terus berbagai kegiatan seru dan pengalaman menarik.</p>
            </div>
            
            <div class="swiper swiper-berita">
                <div class="swiper-wrapper">
                    <div class="swiper-slide" v-for="item in beritaList" :key="item.id">
                        <a :href="'berita.php?id=' + item.id" class="text-decoration-none d-block h-100 w-100">
                            <div class="card berita-card shadow-sm h-100" 
                                @mouseenter="hoverBeritaId = item.id" 
                                @mouseleave="hoverBeritaId = null">
                                
                                <div class="berita-img-wrapper">
                                    <img :src="'../assets/uploads/' + item.gambar" 
                                        class="berita-img" 
                                        alt="Berita Image" 
                                        onerror="this.src='https://via.placeholder.com/400x200?text=No+Image'">
                                </div>

                                <div class="card-body berita-body">
                                    <small class="text-muted"><i class="far fa-calendar-alt"></i> {{ formatDate(item.tanggal_kegiatan) }}</small>
                                    <h5 class="card-title fw-bold mt-2 text-dark">{{ item.judul }}</h5>
                                    
                                    <div class="position-relative">
                                        <transition name="fade-news" mode="out-in">
                                            <p v-if="hoverBeritaId === item.id" :key="'desc-'+item.id" class="small text-muted mb-0">
                                                {{ item.deskripsi.substring(0, 100) }}
                                            </p>
                                            <small v-else :key="'more-'+item.id" class="text-primary-green fw-bold">
                                                Baca Selengkapnya <i class="fas fa-arrow-right ms-1"></i>
                                            </small>
                                        </transition>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="swiper-pagination mt-4 position-relative"></div>
            </div>
            <div v-if="loadingBerita" class="text-center my-4"><div class="spinner-border text-success"></div></div>
        </div>
    </section>

    <section id="ulasan" class="py-5 bg-ulasan">
        <div class="container" data-aos="fade-up">
            <div class="text-center mb-5">
                <h2 class="section-title">Apa Kata Pengunjung?</h2>
                <p class="text-muted">Lihat pengalaman langsung dari pengunjung yang telah menikmati<br>suasana di Naureen Mini Garden.</p>
            </div>

            <div class="row g-5">
                <div class="col-lg-4" data-aos="fade-right">
                    <div class="review-form-box">
                        <h5 class="fw-bold mb-4" style="color: #2c3e2d;">Tinggalkan Ulasan</h5>
                        <form @submit.prevent="submitReview">
                            <div class="mb-3">
                                <label>Nama Lengkap</label>
                                <input type="text" class="form-control" v-model="form.nama" required placeholder="Masukkan nama lengkap Anda">
                            </div>
                            <div class="mb-3">
                                <label>Alamat Email</label>
                                <input type="email" class="form-control" v-model="form.email" placeholder="Masukkan alamat email Anda">
                            </div>
                            <div class="mb-3">
                                <label>Pilih Rating</label>
                                <div class="star-rating d-flex">
                                    <i class="fas fa-star" v-for="star in 5" :key="star" 
                                        :class="{ 'active': star <= form.rating }" 
                                        @click="form.rating = star"></i>
                                </div>
                            </div>
                            <div class="mb-4">
                                <label>Komentar</label>
                                <textarea class="form-control" rows="3" v-model="form.ulasan" placeholder="Tulis pengalaman Anda di sini..."></textarea>
                            </div>
                            <button type="submit" class="btn-submit-review" :disabled="isSubmitting">
                                {{ isSubmitting ? 'Mengirim...' : 'Kirim Ulasan' }}
                            </button>
                        </form>
                    </div>
                </div>

                <div class="col-lg-8" data-aos="fade-left">
                    <div class="swiper swiper-review h-100">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide" v-for="review in reviewList" :key="review.id">
                                <div class="card review-card">
                                    <div class="d-flex justify-content-between align-items-start">
                                        <div>
                                            <div class="reviewer-name">{{ review.nama }}</div>
                                            <div class="review-date">{{ formatDate(review.created_at) }}</div>
                                        </div>
                                        <div class="review-stars">
                                            <i class="fas fa-star" v-for="s in parseInt(review.rating)" :key="s"></i>
                                        </div>
                                    </div>
                                    <div class="review-text">"{{ review.ulasan }}"</div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-pagination-review mt-3 text-center"></div>
                    </div>
                    <div v-if="reviewList.length === 0 && !loadingReview" class="text-center text-muted mt-5">Belum ada ulasan. Jadilah yang pertama!</div>
                </div>
            </div>
        </div>
    </section>

    <?php include 'templates/footer_public.php'; ?>

</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.css"></script>
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script src="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js"></script>
<script src="https://unpkg.com/vue@3/dist/vue.global.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>

<script>
    const { createApp, ref, onMounted, nextTick, computed } = Vue;

    createApp({
        setup() {
            const hoverId = ref(null);
            const hoverBeritaId = ref(null); 
            const scrollY = ref(0);
            const beritaList = ref([]);
            const loadingBerita = ref(true);
            const reviewList = ref([]);
            const loadingReview = ref(true);
            const isSubmitting = ref(false);
            const form = ref({ nama: '', email: '', rating: 5, ulasan: '' });

            const fasilitasList = ref([
                { nama: 'Spot Foto Estetik', anchor: 'spot-foto', img: '../assets/images/spot-foto.jpg', icon: 'fas fa-camera', desc: 'Berbagai sudut estetik untuk koleksi feed sosial mediamu.' },
                { nama: 'Terapi Ikan', anchor: 'terapi', img: '../assets/images/terapi.jpg', icon: 'fas fa-water', desc: 'Rasakan sensasi relaksasi alami untuk kesehatan kaki Anda.' },
                { nama: 'Gazebo & Cottage', anchor: 'gazebo', img: '../assets/images/keluarga.jpg', icon: 'fas fa-campground', desc: 'Tempat berkumpul yang nyaman bersama keluarga tercinta.' },
                { nama: 'Pemancingan', anchor: 'mancing', img: '../assets/images/mancing.jpg', icon: 'fas fa-fish', desc: 'Salurkan hobi memancing Anda di kolam yang tenang.' },
                { nama: 'Paket Edukasi', anchor: 'edukasi', img: '../assets/images/edukasi.jpg', icon: 'fas fa-seedling', desc: 'Belajar mengenal alam dan tanaman dengan cara yang seru.' },
                { nama: 'Fasilitas Pendukung', anchor: 'fasilitas-eks', img: '../assets/images/wc.jpg', icon: 'fas fa-restroom', desc: 'Toilet bersih, musholla, dan area parkir yang luas.' }
            ]);

            window.addEventListener('scroll', () => { scrollY.value = window.scrollY; });
            const navStyle = computed(() => {
                return scrollY.value > 50 
                    ? { background: 'rgba(30, 70, 32, 0.95)', boxShadow: '0 4px 6px rgba(0,0,0,0.1)' }
                    : { background: 'rgba(30, 70, 32, 0.9)', boxShadow: 'none' };
            });

            const BERITA_API_URL = '../app/controllers/BeritaController.php'; 
            const REVIEW_API_URL = '../app/controllers/ReviewController.php';

            const fetchBerita = async () => {
                try {
                    const response = await axios.get(`${BERITA_API_URL}?action=getAll`);
                    if (response.data.status === 'success') {
                        beritaList.value = response.data.data;
                        nextTick(() => { initSwiperBerita(); });
                    }
                } catch (error) { console.error(error); } finally { loadingBerita.value = false; }
            };

            const fetchReviews = async () => {
                try {
                    const response = await axios.get(`${REVIEW_API_URL}?action=getApproved`);
                    if (response.data.status === 'success') {
                        reviewList.value = response.data.data;
                        nextTick(() => { initSwiperReview(); });
                    }
                } catch (error) { console.error(error); } finally { loadingReview.value = false; }
            };

            const submitReview = async () => {
                isSubmitting.value = true;
                

                let formData = new FormData();
                formData.append('action', 'submit');
                formData.append('nama', form.value.nama);
                formData.append('email', form.value.email); 
                formData.append('rating', form.value.rating);
                formData.append('ulasan', form.value.ulasan);

                form.value = { nama: '', email: '', rating: 5, ulasan: '' };

                try {
                    const response = await axios.post(REVIEW_API_URL, formData);
                    
                    if (response.data.status === 'success') {
                        alert("Terima kasih sudah mengisi ulasan!");
                        fetchReviews();
                    }
                } catch (error) { 
                    alert("Terjadi kesalahan saat mengirim ulasan.");
                } finally { 
                    isSubmitting.value = false; 
                }
            };

            const formatDate = (dateString) => {
                if (!dateString) return '';
                return new Date(dateString).toLocaleDateString('id-ID', { year: 'numeric', month: 'long', day: 'numeric' });
            };

            const initSwiperBerita = () => {
                new Swiper('.swiper-berita', {
                    slidesPerView: 1, spaceBetween: 20,
                    autoplay: { delay: 3000 },
                    pagination: { el: '.swiper-pagination', clickable: true },
                    breakpoints: { 768: { slidesPerView: 2 }, 1024: { slidesPerView: 3 } }
                });
            };

            const initSwiperReview = () => {
                new Swiper('.swiper-review', {
                    slidesPerView: 1, 
                    spaceBetween: 20,
                    grid: { 
                        rows: 3,
                        fill: 'row' 
                    },
                    autoplay: { 
                        delay: 4000,
                        disableOnInteraction: false 
                    },
                    pagination: { 
                        el: '.swiper-pagination-review', 
                        clickable: true 
                    },
                    breakpoints: { 
                        768: { 
                            slidesPerView: 2, 
                            grid: { rows: 3 } 
                        } 
                    }
                });
            };

            onMounted(() => {
                AOS.init({ duration: 800, once: true });
                fetchBerita();
                fetchReviews();
            });

            return {
                beritaList, loadingBerita, reviewList, loadingReview,
                form, isSubmitting, submitReview, formatDate,
                fasilitasList, hoverId, hoverBeritaId, navStyle
            };
        }
    }).mount('#app');
</script>

</body>
</html>