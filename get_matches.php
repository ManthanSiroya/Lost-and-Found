<?php
header("Content-Type: application/json");
include "config.php";

// ✅ SQL query
$sql = "
SELECT 
    l.item_name AS lostItem,
    l.category,
    l.location,
    l.phone AS lostPhone,
    f.item_name AS foundItem,
    f.phone AS foundPhone
FROM lost_items l
JOIN found_items f
ON l.category = f.category
AND LOWER(l.location) = LOWER(f.location)
";

// ✅ Execute query
$result = $conn->query($sql);

// ❌ Query failed
if (!$result) {
    echo json_encode([
        "success" => false,
        "message" => "Query failed",
        "error" => $conn->error
    ]);
    exit;
}

$matches = [];

// ✅ Fetch results
while ($row = $result->fetch_assoc()) {
    $matches[] = $row;
}

// ✅ Always return JSON array
echo json_encode($matches);