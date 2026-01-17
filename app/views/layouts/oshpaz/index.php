<?php
require_once __DIR__ . '/../models/Order.php';

function oshpazIndex(): void
{
    // Buyurtmalarni DBdan olamiz
    $orders = getOrders(); // mysqli_result

    // View
    require __DIR__ . '/../views/layouts/header.php';
    require __DIR__ . '/../views/oshpaz/index.php';
}
