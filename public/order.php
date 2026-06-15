<?php
include("../dbcalls/conn.php");
include("../dbcalls/offers/order-read.php");

if (empty($result)) {
    header('Location: offers.php');
}
?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="../assets/css/style.css" />
  <title>Voyage - Book your trip</title>
</head>

<body class="font">
  <header>
    <div class="nav-bar">
      <a href="../index.php" class="logo-link">
        <div class="logo"><img src="../assets/img/Logo.png" alt="Voyage"></div>
      </a>
      <nav>
        <a href="./offers.php">Offers</a>
        <a href="./about.php">About Us</a>
        <a href="./contact.php">Contact</a>
      </nav>
      <div class="nav-account"><a href="../private/login.php" class="nav-account-link">My Account</a></div>
    </div>
  </header>

  <main>

    <!-- Reisdetails -->
<section class="offer-section order-details-section">
  <div>
    <?php
    if (!empty($result['image'])) {
      $imageSrc = '..' . $result['image'];
    } else {
      $imageSrc = '../assets/img/placeholder.png';
    }
    ?>
    <img src="<?php echo $imageSrc; ?>" alt="Accommodation image" width="200" height="200" />
  </div>
  <div class="offer-beschrijving">
    <div class="order-title"><?php echo $result['name']; ?></div>
    <div><?php echo $result['city'] . ' - ' . $result['country']; ?></div>
    <div><?php echo $result['description']; ?></div>
    <div><?php echo $result['type']; ?></div>
    <div><?php echo $result['duration']; ?> days</div>
    <div><?php echo date('D d M Y', strtotime($result['startdate'])); ?></div>
    <div>
      <?php
      if (!empty($result['departure'])) {
        echo 'Vlucht vanaf ' . $result['departure'];
      } else {
        echo 'Geen vlucht';
      }
      ?>
    </div>
  </div>
  <div class="offer-prijs">
    <div class="order-price-label">pp. vanaf*</div>
    <div class="order-price">€ <?php echo number_format((float) $result['price'], 0, ',', '.'); ?>-</div>
  </div>
</section>

    <!-- Boekingsformulier -->
    <section class="form-container">
      <h2 class="order-form-title">Book your trip</h2>

      <div class="form-group">
        <label for="people">Number of persons</label>
        <input type="number" id="people" name="people" min="1" max="10" value="1" />
      </div>

      <button type="button" class="form-button">Book now</button>
    </section>

  </main>

  <footer>
    <div class="footer-bar">
      <nav>
        <a href="contact.php">Contact</a>
        <a href="privacy.php">Privacy Policy</a>
      </nav>
      <div class="footer-socials">
        <a href="https://www.facebook.com/" target="_blank"><img src="../assets/img/social_icon_dark/facebook (1).png" alt="Facebook" width="24" height="25" /></a>
        <a href="http://instagram.com/" target="_blank"><img src="../assets/img/social_icon_dark/instagram.png" alt="Instagram" width="24" height="24" /></a>
        <a href="http://x.com/" target="_blank"><img src="../assets/img/social_icon_dark/twitter.png" alt="Twitter" width="24" height="23" /></a>
      </div>
    </div>
  </footer>

  <script src="../assets/js/app.js"></script>
</body>

</html>