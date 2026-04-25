<?php
session_start();

if (!isset($_SESSION['username'])) {
    header("Location: ../login.php"); 
    exit();
}

require_once '../../app/controllers/BeritaController.php';

$username_login = $_SESSION['username'];

$data_berita = getBeritaPaged($conn, $limit, $offset); 
$total_data = getTotalBerita($conn);
$total_halaman = ceil($total_data / $limit);
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kelola Berita - Naureen Mini Garden</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:ital,wght@0,200..800;1,200..800&display=swap" rel="stylesheet">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    
    <link rel="stylesheet" href="../../assets/css/style.css">
    <link rel="stylesheet" href="../../assets/css/admin.css">
    <link rel="stylesheet" href="../../assets/css/admin-berita.css">
</head>
<body class="clean-news-page">

<div id="app">
    <?php include '../templates/sidebar_admin.php'; ?>

    <main class="main-content">
        <?php include '../templates/navbar_admin.php'; ?>

        <div class="container-fluid p-4 pt-3">
            <header class="d-flex flex-wrap justify-content-between align-items-center mb-4 pb-2" 
                    data-aos="fade-down" data-aos-duration="800">
                <div class="mb-3 mb-md-0">
                    <h2 class="news-page-title mb-1">Kelola Berita</h2>
                    <p class="text-muted small mb-0">Tambahkan berita seputar program edukasi, event, dan hiburan di kebun.</p>
                </div>
                
                <div class="header-actions d-flex align-items-center gap-3">
                    <div class="news-stats-badge" data-aos="zoom-in" data-aos-delay="200">
                        <span class="text-muted small fw-bold" style="letter-spacing: 1.2px;">JUMLAH BERITA</span>
                        <span class="fs-4 fw-bold" style="color: #2c3e2d;"><?php echo $total_data; ?></span>
                    </div>
                    <a href="tambah_berita.php" class="btn-action-add shadow-sm" data-aos="zoom-in" data-aos-delay="400">
                        <i class="bi bi-plus-lg fs-4"></i>
                    </a>
                </div>
            </header>

            <div class="news-card-table" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="300">
                <div class="table-responsive">
                    <table class="table table-clean text-center align-middle mb-0">
                        <thead>
                            <tr>
                                <th style="width: 5%;">NO</th>
                                <th style="width: 12%;">GAMBAR</th>
                                <th style="width: 25%; text-align: left;">JUDUL</th>
                                <th style="width: 28%; text-align: left;">DESKRIPSI</th>
                                <th style="width: 10%;">TGL KEGIATAN</th>
                                <th style="width: 10%;">TGL UPLOAD</th>
                                <th style="width: 10%;">AKSI</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php 
                            $no = $offset + 1;
                            if ($total_data > 0):
                                while($row = mysqli_fetch_assoc($data_berita)): 
                                    $kegiatan_time = strtotime($row['tanggal_kegiatan']);
                                    $current_time = time();
                                    $chip_class = ($kegiatan_time < $current_time) ? 'chip-orange' : 'chip-green';
                            ?>
                            <tr>
                                <td class="fw-bold text-muted"><?php echo $no++; ?></td>
                                <td>
                                    <img src="../../assets/uploads/<?php echo htmlspecialchars($row['gambar']); ?>" 
                                        class="news-thumb-img shadow-sm border" onerror="this.src='https://via.placeholder.com/90x65?text=No+Image'">
                                </td>
                                <td class="text-start fw-bold" style="font-size: 0.95rem; color: #2c3e2d;">
                                    <?php echo htmlspecialchars($row['judul']); ?>
                                </td>
                                
                                <td class="text-start small text-muted">
                                    <div style="display: -webkit-box; -webkit-line-clamp: 2; -webkit-box-orient: vertical; overflow: hidden; line-height: 1.5;">
                                        <?php echo strip_tags($row['deskripsi']); ?>
                                    </div>
                                </td>
                                
                                <td>
                                    <span class="news-date-chip <?php echo $chip_class; ?>">
                                        <?php echo date('d-m-Y', strtotime($row['tanggal_kegiatan'])); ?>
                                    </span>
                                </td>
                                
                                <td class="text-muted" style="font-size:0.85rem;">
                                    <?php echo date('d-m-Y', strtotime($row['tanggal_posting'])); ?>
                                </td>
                                
                                <td>
                                    <div class="d-flex justify-content-center gap-2">
                                        <a href="edit_berita.php?id=<?php echo $row['id']; ?>" class="btn btn-outline-success nmg-rev-btn" title="Edit Berita">
                                            <i class="bi bi-pencil-square"></i>
                                        </a>
                                        <button type="button" 
                                                class="btn btn-outline-danger nmg-rev-btn"
                                                onclick="prepareDelete('<?php echo $row['id']; ?>', '<?php echo htmlspecialchars(addslashes($row['judul'])); ?>')"
                                                title="Hapus Berita">
                                            <i class="bi bi-trash3"></i>
                                        </button>
                                    </div>
                                </td>
                            </tr>
                            <?php endwhile; else: ?>
                            <tr>
                                <td colspan="7" class="py-5 text-muted text-center">Belum ada data berita.</td>
                            </tr>
                            <?php endif; ?>
                        </tbody>
                    </table>

                    <div class="d-flex flex-column flex-md-row justify-content-between align-items-center p-3 p-md-4 border-top bg-light-subtle mt-2 gap-3">
                        <div class="text-muted small text-center text-md-start">
                            Menampilkan <span class="fw-bold"><?php echo ($total_data > 0) ? ($offset + 1) : 0; ?> - <?php echo min($offset + $limit, $total_data); ?></span> dari <?php echo $total_data; ?> Berita
                        </div>
                        
                        <nav>
                            <ul class="pagination pagination-sm mb-0 gap-1 gap-md-2 flex-wrap justify-content-center">
                                
                                <li class="page-item <?php echo ($page <= 1) ? 'disabled' : ''; ?>">
                                    <a class="page-link border-0 text-dark small d-flex align-items-center" href="?halaman=<?php echo $page - 1; ?>" style="white-space: nowrap;">
                                        <i class="bi bi-chevron-left"></i> 
                                        <span class="d-none d-sm-inline ms-1">Prev</span>
                                    </a>
                                </li>

                                <?php for($i = 1; $i <= $total_halaman; $i++): ?>
                                    <li class="page-item">
                                        <a class="page-link border-0 rounded-circle text-center <?php echo ($page == $i) ? 'active shadow-sm' : ''; ?>" 
                                            style="width: 32px; height: 32px; line-height: 18px;"
                                            href="?halaman=<?php echo $i; ?>"><?php echo $i; ?></a>
                                    </li>
                                <?php endfor; ?>

                                <li class="page-item <?php echo ($page >= $total_halaman) ? 'disabled' : ''; ?>">
                                    <a class="page-link border-0 text-dark small d-flex align-items-center" href="?halaman=<?php echo $page + 1; ?>" style="white-space: nowrap;">
                                        <span class="d-none d-sm-inline me-1">Next</span> 
                                        <i class="bi bi-chevron-right"></i>
                                    </a>
                                </li>
                                
                            </ul>
                        </nav>
                    </div>
                    </div>
            </div>
        </div>
    </main>

    <div class="modal fade" id="modalHapus" tabindex="-1">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content border-0 shadow-lg" style="border-radius: 20px;">
                <div class="modal-body text-center p-4">
                    <div class="auth-icon-circle mx-auto mb-3" 
                        style="background-color: #ffebeb; color: #dc3545; width: 60px; height: 60px; display: flex; align-items: center; justify-content: center; border-radius: 50%; font-size: 1.8rem;">
                        <i class="bi bi-exclamation-triangle"></i>
                    </div>
                    <h4 class="fw-bold mb-2 text-dark">Konfirmasi Hapus</h4>
                    <p class="text-muted mb-4 small" id="teksHapus">Apakah Anda yakin ingin menghapus berita ini?</p>
                    <div class="d-flex justify-content-center gap-3">
                        <button type="button" class="btn btn-light rounded-pill px-4 fw-bold" data-bs-dismiss="modal">Batal</button>
                        <a href="#" id="linkHapus" class="btn btn-danger rounded-pill px-4 fw-bold">Ya, Hapus!</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="modalNotifikasi" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" style="width: 320px;">
            <div class="modal-content border-0 shadow-lg" style="border-radius: 25px;">
                <div class="modal-body text-center p-4">
                    <div class="auth-icon-circle mx-auto mb-3" 
                        style="background-color: #e8f5e9; color: var(--primary-green); width: 60px; height: 60px; display: flex; align-items: center; justify-content: center; border-radius: 50%; font-size: 1.8rem;">
                        <i class="bi bi-check-lg"></i>
                    </div>
                    <h4 class="fw-bold mb-2 text-dark" id="judulNotifikasi">Berhasil!</h4>
                    <p class="text-muted mb-4 small" id="pesanNotifikasi">Data telah diperbarui.</p>
                    <button type="button" class="btn btn-success w-100 rounded-pill py-2 fw-bold" 
                            data-bs-dismiss="modal" style="background-color: var(--primary-green); border: none;">OK</button>
                </div>
            </div>
        </div>
    </div>

