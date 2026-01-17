<?php
// =======================
// SESSION
// =======================
session_start();

// Guest user_id (agar yo‘q bo‘lsa)
if (!isset($_SESSION['user_id'])) {
    $_SESSION['user_id'] = uniqid('guest_', true);
}

// =======================
// ROUTING
// =======================

// URL ni olish
$uri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
$uri = rtrim($uri, '/');

// Controllerlarni ulash
require_once __DIR__ . '/../app/controllers/UserController.php';
require_once __DIR__ . '/../app/controllers/OshpazController.php';

// =======================
// ROUTE MATCHING
// =======================
if ($uri === '' || $uri === '/' || $uri === '/user') {

    // User panel
    userIndex();

} elseif ($uri === '/oshpaz') {

    // Oshpaz panel
    oshpazIndex();

} else {

    // 404
    http_response_code(404);
    echo "<h1>404 Not Found</h1>";
}
