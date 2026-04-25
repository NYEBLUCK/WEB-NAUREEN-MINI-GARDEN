<?php
require_once '../../config/koneksi.php';

class User {
    private $db;

    public function __construct($conn) {
        $this->db = $conn;
    }

    public function getUserByUsername($username) {
        $stmt = $this->db->prepare("SELECT * FROM users WHERE username = ?");
        $stmt->bind_param("s", $username);
        $stmt->execute();
        $result = $stmt->get_result();
        return $result->fetch_assoc();
    }
}
?>