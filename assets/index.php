<?php
$url = $_GET['url'] ?? 'login';

switch ($url) {

    case 'login':
        require '../app/controllers/AuthController.php';
        require '../app/views/login.php';
        break;

    case 'dashboard':
        require '../app/views/admin/dashboard.php';
        break;

    default:
        echo "404 Not Found";
}