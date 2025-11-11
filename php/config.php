<?php
// Mẫu cấu hình kết nối database (copy ra config.php và điền thông tin thật)

define('DB_HOST', 'localhost');
define('DB_NAME', 'viakingv_github');   // Đổi lại theo tên database thực tế
define('DB_USER', 'viakingv_github'); // Đổi lại theo tên user
define('DB_PASS', 'viakingv_github');

// Kết nối MySQL qua PDO
try {
    $dsn = "mysql:host=" . DB_HOST . ";dbname=" . DB_NAME . ";charset=utf8mb4";
    $pdo = new PDO($dsn, DB_USER, DB_PASS, [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]);
} catch (PDOException $e) {
    die("❌ Lỗi kết nối DB: " . $e->getMessage());
}
