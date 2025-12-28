<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Browse All Items</title>
  <link rel="stylesheet" href="style.css">
</head>

<body class="home-page">

  <!-- HEADER -->
  <header class="home-header">
    <div class="home-brand">
      <div class="home-logo">📦</div>
      <div>
        <h1>College Lost & Found</h1>
        <p>Browse All Items</p>
      </div>
    </div>

    <a href="index.php" class="browse-btn">← Back to Home</a>
  </header>

  <hr class="home-divider">

  <!-- CONTENT -->
  <section class="home-hero">
    <span class="ai-pill">📂 All Reported Items</span>

    <h2>Lost & Found Items</h2>

    <p>
      This page displays all lost and found items reported by users.
      Items will be automatically matched using AI in future updates.
    </p>
  </section>

  <!-- ITEMS PLACEHOLDER -->
  <section class="home-card-grid" id="itemsContainer">

    <div class="home-card lost-card">
      <div class="home-icon lost-icon">🔍</div>
      <h3>Lost Item</h3>
      <p><strong>Item:</strong> Black Wallet</p>
      <p><strong>Location:</strong> Main Library</p>
      <p><strong>Status:</strong> Waiting for match</p>
    </div>

    <div class="home-card found-card">
      <div class="home-icon found-icon">📦</div>
      <h3>Found Item</h3>
      <p><strong>Item:</strong> Leather Wallet</p>
      <p><strong>Location:</strong> Main Library</p>
      <p><strong>Status:</strong> Possible match found</p>
    </div>

  </section>
  <script src="script.js"></script>
<script>
  loadMatches();
</script>

</body>
</html>