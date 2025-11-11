<?php
$config = require __DIR__ . '/config.php';
$mysqli = new mysqli($config['host'], $config['user'], $config['pass'], $config['db']);
if ($mysqli->connect_errno) {
    echo "Connection failed: " . $mysqli->connect_error;
    exit;
}
echo "Connected successfully to MySQL.";
$mysqli->close();
