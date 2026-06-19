<?php

session_start();
include("../dbcalls/conn.php");
include("../dbcalls/offers/order-read.php");


if (empty($result)) {
  header('Location: offers.php');
  exit;
}

if (!isset($_SESSION['user_logged_in']) || $_SESSION['user_logged_in'] != true) {
  header('Location: /private/login.php');
  exit;
}

$offers = $result;

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
        if (!empty($offers['image'])) {
          $imageSrc = '..' . $offers['image'];
        } else {
          $imageSrc = '../assets/img/placeholder.png';
        }
        ?>
        <img src="<?php echo $imageSrc; ?>" alt="Accommodation image" width="200" height="200" />
      </div>
      <form action="../dbcalls/bookings/booking_create.php" method="POST">
        <div class="offer-beschrijving">
          <div class="order-title"><?php echo $offers['name']; ?></div>
          <div><?php echo $offers['city'] . ' - ' . $offers['country']; ?></div>
          <div><?php echo $offers['description']; ?></div>
          <div><?php echo $offers['type']; ?></div>
          <div><?php echo $offers['duration']; ?> days</div>
          <div><?php echo date('D d M Y', strtotime($offers['startdate'])); ?></div>
          <div>
            <?php
            if (!empty($offers['departure'])) {
              echo 'Vlucht vanaf ' . $offers['departure'];
            } else {
              echo 'Geen vlucht';
            }
            ?>
          </div>
        </div>
        <div class="offer-prijs">
          <div class="order-price-label">pp. vanaf*</div>
          <div class="order-price">€ <?php echo number_format((float) $offers['price'], 0, ',', '.'); ?></div>
        </div>
        <div class="form-container-booking">
            <label class="form-group" for="persons">Number of persons</label>
            <input class="form-group" type="number" name="persons" min="1" max="<?php echo $offers['maxpersons']; ?>" required />
            <input type="hidden" name="price" value="<?php echo $offers['price']; ?>">
            <input type="hidden" name="tripid" value="<?php echo $offers['tripid']; ?>">
            <button type="submit" class="form-button">Book now</button>
        </div>
      </form>
    </section>

  </main>

  <footer>
    <div class="footer-bar">
      <nav>
        <a href="contact.php">Contact</a>
        <a href="privacy.php">Privacy Policy</a>
      </nav>
      <div class="footer-socials">
        <a href="https://www.facebook.com/" target="_blank"><img src="../assets/img/social_icon_dark/facebook (1).png"
            alt="Facebook" width="24" height="25" /></a>
        <a href="http://instagram.com/" target="_blank"><img src="../assets/img/social_icon_dark/instagram.png"
            alt="Instagram" width="24" height="24" /></a>
        <a href="http://x.com/" target="_blank"><img src="../assets/img/social_icon_dark/twitter.png" alt="Twitter"
            width="24" height="23" /></a>
      </div>
    </div>
  </footer>

  <script src="../assets/js/app.js"></script>
</body>

</html>