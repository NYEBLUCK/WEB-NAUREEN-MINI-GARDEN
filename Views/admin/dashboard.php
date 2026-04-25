<?php
// views/admin/dashboard.php
session_start();

// Sistem Keamanan: Cek Sesi (Mencegah Bypass Login)
if (!isset($_SESSION['username'])) {
    header("Location: ../login.php");
    exit();
}
$username_login = $_SESSION['username'];
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard Admin - Naureen Mini Garden</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:ital,wght@0,200..800;1,200..800&display=swap" rel="stylesheet">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    
    <link rel="stylesheet" href="../../assets/css/style.css">
    <link rel="stylesheet" href="../../assets/css/admin.css">
</head>
<body>

<div id="app">
    <?php include '../templates/sidebar_admin.php'; ?>

    <main class="main-content dash-scope">
        <?php include '../templates/navbar_admin.php'; ?>

        <section class="container-fluid p-4">
            <div class="dash-header mb-5 text-center text-md-start" data-aos="fade-down" data-aos-duration="800">
                <h1 class="dash-title">Halo, <?php echo htmlspecialchars($username_login); ?>!</h1>
                <p class="dash-subtitle">Apa yang akan kamu lakukan hari ini? Mari kelola pilihan di bawah.</p>
            </div>

            <div class="row g-4 justify-content-center"> 
                
                <div class="col-12 col-md-6 col-lg-4 d-flex" data-aos="fade-up" data-aos-delay="100"> 
                    <div class="dash-card shadow-sm w-100"> 
                        <div class="dash-card-body">
                            <div class="dash-icon-wrapper text-success">
                                <i class="bi bi-journal-text"></i>
                            </div>
                            <h4 class="dash-card-title">Kelola Berita</h4>
                            <p class="dash-card-text">Update berita, aktifitas, atau kegiatan terbaru yang ada di Naureen Mini Garden.</p>
                        </div>
                        <a href="kelola_berita.php" class="dash-btn-open stretched-link">
                            Buka Modul <i class="bi bi-arrow-right ms-2"></i>
                        </a>
                    </div>
                </div>

                <div class="col-12 col-md-6 col-lg-4 d-flex" data-aos="fade-up" data-aos-delay="200"> 
                    <div class="dash-card shadow-sm highlight w-100">
                        <div class="dash-card-body">
                            <div class="dash-icon-wrapper text-warning">
                                <i class="bi bi-chat-dots"></i>
                            </div>
                            <h4 class="dash-card-title">Kelola Ulasan</h4>
                            <p class="dash-card-text">Tinjau ulasan pengunjung, setujui, dan kelola pengalaman mereka seputar taman.</p>
                        </div>
                        <a href="kelola_review.php" class="dash-btn-open stretched-link">
                            Buka Modul <i class="bi bi-arrow-right ms-2"></i>
                        </a>
                    </div>
                </div>

            </div>
        </section>
    </main>
</div>

<script src="https://unpkg.com/vue@3/dist/vue.global.js"></script>
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>

<script>
    const { createApp } = Vue;
    createApp({
        data() {
            return {
                isSidebarOpen: false 
            }
        },
        mounted() {
            AOS.init({ duration: 800, once: true });
        }
    }).mount('#app');
</script>
</body>
</html>