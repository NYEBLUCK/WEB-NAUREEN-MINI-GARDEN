<?php
session_start();
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
    <title>Tambah Berita - Naureen Mini Garden</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
    
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:ital,wght@0,200..800;1,200..800&display=swap" rel="stylesheet">
    
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    
    <link rel="stylesheet" href="../../assets/css/style.css">
    <link rel="stylesheet" href="../../assets/css/admin.css">
    <link rel="stylesheet" href="../../assets/css/admin-form.css">
</head>
<body class="nmg-add-news-page">

<div id="app">
    <?php include '../templates/sidebar_admin.php'; ?>

    <main class="main-content" :class="{ 'sidebar-active': isSidebarOpen }">
        <?php include '../templates/navbar_admin.php'; ?>

        <div class="container-fluid p-4 pt-3">
            <div class="nmg-add-news-container">
                <header class="mb-4 text-center" data-aos="fade-down" data-aos-duration="800">
                    <h2 class="fw-bold" style="color: #2c3e2d; margin-bottom: 0;">Tambah Berita</h2>
                    <p class="text-muted small">Lengkapi detail berita baru di bawah ini.</p>
                </header>

                <form action="../../app/controllers/BeritaController.php" method="POST" enctype="multipart/form-data">
                    <div class="row g-4"> 
                        <div class="col-lg-5" data-aos="fade-right" data-aos-delay="100">
                            <div class="nmg-section">
                                <label class="form-label">Upload Gambar</label>
                                <div class="nmg-upload-area position-relative" onclick="document.getElementById('input-file').click()" style="height: 220px; overflow: hidden;">
                                    
                                    <input type="file" name="gambar" id="input-file" accept="image/*" onchange="previewImage(event)" required 
                                        style="position: absolute; left: 50%; top: 50%; transform: translate(-50%, -50%); opacity: 0; z-index: -1;">
                                    
                                    <div id="upload-placeholder" class="text-center p-2">
                                        <div class="nmg-upload-icon mx-auto shadow-sm" style="width: 60px; height: 60px;">
                                            <i class="bi bi-image-fill fs-3"></i>
                                        </div>
                                        <p class="fw-bold mb-0" style="font-size: 0.95rem; color: #6c757d;">Pilih foto</p>
                                    </div>
                                    
                                    <img id="image-preview" src="#" alt="Preview" style="display:none; width:100%; height:100%; object-fit:cover;">

                                    <button type="button" id="btn-trash" class="btn btn-danger position-absolute shadow-sm" 
                                            style="top: 15px; right: 15px; display: none; z-index: 10; border-radius: 10px;" 
                                            onclick="removeImage(event)" title="Hapus Gambar">
                                        <i class="bi bi-trash3-fill"></i>
                                    </button>
                                </div>
                            </div>  

                            <div class="nmg-section mt-4">
                                <label class="form-label">Judul Berita</label>
                                <input type="text" name="judul" class="form-control" placeholder="Masukkan judul..." required>
                            </div>

                            <div class="nmg-section mt-4">
                                <label class="form-label">Tanggal Kegiatan</label>
                                <input type="date" name="tanggal_kegiatan" class="form-control" required>
                            </div>
                        </div> 

                        <div class="col-lg-7" data-aos="fade-left" data-aos-delay="200">
                            <div class="nmg-section h-100 d-flex flex-column">
                                <label class="form-label">Deskripsi Lengkap</label>
                                <textarea name="deskripsi" class="form-control flex-grow-1" placeholder="Tuliskan detail berita..." style="min-height: 480px; resize: none;" required></textarea>
                            </div>
                        </div> 

                        <div class="col-12 mt-4" data-aos="fade-up" data-aos-delay="300">
                            <div class="nmg-divider mb-3"></div>
                            <div class="d-flex justify-content-end align-items-center gap-3">
                                <a href="kelola_berita.php" class="nmg-btn-cancel text-decoration-none">Batal</a>
                                <button type="submit" name="simpan_berita" class="nmg-btn-save shadow-sm">
                                    <i class="bi bi-journal-check"></i>
                                    Simpan Aktivitas
                                </button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </main>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://unpkg.com/vue@3/dist/vue.global.js"></script>
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>

<script>
    const { createApp } = Vue;
    createApp({
        data() { return { isSidebarOpen: false } },
        mounted() {
            // KUNCI: Inisialisasi AOS
            AOS.init({ duration: 800, once: true });
        }
    }).mount('#app');

    function previewImage(event) {
        const input = event.target;
        const preview = document.getElementById('image-preview');
        const placeholder = document.getElementById('upload-placeholder');
        const btnTrash = document.getElementById('btn-trash');
        
        if (input.files && input.files[0]) {
            const reader = new FileReader();
            reader.onload = function(e) {
                preview.src = e.target.result;
                preview.style.display = 'block';
                placeholder.style.display = 'none';
                btnTrash.style.display = 'block'; 
            }
            reader.readAsDataURL(input.files[0]);
        }
    }

    function removeImage(event) {
        event.stopPropagation(); 
        
        const input = document.getElementById('input-file');
        const preview = document.getElementById('image-preview');
        const placeholder = document.getElementById('upload-placeholder');
        const btnTrash = document.getElementById('btn-trash');

        input.value = ''; 
        preview.src = '#';
        preview.style.display = 'none';
        btnTrash.style.display = 'none';
        placeholder.style.display = 'block';
    }
</script>
</body>
</html>