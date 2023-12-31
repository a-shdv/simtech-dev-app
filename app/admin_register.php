<?php
session_start();

use App\Repos\AdminRepo;
use App\Helpers\DbConnection;

require_once __DIR__ . '/repos/AdminRepo.php';
require_once __DIR__ . '/conf/db_config.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    global $conn;

    $form_admin = [
        'email' => trim($_POST['email']),
        'password' => password_hash(trim($_POST['password']), PASSWORD_BCRYPT)
    ];

    try {
        DbConnection::establishDbConn($conn);

        $is_admin_exists = AdminRepo::isAdminExists($conn, $form_admin['email']);

        if (!$is_admin_exists)
            AdminRepo::register($conn, $form_admin);

        DbConnection::closeDbConn($conn);

        $_SESSION['registration_success'] = 'Регистрация прошла успешно!';

        header('Location: ../public/admin-login.php');
    } catch (Exception $e) {
        echo 'Could not handle the request';
    }
}
