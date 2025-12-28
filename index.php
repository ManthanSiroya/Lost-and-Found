<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>College Lost & Found</title>
  <link rel="stylesheet" href="style.css">
</head>

<body class="home-page">

  <!-- HEADER -->
  <header class="home-header">
    <div class="home-brand">
      <div class="home-logo">📦</div>
      <div>
        <h1>College Lost & Found</h1>
        <p>AI-Powered Item Matching</p>
      </div>
    </div>

    <a href="browse.php" class="browse-btn">🔍 Browse All Items</a>

  </header>

  <hr class="home-divider">

  <!-- HERO -->
  <section class="home-hero">
    <span class="ai-pill">✨ Powered by AI Matching</span>

    <h2>Lost Something? Found Something?</h2>

    <p>
      Our AI-powered platform automatically matches lost and found items
      based on descriptions, making it easier than ever to reunite items
      with their owners.
    </p>
  </section>

  <!-- MAIN CARDS -->
  <section class="home-card-grid">

  <!-- LOST CARD (FULLY CLICKABLE) -->
  <a href="lost.php" class="card-link">
    <div class="home-card lost-card">
      <div class="home-icon lost-icon">🔍</div>

      <h3>I Lost an Item</h3>

      <p>
        Report a lost item and we'll help you find it.
        Our AI will automatically search for matching found items.
      </p>

      <span class="lost-link">
        Report Lost Item <span>›</span>
      </span>
    </div>
  </a>

  <!-- FOUND CARD (FULLY CLICKABLE) -->
  <a href="found.php" class="card-link">
    <div class="home-card found-card">
      <div class="home-icon found-icon">📦</div>

      <h3>I Found an Item</h3>

      <p>
        Help someone find their lost item.
        Post what you found and our AI will match it with potential owners.
      </p>

      <span class="found-link">
        Report Found Item <span>›</span>
      </span>
    </div>
  </a>

</section>

<script src="script.js"></script>
</body>
</html>