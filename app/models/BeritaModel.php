<?php

class BeritaModel {
    private $db;

    public function __construct($conn) {
        $this->db = $conn;
    }

    public function getAll() {
        $query = "SELECT * FROM berita ORDER BY tanggal_posting DESC";
        $result = mysqli_query($this->db, $query);
        $data = [];
        while ($row = mysqli_fetch_assoc($result)) {
            $data[] = $row;
        }
        return $data;
    }

    public function getById($id) {
        $stmt = $this->db->prepare("SELECT * FROM berita WHERE id = ?");
        $stmt->bind_param("i", $id);
        $stmt->execute();
        return $stmt->get_result()->fetch_assoc();
    }

    public function getPaged($limit, $offset) {
        $limit = (int)$limit;
        $offset = (int)$offset;
        $query = "SELECT * FROM berita ORDER BY tanggal_posting DESC LIMIT $limit OFFSET $offset";
        return mysqli_query($this->db, $query);
    }

    public function getTotal() {
        $query = "SELECT COUNT(*) as total FROM berita";
        $result = mysqli_query($this->db, $query);
        $data = mysqli_fetch_assoc($result);
        return $data['total'];
    }

    public function insert($judul, $deskripsi, $gambar, $tanggal_kegiatan, $tanggal_posting) {
        $stmt = $this->db->prepare("INSERT INTO berita (judul, deskripsi, gambar, tanggal_kegiatan, tanggal_posting) VALUES (?, ?, ?, ?, ?)");
        $stmt->bind_param("sssss", $judul, $deskripsi, $gambar, $tanggal_kegiatan, $tanggal_posting);
        return $stmt->execute();
    }

    public function update($id, $judul, $deskripsi, $gambar, $tanggal_kegiatan) {
        $stmt = $this->db->prepare("UPDATE berita SET judul=?, deskripsi=?, gambar=?, tanggal_kegiatan=? WHERE id=?");
        $stmt->bind_param("ssssi", $judul, $deskripsi, $gambar, $tanggal_kegiatan, $id);
        return $stmt->execute();
    }

    public function delete($id) {
        $stmt = $this->db->prepare("DELETE FROM berita WHERE id = ?");
        $stmt->bind_param("i", $id);
        return $stmt->execute();
    }
}
?>