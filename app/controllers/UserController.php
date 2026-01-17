<?php
require_once __DIR__ . '/../models/Dish.php';
require_once __DIR__ . '/../models/Order.php';

function userIndex(): void
{
    // Kategoriya (default: meals)
    $category = $_GET['cat'] ?? 'meals';

    // Xavfsizlik: faqat shu 4 ta qiymatga ruxsat
    $allowed = ['meals', 'fastfood', 'desserts', 'drinks'];
    if (!in_array($category, $allowed, true)) {
        $category = 'meals';
    }

    // Session ichida guest user_id bo‘lishi kerak (public/index.php da ham qilinadi)
    if (!isset($_SESSION['user_id'])) {
        $_SESSION['user_id'] = uniqid('guest_', true);
    }

    // POST bo'lsa: order saqlash
    $success = false;
    $error = null;

    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $dishName = trim($_POST['dish'] ?? '');

        // Oddiy username (hozircha guest)
        $userName = trim($_POST['user_name'] ?? 'Guest');
        if ($userName === '') $userName = 'Guest';

        if ($dishName === '') {
            $error = "Dish tanlanmadi.";
        } else {
            // DB ga saqlaymiz
            saveOrder($_SESSION['user_id'], $userName, $dishName);
            $success = true;

            // Refresh bosilganda qayta yuborilib ketmasin (PRG pattern)
            header("Location: /user?cat=" . urlencode($category));
            exit;
        }
    }

    // Dishes (filter bo‘yicha)
    $dishes = getDishes($category);

    // View
    require __DIR__ . '/../views/layouts/header.php';
    require __DIR__ . '/../views/user/index.php';
}
