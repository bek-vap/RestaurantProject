<?php
require_once __DIR__ . '/../models/Order.php';

function oshpazIndex(): void
{
    // Agar "Bajarildi" bosilgan bo‘lsa
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $orderId = (int)($_POST['order_id'] ?? 0);

        if ($orderId > 0) {
            deleteOrder($orderId);
        }

        // qayta submit bo‘lmasin
        header("Location: /oshpaz");
        exit;
    }

    // Orderlarni olish
    $orders = getOrders();

    require __DIR__ . '/../views/layouts/header.php';
    require __DIR__ . '/../views/layouts/oshpaz/index.php';
}
