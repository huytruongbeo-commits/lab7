<?php
echo "<h1>Chào mừng đến với hệ thống Quản lý công việc nhóm!</h1>";
try {
    require_once __DIR__ . '/../config/config.local.php';
    $config = require __DIR__ . '/../config/config.local.php';
    $pdo = new PDO("mysql:host={$config['db_host']};dbname={$config['db_name']};charset=utf8mb4", $config['db_user'], $config['db_pass']);
    echo "<p style='color: green;'>Kết nối Cơ sở dữ liệu thành công!</p>";
} catch (Exception $e) {
    echo "<p style='color: red;'>Lỗi kết nối CSDL: " . $e->getMessage() . "</p>";
}
