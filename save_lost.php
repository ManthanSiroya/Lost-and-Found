<?php
error_reporting(0);
header("Content-Type: application/json");
include "config.php";

$data = json_decode(file_get_contents("php://input"), true);

// ✅ Validate JSON
if (!$data) {
    echo json_encode([
        "success" => false,
        "message" => "Invalid JSON input"
    ]);
    exit;
}

// ✅ Prepare SQL
$sql = "INSERT INTO lost_items 
(item_name, category, description, location, lost_date, user_name, email, phone)
VALUES (?, ?, ?, ?, ?, ?, ?, ?)";

$stmt = $conn->prepare($sql);

if (!$stmt) {
    echo json_encode([
        "success" => false,
        "message" => "SQL prepare failed"
    ]);
    exit;
}

// ✅ Bind params
$stmt->bind_param(
    "ssssssss",
    $data["itemName"],
    $data["category"],
    $data["description"],
    $data["location"],
    $data["date"],
    $data["userName"],
    $data["email"],
    $data["phone"]
);

// ❌ Execute failed
if (!$stmt->execute()) {
    echo json_encode([
        "success" => false,
        "message" => "Insert failed"
    ]);
    exit;
}

/* ================= FIX STARTS HERE ================= */

// ✅ START SESSION BEFORE OUTPUT
session_start();

// ✅ STORE LOST ITEM IN SESSION
$_SESSION["lastLostItem"] = [
    "item_name"   => $data["itemName"],
    "description" => $data["description"],
    "location"    => $data["location"],
    "category"    => $data["category"]
];

// ✅ SEND RESPONSE ONCE
echo json_encode([
    "success" => true,
    "message" => "Lost item saved successfully"
]);

exit;