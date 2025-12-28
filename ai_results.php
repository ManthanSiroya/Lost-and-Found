<?php
session_start();
error_reporting(E_ALL);
ini_set('display_errors', 1);


if (!isset($_SESSION["lastLostItem"])) {
    echo "<p style='text-align:center'>No lost item found. Please submit a lost item first.</p>";
    exit;
}

$lostItem = $_SESSION["lastLostItem"];
?>



<!DOCTYPE html>
<html>
<head>
  <title>AI Match Results</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>

<h2 style="text-align:center">🔍 AI Matching Results</h2>
<div id="results" class="home-card-grid"></div>

<script>
fetch("ai_match.php", {
    method: "POST",
    headers: { "Content-Type": "application/json" },
    body: JSON.stringify({
        lostItem: <?= json_encode($lostItem) ?>
    })
})
.then(res => res.json())
.then(data => {
    const container = document.getElementById("results");
    container.innerHTML = "";

    if (!Array.isArray(data) || data.length === 0) {
        container.innerHTML = "<p>No AI matches found</p>";
        return;
    }

    data.forEach(match => {
        container.innerHTML += `
        <div class="home-card found-card">
            <h3>${match.found_item.item_name}</h3>
            <p><b>Match:</b> ${match.percentage}%</p>
            <p><b>Location:</b> ${match.found_item.location}</p>
            <p><b>Contact:</b> ${match.found_item.phone}</p>
        </div>`;
    });
});
</script>


</body>
</html>
