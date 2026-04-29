<?php

include_once __DIR__ . '/../../config/koneksi.php';
include_once __DIR__ . '/../models/BeritaModel.php';

$beritaModel = new BeritaModel($conn);

if (isset($_GET['action']) && $_GET['action'] == 'getAll') {
    header('Content-Type: application/json');
    $data = $beritaModel->getAll();
    echo json_encode(['status' => 'success', 'data' => $data], JSON_UNESCAPED_UNICODE | JSON_INVALID_UTF8_SUBSTITUTE);
    exit();
}

if (isset($_GET['action']) && $_GET['action'] == 'getDetail' && isset($_GET['id'])) {
    header('Content-Type: application/json');
    $data = $beritaModel->getById($_GET['id']);
    if ($data) echo json_encode(['status' => 'success', 'data' => $data], JSON_UNESCAPED_UNICODE | JSON_INVALID_UTF8_SUBSTITUTE);
    else echo json_encode(['status' => 'error', 'message' => 'Berita tidak ditemukan']);
    exit();
}

function getBeritaPaged($conn, $limit, $offset) {
    $model = new BeritaModel($conn);
    return $model->getPaged($limit, $offset);
}

function getTotalBerita($conn) {
    $model = new BeritaModel($conn);
    return $model->getTotal();
}

$limit = 5;
$page = isset($_GET['halaman']) ? (int)$_GET['halaman'] : 1;
$offset = ($page > 1) ? ($page * $limit) - $limit : 0;

if (isset($_POST['simpan_berita'])) {
    $judul = htmlspecialchars($_POST['judul'], ENT_QUOTES, 'UTF-8');
    $tanggal_kegiatan = htmlspecialchars($_POST['tanggal_kegiatan'], ENT_QUOTES, 'UTF-8');
    $deskripsi = htmlspecialchars($_POST['deskripsi'], ENT_QUOTES, 'UTF-8');
    $tanggal_posting = date('Y-m-d H:i:s');

    $gambar = $_FILES['gambar']['name'];
    $tmp_name = $_FILES['gambar']['tmp_name'];
    $ukuran_file = $_FILES['gambar']['size'];
    
    $ekstensiValid = ['jpg', 'jpeg', 'png'];
    $ekstensiGambar = strtolower(pathinfo($gambar, PATHINFO_EXTENSION));

    if (!in_array($ekstensiGambar, $ekstensiValid)) {
        echo "<script>alert('Format gambar harus JPG, JPEG, atau PNG!'); window.history.back();</script>";
        exit();
    }

    if ($ukuran_file > 2000000) {
        echo "<script>alert('Ukuran gambar terlalu besar! Maksimal 2MB.'); window.history.back();</script>";
        exit();
    }

    $cekTipe = getimagesize($tmp_name);
    if ($cekTipe === false) {
        echo "<script>alert('File yang diunggah bukan gambar yang valid!'); window.history.back();</script>";
        exit();
    }

    $namaFileBaru = uniqid() . '-' . time() . '.' . $ekstensiGambar;
    $direktori = __DIR__ . '/../../assets/uploads/' . $namaFileBaru; 

    if (move_uploaded_file($tmp_name, $direktori)) {
        if ($beritaModel->insert($judul, $deskripsi, $namaFileBaru, $tanggal_kegiatan, $tanggal_posting)) {
            header("Location: ../../views/admin/kelola_berita.php?status=success");
            exit();
        }
    }
}

if (isset($_GET['hapus'])) {
    $dataBerita = $beritaModel->getById($_GET['hapus']);
    if ($dataBerita) {
        $file_name = basename($dataBerita['gambar']); 
        $path = __DIR__ . '/../../assets/uploads/' . $file_name;
        if (!empty($file_name) && file_exists($path)) {
            unlink($path);
        }
    }
    if ($beritaModel->delete($_GET['hapus'])) {
        header("Location: ../../views/admin/kelola_berita.php?status=deleted");
        exit();
    }
}

if (isset($_POST['edit_berita'])) {
    $id = (int)$_POST['id'];
    $judul = htmlspecialchars($_POST['judul'], ENT_QUOTES, 'UTF-8');
    $deskripsi = htmlspecialchars($_POST['deskripsi'], ENT_QUOTES, 'UTF-8');
    $tanggal_kegiatan = htmlspecialchars($_POST['tanggal_kegiatan'], ENT_QUOTES, 'UTF-8');
    
    $gambar_lama = basename($_POST['gambar_lama']); 

    if ($_FILES['gambar']['error'] === 4) {
        $namaFileBaru = $gambar_lama;
    } else {
        $tmp_name = $_FILES['gambar']['tmp_name'];
        $ukuran_file = $_FILES['gambar']['size'];
        
        if ($ukuran_file > 2000000) {
            echo "<script>alert('Ukuran gambar terlalu besar! Maksimal 2MB.'); window.history.back();</script>";
            exit();
        }
        
        if (getimagesize($tmp_name) === false) {
            echo "<script>alert('File yang diunggah bukan gambar yang valid!'); window.history.back();</script>";
            exit();
        }

        $namaFileBaru = uniqid() . '-' . time() . '.' . strtolower(pathinfo($_FILES['gambar']['name'], PATHINFO_EXTENSION));
        move_uploaded_file($tmp_name, __DIR__ . '/../../assets/uploads/' . $namaFileBaru);
        
        $path_gambar_lama = __DIR__ . '/../../assets/uploads/' . $gambar_lama;
        if (!empty($gambar_lama) && file_exists($path_gambar_lama)) {
            unlink($path_gambar_lama);
        }
    }

    if ($beritaModel->update($id, $judul, $deskripsi, $namaFileBaru, $tanggal_kegiatan)) {
        header("Location: ../../views/admin/kelola_berita.php?status=updated");
        exit();
    }
}
?>
