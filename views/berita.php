<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail Berita - Naureen Mini Garden</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700;800&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    
    <link rel="stylesheet" href="../assets/css/style.css?v=<?= time(); ?>">
    <link rel="stylesheet" href="../assets/css/berita.css?v=<?= time(); ?>">
</head>
<body class="bg-berita">

<div id="app">
    <?php include 'templates/navbar_public.php'; ?>

    <main style="padding-top: 120px; padding-bottom: 60px;">
        <div class="article-container">
            
            <div class="mb-4">
                <a href="beranda.php#berita" class="btn-back-pill">
                    <i class="fas fa-arrow-left me-2"></i> Kembali
                </a>
            </div>

            <div v-if="loading" class="text-center py-5">
                <div class="spinner-border text-success" role="status"></div>
                <p class="mt-3 text-muted">Memuat berita...</p>
            </div>

            <div v-else-if="berita">
                <h1 class="article-title">{{ berita.judul }}</h1>
                <div class="article-meta">
                    <i class="far fa-calendar-alt me-1"></i> {{ formatDate(berita.tanggal_kegiatan) }}
                </div>

                <img :src="'../assets/uploads/' + berita.gambar" 
                    :alt="berita.judul" 
                    class="article-hero-img"
                    onerror="this.src='https://via.placeholder.com/800x450?text=Gambar+Tidak+Tersedia'">

                <div class="article-content" v-html="formatParagraf(berita.deskripsi)"></div>
                
                </div>

            <div v-if="relatedBerita.length > 0" class="related-section">
                <div class="related-header">
                    <h4>Berita Terkait</h4>
                    <a href="beranda.php#berita">Lihat Semua <i class="fas fa-chevron-right ms-1"></i></a>
                </div>

                <div class="related-grid">
                    <a v-for="item in relatedBerita" :key="item.id" :href="'berita.php?id=' + item.id" class="related-card">
                        <img :src="'../assets/uploads/' + item.gambar" 
                            class="related-img" 
                            alt="Thumbnail"
                            onerror="this.src='https://via.placeholder.com/100x100?text=N/A'">
                        <div class="related-info">
                            <div class="related-title">{{ item.judul }}</div>
                            <div class="related-date">{{ formatDate(item.tanggal_kegiatan) }}</div>
                        </div>
                    </a>
                </div>
            </div>

        </div>
    </main>

    <?php include 'templates/footer_public.php'; ?>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://unpkg.com/vue@3/dist/vue.global.js"></script>
<script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>

<script>
    const { createApp, ref, onMounted, computed } = Vue;

    createApp({
        setup() {
            const scrollY = ref(0);
            const loading = ref(true);
            const berita = ref(null);
            const relatedBerita = ref([]);

            const BERITA_API_URL = '../app/controllers/BeritaController.php'; 

            window.addEventListener('scroll', () => { scrollY.value = window.scrollY; });
            const navStyle = computed(() => {
                return scrollY.value > 50 
                    ? { background: 'rgba(30, 70, 32, 0.95)', boxShadow: '0 4px 6px rgba(0,0,0,0.1)' }
                    : { background: 'rgba(30, 70, 32, 0.9)', boxShadow: 'none' };
            });

            const formatDate = (dateString) => {
                if (!dateString) return '';
                return new Date(dateString).toLocaleDateString('id-ID', { year: 'numeric', month: 'long', day: 'numeric' });
            };

            const formatParagraf = (text) => {
                if (!text) return '';
                return text.split('\n')
                            .filter(p => p.trim() !== '') 
                            .map(p => `<p>${p.trim()}</p>`)
                            .join('');
            };

            const fetchBeritaDetail = async () => {
                const urlParams = new URLSearchParams(window.location.search);
                const beritaId = urlParams.get('id');

                if (!beritaId) { loading.value = false; return; }

                try {
                    const response = await axios.get(`${BERITA_API_URL}?action=getAll`);
                    if (response.data.status === 'success') {
                        const allBerita = response.data.data;
                        berita.value = allBerita.find(b => b.id == beritaId);

                        relatedBerita.value = allBerita.filter(b => b.id != beritaId).slice(0, 2);
                    }
                } catch (error) {
                    console.error("Gagal memuat data:", error);
                } finally {
                    loading.value = false;
                }
            };

            onMounted(() => { fetchBeritaDetail(); });

            return { navStyle, loading, berita, relatedBerita, formatDate, formatParagraf };
        }
    }).mount('#app');
</script>
</body>
</html>