</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://unpkg.com/vue@3/dist/vue.global.js"></script>
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>

<script>
    const { createApp } = Vue;
    createApp({
        data() { return { isSidebarOpen: false } },
        mounted() {
            AOS.init({ duration: 800, once: true });
        }
    }).mount('#app');

    function prepareDelete(id, judul) {
        document.getElementById('teksHapus').innerText = "Apakah Anda yakin ingin menghapus berita '" + judul + "' secara permanen?";
        document.getElementById('linkHapus').href = "../../app/controllers/BeritaController.php?hapus=" + id;
        new bootstrap.Modal(document.getElementById('modalHapus')).show();
    }

    window.onload = function() {
        const urlParams = new URLSearchParams(window.location.search);
        const status = urlParams.get('status');

        if (status) {
            const judul = document.getElementById('judulNotifikasi');
            const pesan = document.getElementById('pesanNotifikasi');
            const modalElement = document.getElementById('modalNotifikasi');
            const modalInstan = new bootstrap.Modal(modalElement);

            if (status === 'success') {
                judul.innerText = "Berhasil Tambah!";
                pesan.innerText = "Berita baru telah berhasil diterbitkan.";
            } else if (status === 'updated') {
                judul.innerText = "Berhasil Edit!";
                pesan.innerText = "Perubahan berita telah disimpan dengan sukses.";
            } else if (status === 'deleted') {
                judul.innerText = "Berhasil Hapus!";
                pesan.innerText = "Data berita telah dihapus secara permanen.";
            }
            modalInstan.show();
            window.history.replaceState({}, document.title, window.location.pathname);
        }
    }
</script>
</body>
</html>