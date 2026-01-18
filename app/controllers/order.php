<?php


// Buyurtma qo'shish kodi ichida
$userId = $_SESSION['user_id'] ?? null;

if ($userId) {
    $stmt = $pdo->prepare("INSERT INTO orders (user_id, user_name, dish_name, ...) VALUES (?, ?, ?, ...)");
    $stmt->execute([$userId, $userName ?? 'Guest', $dishName,]);
}
?>