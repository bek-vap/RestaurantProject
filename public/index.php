<?php
// =======================
// SESSION
// =======================
session_start();


$cookieName = 'guest_id';
$lifetime = 60 * 60 * 24 * 30; // 30 kun

if (isset($_COOKIE[$cookieName])) {
    $_SESSION['user_id'] = $_COOKIE[$cookieName];
} elseif (!isset($_SESSION['user_id'])) {
    $id = generateGuestId();
    $_SESSION['user_id'] = $id;
    setcookie($cookieName, $id, time() + $lifetime, '/', '', true, true);
}

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
