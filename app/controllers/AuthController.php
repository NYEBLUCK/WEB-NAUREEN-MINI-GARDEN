<?php
session_start();
require_once '../../config/koneksi.php';

require_once '../models/UserModel.php';

if (isset($_POST['login'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $userModel = new User($conn);
    $data = $userModel->getUserByUsername($username);

    if ($data) {
        if ($password === $data['password']) { 
            session_regenerate_id(true);
            $_SESSION['admin_id'] = $data['id'];
            $_SESSION['username'] = $data['username'];
            echo "success"; 
        } else {
            echo "Password salah!";
        }
    } else {
        echo "Username tidak ditemukan!";
    }
}

if (isset($_GET['action']) && $_GET['action'] == 'logout') {
    session_unset();
    session_destroy();

    header("Location: ../../views/login.php");
    exit();
}
?>