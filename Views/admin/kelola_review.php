<?php
// views/admin/kelola_review.php
session_start();
if (!isset($_SESSION['username'])) {
    header("Location: ../login.php");
    exit();
}

$username_login = $_SESSION['username'];
include_once __DIR__ . '/../../app/controllers/ReviewController.php';

$result = getReviewsPaged($conn, $limit, $offset); 
$total_data = getTotalReviews($conn);
$total_halaman = ceil($total_data / $limit);
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Kelola Ulasan - Naureen Mini Garden</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;600;700;800&display=swap" rel="stylesheet">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    
    <link rel="stylesheet" href="../../assets/css/style.css">
    <link rel="stylesheet" href="../../assets/css/admin.css">
    <link rel="stylesheet" href="../../assets/css/admin-review.css">
</head>
<body class="nmg-rev-wrapper">

<div id="app">
    <?php include '../templates/sidebar_admin.php'; ?>

    <main class="main-content">
        <?php include '../templates/navbar_admin.php'; ?>
        
        <div class="container-fluid p-4 pt-3">
            <header class="mb-4 d-flex justify-content-between align-items-center" data-aos="fade-down">
                <div>
                    <h2 class="fw-bold mb-0" style="color: #2c3e2d;">Kelola Reviews</h2>
                    <p class="text-muted small">Tinjau ulasan pengunjung taman.</p>
                </div>
            </header>

            <div class="nmg-rev-card" data-aos="fade-up">
                <div class="table-responsive">
                    <table class="table nmg-rev-table align-middle mb-0 text-center">
                        <thead>
                            <tr>
                                <th style="width: 5%;">NO</th> 
                                <th style="width: 25%; text-align: left;">PENGUNJUNG</th>
                                <th style="width: 15%;">RATING</th>
                                <th style="width: 30%; text-align: left;">ULASAN</th>
                                <th style="width: 10%;">STATUS</th>
                                <th style="width: 15%;">AKSI</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php 
                            $no = $offset + 1;
                            if ($total_data > 0):
                                while($row = mysqli_fetch_assoc($result)): 
                            ?>
                            <tr id="row-<?= $row['id']; ?>">
                                <td class="fw-bold text-muted"><?= $no++; ?></td>
                                <td class="text-start">
                                    <div class="fw-bold" style="font-size: 0.95rem;"><?= htmlspecialchars($row['nama'] ?? ''); ?></div>
                                    <div class="text-muted" style="font-size: 0.75rem;">
                                        <?= !empty($row['email']) ? htmlspecialchars($row['email']) : '-'; ?>
                                    </div>
                                </td>
                                <td>
                                    <?php for($i=1; $i<=5; $i++): ?>
                                        <i class="bi bi-star-fill <?= $i <= $row['rating'] ? 'star-filled' : 'star-empty'; ?>"></i>
                                    <?php endfor; ?>
                                </td>
                                <td class="text-start small italic text-muted">
                                    <?= !empty($row['ulasan']) ? '"' . htmlspecialchars($row['ulasan']) . '"' : 'Tidak ada komentar'; ?>
                                </td>
                                <td id="badge-container-<?= $row['id']; ?>">
                                    <span class="<?= $row['status'] == 'approved' ? 'nmg-rev-badge-approved' : 'nmg-rev-badge-pending'; ?>">
                                        <?= ucfirst($row['status']); ?>
                                    </span>
                                </td>
                                <td>
                                    <div class="d-flex justify-content-center gap-2" id="btn-group-<?= $row['id']; ?>">
                                        <?php if($row['status'] == 'pending'): ?>
                                            <button type="button" onclick="confirmAksi(<?= $row['id']; ?>, 'approve', '<?= htmlspecialchars(addslashes($row['nama'] ?? '')); ?>')" class="btn btn-outline-success nmg-rev-btn"><i class="bi bi-check-lg"></i></button>
                                        <?php else: ?>
                                            <button type="button" onclick="confirmAksi(<?= $row['id']; ?>, 'pending', '<?= htmlspecialchars(addslashes($row['nama'] ?? '')); ?>')" class="btn btn-outline-warning nmg-rev-btn"><i class="bi bi-slash-circle"></i></button>
                                        <?php endif; ?>

                                        <button type="button" onclick="confirmHapus(<?= $row['id']; ?>, '<?= htmlspecialchars(addslashes($row['nama'] ?? '')); ?>')" class="btn btn-outline-danger nmg-rev-btn"><i class="bi bi-trash3"></i></button>
                                    </div>
                                </td>
                            </tr>
                            <?php endwhile; else: ?>
                                <tr><td colspan="6" class="py-5 text-muted">Belum ada ulasan.</td></tr>
                            <?php endif; ?>
                        </tbody>
                    </table>

                    <div class="d-flex flex-column flex-md-row justify-content-between align-items-center p-3 p-md-4 border-top bg-light-subtle mt-2 gap-3">
                        <div class="text-muted small text-center text-md-start">
                            Menampilkan <span class="fw-bold"><?= ($total_data > 0) ? ($offset + 1) : 0; ?> - <?= min($offset + $limit, $total_data); ?></span> dari <?= $total_data; ?> Ulasan
                        </div>
                        
                        <nav>
                            <ul class="pagination pagination-sm mb-0 gap-1 gap-md-2 flex-wrap justify-content-center">
                                
                                <li class="page-item <?= ($page <= 1) ? 'disabled' : ''; ?>">
                                    <a class="page-link border-0 text-dark small d-flex align-items-center" href="?halaman=<?= $page - 1; ?>" style="white-space: nowrap;">
                                        <i class="bi bi-chevron-left"></i> 
                                        <span class="d-none d-sm-inline ms-1">Prev</span>
                                    </a>
                                </li>

                                <?php for($i = 1; $i <= $total_halaman; $i++): ?>
                                    <li class="page-item">
                                        <a class="page-link border-0 rounded-circle text-center <?= ($page == $i) ? 'active shadow-sm' : ''; ?>" 
                                            style="width: 32px; height: 32px; line-height: 18px;"
                                            href="?halaman=<?= $i; ?>"><?= $i; ?></a>
                                    </li>
                                <?php endfor; ?>

                                <li class="page-item <?= ($page >= $total_halaman) ? 'disabled' : ''; ?>">
                                    <a class="page-link border-0 text-dark small d-flex align-items-center" href="?halaman=<?= $page + 1; ?>" style="white-space: nowrap;">
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

    <div class="modal fade" id="modalAksi" tabindex="-1">
        <div class="modal-dialog modal-dialog-centered" style="width: 350px;">
            <div class="modal-content border-0 shadow-lg" style="border-radius: 20px;">
                <div class="modal-body text-center p-4">
                    <div id="iconAksi" class="auth-icon-circle mx-auto mb-3" style="width: 60px; height: 60px; font-size: 1.8rem;"></div>
                    <h5 class="fw-bold mb-2">Konfirmasi Status</h5>
                    <p class="text-muted small mb-4" id="teksAksi"></p>
                    <div class="d-flex gap-2">
                        <button class="btn btn-light w-50 rounded-pill fw-bold" data-bs-dismiss="modal">Batal</button>
                        <button class="btn btn-success w-50 rounded-pill fw-bold" id="confirmAksiBtn">Ya, Ubah!</button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="modalDelete" tabindex="-1">
        <div class="modal-dialog modal-dialog-centered" style="width: 350px;">
            <div class="modal-content border-0 shadow-lg" style="border-radius: 20px;">
                <div class="modal-body text-center p-4">
                    <div class="auth-icon-circle mx-auto mb-3" style="background: #ffebeb; color: #dc3545; width: 60px; height: 60px; font-size: 1.8rem;"><i class="bi bi-exclamation-circle"></i></div>
                    <h5 class="fw-bold mb-2">Hapus Ulasan?</h5>
                    <p class="text-muted small mb-4" id="teksHapus"></p>
                    <div class="d-flex gap-2">
                        <button class="btn btn-light w-50 rounded-pill fw-bold" data-bs-dismiss="modal">Batal</button>
                        <button class="btn btn-danger w-50 rounded-pill fw-bold" id="confirmDelBtn">Ya, Hapus!</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

