<?php
require_once __DIR__ . '/../db.php';

function getOrders() {
    $db = db();
    $result = $db->query("SELECT * FROM orders ORDER BY id DESC");
    if (!$result) {
        throw new Exception("Query error: " . $db->error);
    }
    return $result;
}

function saveOrder($user_id, $user_name, $dish_name) {
    // Basic input validation
    if (empty($user_id) || empty($user_name) || empty($dish_name)) {
        throw new Exception("Invalid input: All fields are required.");
    }

    $db = db();
    $stmt = $db->prepare("INSERT INTO orders (user_id, user_name, dish_name) VALUES (?, ?, ?)");
    if (!$stmt) {
        throw new Exception("Prepare error: " . $db->error);
    }

    // Correct types: i for int, s for strings
    $stmt->bind_param("iss", $user_id, $user_name, $dish_name);

    if (!$stmt->execute()) {
        $stmt->close();
        throw new Exception("Execute error: " . $stmt->error);
    }

    $stmt->close();
    return true;  // Indicate success
}