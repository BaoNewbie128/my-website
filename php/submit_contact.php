<?php
// Simple contact form handler (placeholder)
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = $_POST['name'] ?? '';
    $email = $_POST['email'] ?? '';
    $message = $_POST['message'] ?? '';
    // TODO: validate and persist/send
    header('Content-Type: application/json');
    echo json_encode(['status' => 'ok', 'received' => compact('name','email','message')]);
    exit;
}
http_response_code(405);
echo 'Method Not Allowed';
