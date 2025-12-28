<?php
error_reporting(0);

header("Content-Type: application/json");
include "config.php";

$data = json_decode(file_get_contents("php://input"), true);

// ✅ Validate JSON input
if (!$data) {
    echo json_encode([
        "success" => false,
        "message" => "Invalid JSON input"
    ]);
    exit;
}

// ✅ Prepare SQL
$sql = "INSERT INTO found_items
(item_name, category, description, location, found_date, user_name, email, phone)
VALUES (?, ?, ?, ?, ?, ?, ?, ?)";

$stmt = $conn->prepare($sql);

// ❌ SQL prepare failed
if (!$stmt) {
    echo json_encode([
        "success" => false,
        "message" => "SQL prepare failed",
        "error" => $conn->error
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
        "message" => "Insert failed",
        "error" => $stmt->error
    ]);
    exit;
}

// ✅ Success response
echo json_encode([
    "success" => true,
    "message" => "Found item saved successfully"
]);