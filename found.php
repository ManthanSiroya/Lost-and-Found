<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <title>Report Found Item</title>
  <link rel="stylesheet" href="style.css">
</head>

<body class="found-page">

  <div class="container">

    <a href="index.php" class="back-link">← Back to Home</a>


   <h1 class="page-title found-title">
  🎉 Report Found Item
</h1>
<p class="page-subtitle found-subtitle">
  Help reunite this item with its owner
</p>



    <div class="form-card">

      <!-- ITEM DETAILS -->
      <div class="section-title">
        <span>①</span>
        <span>Item Details</span>
      </div>

      <div class="form-group">
        <label>What did you find? *</label>
        <input type="text"id ="foundItemName"placeholder="e.g., Black Leather Wallet, Keys etc.">
      </div>

      <label>Category *</label>

      <div class="category-grid">
        <input type="radio" name="category" id="f-electronics" value="Electronics"hidden>
        <label for="f-electronics" class="category-card">📱 Electronics</label>

        <input type="radio" name="category" id="f-wallets" value="Wallets & Purses" hidden>
        <label for="f-wallets" class="category-card">👛 Wallets & Purses</label>

        <input type="radio" name="category" id="f-bags" value="Bags & Backpacks"hidden>
        <label for="f-bags" class="category-card">🎒 Bags & Backpacks</label>

        <input type="radio" name="category" id="f-clothing" value=" Clothing"hidden>
        <label for="f-clothing" class="category-card">👕 Clothing</label>

        <input type="radio" name="category" id="f-keys" value="Keys" hidden>
        <label for="f-keys" class="category-card">🔑 Keys</label>

        <input type="radio" name="category" id="f-jewelry" value="Jewellery"  hidden>
        <label for="f-jewelry" class="category-card">💍 Jewellery</label>

        <input type="radio" name="category" id="f-books" value="Books & Stationery" hidden>
        <label for="f-books" class="category-card">📚 Books & Stationery</label>

        <input type="radio" name="category" id="f-other" value="Other" hidden>
        <label for="f-other" class="category-card">📦 Other</label>
      </div>

      <div class="form-group">
        <label>Detailed Description *</label>
        <textarea id="foundDescription" placeholder="Include brand, color, size, unique features, damage, etc."></textarea>
      </div>

      <div class="row">
        <div class="form-group">
          <label>Where did you find it? *</label>
          <input type="text"id="foundLocation" placeholder="e.g., Campus Gym, Near Entrance">
        </div>

        <div class="form-group">
          <label>When did you find it? *</label>
          <input type="date" id="foundDate">
        </div>
      </div>

      <!-- CONTACT INFO -->
      <div class="section-title">
        <span>②</span>
        <span>Your Contact Information</span>
      </div>

      <div class="form-group">
        <label>Full Name *</label>
        <input type="text" id="foundUserName" placeholder="Enter your name">
      </div>

      <div class="row">
        <div class="form-group">
          <label>Email Address *</label>
          <input type="email"id="foundEmail" placeholder="Enter your email">
        </div>

        <div class="form-group">
          <label>Phone Number *</label>
          <input type="tel" id="foundPhone" placeholder="+91">
        </div>
      </div>

      <div class="info-box">
        🔓 The item owner will be able to see your contact information to claim the item.
      </div>

      <div class="button-row">
        <a href="index.php" class="btn btn-secondary">Cancel</a>
        <button type="button" class="btn btn-primary" onclick="submitFoundItem()">
          Submit Found Item
        </button>
      </div>


    </div>
  </div>
<script src="script.js"></script>

</body>

</html>