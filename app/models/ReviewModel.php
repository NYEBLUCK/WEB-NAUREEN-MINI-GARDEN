<?php

class ReviewModel {
    private $db;

    public function __construct($conn) {
        $this->db = $conn;
    }

    public function insert($nama, $email, $rating, $ulasan, $tanggal, $status) {
        $query = "INSERT INTO reviews (nama, email, rating, ulasan, created_at, status) 
                  VALUES ('$nama', '$email', '$rating', '$ulasan', '$tanggal', '$status')";
        return mysqli_query($this->db, $query);
    }

    public function getApproved() {
        $query = "SELECT * FROM reviews WHERE status = 'approved' ORDER BY id DESC LIMIT 15";
        $result = mysqli_query($this->db, $query);
        $data = [];
        if($result) {
            while ($row = mysqli_fetch_assoc($result)) {
                $data[] = $row;
            }
        }
        return $data;
    }

    public function getPaged($limit, $offset) {
        $limit = (int)$limit;
        $offset = (int)$offset;
        $query = "SELECT * FROM reviews ORDER BY id DESC LIMIT $limit OFFSET $offset";
        return mysqli_query($this->db, $query);
    }

    public function getTotal() {
        $query = "SELECT COUNT(*) as total FROM reviews";
        $result = mysqli_query($this->db, $query);
        $data = mysqli_fetch_assoc($result);
        return $data['total'];
    }

    public function updateStatus($id, $status) {
        $id = mysqli_real_escape_string($this->db, $id);
        $status = mysqli_real_escape_string($this->db, $status);
        $query = "UPDATE reviews SET status = '$status' WHERE id = '$id'";
        return mysqli_query($this->db, $query);
    }

    public function delete($id) {
        $id = mysqli_real_escape_string($this->db, $id);
        $query = "DELETE FROM reviews WHERE id = '$id'";
        return mysqli_query($this->db, $query);
    }
}
?>