<script src="https://unpkg.com/vue@3/dist/vue.global.js"></script>
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>

<script>
    // INISIALISASI VUE (UNTUK SIDEBAR)
    const { createApp } = Vue;
    createApp({
        data() {
            return {
                isSidebarOpen: false
            }
        }
    }).mount('#app');

    // LOGIKA MODAL & AJAX
    let currentId, currentAksi;
    let modalAksi, modalDel;

    // KUNCI: Inisialisasi Modal hanya setelah HTML selesai dimuat
    document.addEventListener("DOMContentLoaded", function() {
        modalAksi = new bootstrap.Modal(document.getElementById('modalAksi'));
        modalDel = new bootstrap.Modal(document.getElementById('modalDelete'));
    });

    function confirmAksi(id, aksi, nama) {
        currentId = id; currentAksi = aksi;
        const icon = document.getElementById('iconAksi');
        icon.innerHTML = aksi === 'approve' ? '<i class="bi bi-check-circle"></i>' : '<i class="bi bi-slash-circle"></i>';
        icon.style.background = aksi === 'approve' ? '#e8f5e9' : '#fff3e0';
        icon.style.color = aksi === 'approve' ? '#2e7d32' : '#ef6c00';
        document.getElementById('teksAksi').innerText = `Ubah ulasan dari ${nama} menjadi ${aksi.toUpperCase()}?`;
        modalAksi.show();
    }

    document.getElementById('confirmAksiBtn').onclick = async () => {
        const response = await fetch(`../../app/controllers/ReviewController.php?aksi=${currentAksi}&id=${currentId}&ajax=true`);
        const res = await response.json();
        if (res.status === 'success') {
            document.getElementById(`badge-container-${currentId}`).innerHTML = `<span class="nmg-rev-badge-${res.new_status}">${res.new_status.charAt(0).toUpperCase() + res.new_status.slice(1)}</span>`;
            const group = document.getElementById(`btn-group-${currentId}`);
            
            const safeNama = document.getElementById('teksAksi').innerText.split(' dari ')[1].split(' menjadi ')[0];

            group.innerHTML = res.new_status === 'approved' 
                ? `<button type="button" onclick="confirmAksi(${currentId}, 'pending', '${safeNama}')" class="btn btn-outline-warning nmg-rev-btn"><i class="bi bi-slash-circle"></i></button>`
                : `<button type="button" onclick="confirmAksi(${currentId}, 'approve', '${safeNama}')" class="btn btn-outline-success nmg-rev-btn"><i class="bi bi-check-lg"></i></button>`;
            group.innerHTML += `<button type="button" onclick="confirmHapus(${currentId}, '${safeNama}')" class="btn btn-outline-danger nmg-rev-btn"><i class="bi bi-trash3"></i></button>`;
            modalAksi.hide();
        }
    };

    function confirmHapus(id, nama) {
        currentId = id;
        document.getElementById('teksHapus').innerText = `Hapus ulasan dari ${nama} secara permanen?`;
        modalDel.show();
    }

    document.getElementById('confirmDelBtn').onclick = async () => {
        const response = await fetch(`../../app/controllers/ReviewController.php?hapus=${currentId}&ajax=true`);
        const res = await response.json();
        if (res.status === 'success') {
            document.getElementById(`row-${currentId}`).style.opacity = '0';
            setTimeout(() => { document.getElementById(`row-${currentId}`).remove(); }, 400);
            modalDel.hide();
        }
    };

    window.onload = () => { AOS.init({ duration: 800, once: true }); };
</script>
</body>
</html>