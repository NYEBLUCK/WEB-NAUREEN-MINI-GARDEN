<?php
ob_start();
include_once __DIR__ . '/../../config/koneksi.php';
include_once __DIR__ . '/../models/ReviewModel.php';

$reviewModel = new ReviewModel($conn);

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['action']) && $_POST['action'] === 'submit') {
    ob_clean(); 
    header('Content-Type: application/json');
    $nama = isset($_POST['nama']) ? htmlspecialchars(mysqli_real_escape_string($conn, $_POST['nama']), ENT_QUOTES, 'UTF-8') : '';
    $email = (isset($_POST['email']) && !empty($_POST['email'])) ? htmlspecialchars(mysqli_real_escape_string($conn, $_POST['email']), ENT_QUOTES, 'UTF-8') : '-';
    $rating = isset($_POST['rating']) ? (int)$_POST['rating'] : 5;
    $ulasan = (isset($_POST['ulasan']) && !empty($_POST['ulasan'])) ? htmlspecialchars(mysqli_real_escape_string($conn, $_POST['ulasan']), ENT_QUOTES, 'UTF-8') : 'Tidak ada komentar';
    $tanggal = date('Y-m-d');
    $status = 'pending';

    if (empty($nama)) {
        echo json_encode(['status' => 'error', 'message' => 'Nama wajib diisi']);
        exit();
    }

    if ($reviewModel->insert($nama, $email, $rating, $ulasan, $tanggal, $status)) {
        echo json_encode(['status' => 'success', 'message' => 'Ulasan berhasil disimpan']);
    } else {
        echo json_encode(['status' => 'error', 'message' => 'Gagal menyimpan ulasan']);
    }
    exit();
}

if ($_SERVER['REQUEST_METHOD'] === 'GET' && isset($_GET['action']) && $_GET['action'] == 'getApproved') {
    ob_clean();
    header('Content-Type: application/json');
    $data = $reviewModel->getApproved();
    echo json_encode(['status' => 'success', 'data' => $data]);
    exit();
}

function getReviewsPaged($conn, $limit, $offset) {
    global $reviewModel;
    return $reviewModel->getPaged($limit, $offset);
}

function getTotalReviews($conn) {
    global $reviewModel;
    return $reviewModel->getTotal();
}

$limit = 5; 
$page = isset($_GET['halaman']) ? (int)$_GET['halaman'] : 1;
$offset = ($page > 1) ? ($page * $limit) - $limit : 0;

if (isset($_GET['aksi']) && isset($_GET['id'])) {
    $id = (int)$_GET['id']; // ANTI SQL INJECTION
    $status = ($_GET['aksi'] === 'approve') ? 'approved' : 'pending';

    if ($reviewModel->updateStatus($id, $status)) {
        if (isset($_GET['ajax'])) {
            header('Content-Type: application/json');
            echo json_encode(['status' => 'success', 'new_status' => $status]);
            exit();
        }
        header("Location: ../../views/admin/kelola_review.php?halaman=" . $page);
        exit();
    }
}

if (isset($_GET['hapus'])) {
    $id = (int)$_GET['hapus'];
    if ($reviewModel->delete($id)) {
        if (isset($_GET['ajax'])) {
            header('Content-Type: application/json');
            echo json_encode(['status' => 'success']);
            exit();
        }
        header("Location: ../../views/admin/kelola_review.php?status=deleted&halaman=" . $page);
        exit();
    }
}
?>