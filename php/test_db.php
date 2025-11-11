<?php
require_once 'config.php';

try {
    $stmt = $pdo->query("SELECT NOW() AS server_time");
    $row = $stmt->fetch(PDO::FETCH_ASSOC);
    echo "✅ Kết nối thành công! Thời gian server: " . $row['server_time'];
} catch (Exception $e) {
    echo "❌ Lỗi truy vấn: " . $e->getMessage();
}
