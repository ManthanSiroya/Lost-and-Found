<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
header("Content-Type: application/json");
include "config.php";

// ---------- READ INPUT ----------
$input = json_decode(file_get_contents("php://input"), true);

if (!isset($input["lostItem"])) {
    echo json_encode(["error" => "lostItem not received"]);
    exit;
}

$lostItem = $input["lostItem"];

// ---------- FETCH FOUND ITEMS ----------
$result = $conn->query("SELECT * FROM found_items");
$foundItems = [];

while ($row = $result->fetch_assoc()) {
    $foundItems[] = $row;
}

$matches = [];

// ---------- MATCHING LOGIC ----------
foreach ($foundItems as $found) {

    // ✅ NORMALIZE category (THIS WAS THE MAIN BUG)
    $lostCategory  = trim(strtolower($lostItem["category"]));
    $foundCategory = trim(strtolower($found["category"]));

    if ($lostCategory !== $foundCategory) {
        continue;
    }

    // text similarity
    similar_text(
        strtolower($lostItem["description"]),
        strtolower($found["description"]),
        $percent
    );

    // ✅ NORMALIZE location
    if (
        trim(strtolower($lostItem["location"])) ===
        trim(strtolower($found["location"]))
    ) {
        $percent += 20;
    }

    if ($percent > 100) $percent = 100;

    // VERY LOW threshold for testing
    if ($percent >= 10) {
        $matches[] = [
            "found_item" => [
                "item_name" => $found["item_name"],
                "description" => $found["description"],
                "location" => $found["location"],
                "phone" => $found["phone"]
            ],
            "percentage" => round($percent)
        ];
    }
}

// ---------- OUTPUT ----------
echo json_encode($matches);
exit;
