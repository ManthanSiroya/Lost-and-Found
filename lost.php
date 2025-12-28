<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <title>Report Lost Item</title>
  <link rel="stylesheet" href="style.css">
</head>

<body class="lost-page">

  <div class="container">

    <a href="index.php" class="back-link">← Back to Home</a>


  
     <h1 class="page-title lost-title">
  🚨 Report Lost Item
</h1>
<p class="page-subtitle lost-subtitle">
  Provide details so we can help you find it
</p>


    <div class="form-card">

      <!-- ITEM DETAILS -->
      <div class="section-title">
        <span>①</span>
        <span>Item Details</span>
      </div>

      <div class="form-group">
        <label>What did you lose? *</label>
       <input type="text" id="lostItemName" placeholder="e.g., Black Leather Wallet, Keys etc.">

      </div>

      <label>Category *</label>

      <div class="category-grid">
        <input type="radio" name="category" id="l-electronics" value="Electronics" hidden>
<label for="l-electronics" class="category-card">📱 Electronics</label>

        <input type="radio" name="category" id="l-wallets" value="Wallets & Purses"hidden>
        <label for="l-wallets" class="category-card">👜 Wallets & Purses</label>

        <input type="radio" name="category" id="l-bags" value="Bags & Backpacks" hidden>
        <label for="l-bags" class="category-card">🎒 Bags & Backpacks</label>

        <input type="radio" name="category" id="l-clothing" value="Clothing" hidden>
        <label for="l-clothing" class="category-card">👕 Clothing</label>

        <input type="radio" name="category" id="l-keys" value="Keys" hidden>
        <label for="l-keys" class="category-card">🔑 Keys</label>

        <input type="radio" name="category" id="l-jewelry" value="Jewellery" hidden>
        <label for="l-jewelry" class="category-card">💍 Jewellery</label>

        <input type="radio" name="category" id="l-books" value="Books & Stationery" hidden>
        <label for="l-books" class="category-card">📚 Books & Stationery</label>

        <input type="radio" name="category" id="l-other" value="Other" hidden>
        <label for="l-other" class="category-card">📦 Other</label>
      </div>

      <div class="form-group">
        <label>Detailed Description *</label>
        <textarea id="lostDescription"
        placeholder="Include brand, color, size, unique features, contents, etc."></textarea>
      </div>

      <div class="row">
        <div class="form-group">
          <label>Where did you lose it? *</label>
          <input type="text" id= "lostLocation"placeholder="e.g., Main Library, 2nd Floor">
        </div>

        <div class="form-group">
          <label>When did you lose it? *</label>
          <input type="date" id="lostDate">
        </div>
      </div>

      <!-- CONTACT INFO -->
      <div class="section-title">
        <span>②</span>
        <span>Your Contact Information</span>
      </div>

      <div class="form-group">
        <label>Full Name *</label>
        <input type="text" id="lostUserName" placeholder="Enter your name">
      </div>

      <div class="row">
        <div class="form-group">
          <label>Email Address *</label>
          <input type="email" id="lostEmail" placeholder="Enter your email">
        </div>

        <div class="form-group">
          <label>Phone Number *</label>
          <input type="tel" id="lostPhone" placeholder="+91 ">
        </div>
      </div>

      <div class="info-box">
        🔒 Your contact information will only be visible to people who found matching items.
      </div>

      <div class="button-row">
        <a href="index.php" class="btn btn-secondary">Cancel</a>
        <button type="button" class="btn btn-primary" onclick="submitLostItem()">
         submit lost item
        </button>
      </div>


    </div>
  </div>
<script src="script.js?v=2"></script>


</body>

</html>