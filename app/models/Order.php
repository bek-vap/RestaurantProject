<?php
require_once __DIR__ . '/../db.php';

/**
 * Barcha buyurtmalarni DB dan olish
 * @return mysqli_result|false
 */
function getOrders()
{
    $db = db();
    return $db->query("SELECT * FROM orders ORDER BY id DESC");
}

/**
 * Buyurtmani DB ga saqlash
 */
function saveOrder($user_id, $user_name, $dish_name)
{
    $db = db();
    $stmt = $db->prepare(
        "INSERT INTO orders (user_id, user_name, dish_name) VALUES (?, ?, ?)"
    );
    $stmt->bind_param("sss", $user_id, $user_name, $dish_name);
    $stmt->execute();
}
