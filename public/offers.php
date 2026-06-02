<?php
include("../dbcalls/conn.php");
include("../dbcalls/offers/read.php");
$offers = $result;
include("../dbcalls/locations/read.php");
$locations = $result;
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="../assets/css/style.css" />
    <title>Voyage - Accommodations</title>
  </head>
  <body class="font">
    <header>
        <div class="nav-bar">
             <a href="../index.php" class="logo-link">
                <div class="logo"><img src="../assets/img/Logo.png" alt="Voyage" ></div>
            </a>
            <nav>
                <a href="./offers.php">Offers</a>
                <a href="./about.php">About Us</a>
                <a href="./contact.php">Contact</a>
            </nav>
          
            <div class="nav-account"><a href="../private/login.php" class="nav-account-link">My Account</a></div>
        </div>
      </div>
    </header>

    <main class="main-content-offers">
      <section class="search-section-container">
        <div class="search-section">
          <form class="offers-search-form">
            <div class="travellers-field">
                    <button type="button" class="offers-search-cards" id="add-aantal" onclick="openForm()"><img id="people-img" src="assets/img/searchBar_icon/icons_darkGreen/people_green.png" alt="" width="20">Travelers</button>

                    <div class="form-popup" id="myForm" aria-hidden="true">
                        <div class="form-container small">
                            <label><b>Number of Adults: </b></label>
                            <div class="counter-controls">
                                <button type="button" id="decrement-people" onclick="decrement()" class="counter-btn">−</button>
                                <span id="total-people">1</span>
                                <button type="button" id="increment-people" onclick="increment()" class="counter-btn">+</button>
                           
                            </div>
                           
                            <div class="form-actions">
                                <button type="button" onclick="apply()" class="btn-apply">Apply</button>
                                <button type="button" onclick="closeForm()" class="btn-close">Close</button>
                            </div>
                        </div>
                    </div>
                    <!-- // =========== als de user op apply clickt word de data bewaard en de form gaat dicht  ========= -->
                    <input type="hidden" name="people" id="total-people-input" value="1">
                </div>
            <div class="offers-search-cards">
                <div>Departure Date</div>
              <input type="date" name="departure-date"/>
            </div>
            <div class="offers-search-cards-date-departure">
              <div class="search-label-date">
                <div>start date</div>
                <div>end date</div>
              </div>
              <div class="search-label-date">
                <input type="date" name="start-date" />
                <input type="date" name="end-date" />
              </div>
            </div>
            <select class="offers-search-cards" name="from" id="" placeholder="Destination">
                    <option value="0">
                        <div class="choose-balk"><strong>Destination</strong></div>
                    </option>
                <?php foreach ($locations as $locaties) { ?>
                        <option value="<?php echo $locaties['locationid'] ?>">
                            <?php echo $locaties['country']; ?>
                        </option>
                    <?php } ?>
                    
            </select>
            <select class="offers-search-cards" name="airport" id="" placeholder="Airport">
                    <option value="0">
                    <div class="choose-balk"><strong>Airport</strong></div>
                    </option>
                    <option value="1">Amsterdam Schiphol</option>
                    <option value="2">Rotterdam The Hague</option>
                    <option value="3">Eindhoven</option>
                    <option value="4">Maastricht Aachen</option>
                    <option value="5">Groningen Eelde</option>
            </select>

            <select class="offers-search-cards" name="accommodation-type" id="" placeholder="Accommodation Type">
                    <option value="0">
                    <div class="choose-balk"><strong>Accommodation Type</strong></div>
                    </option>
                    <option value="1">Hotel</option>
                    <option value="2">Apartment</option>
                    <option value="3">Hostel</option>
                    <option value="4">Resort</option>
                    <option value="5">Villa</option>
            </select>
          
            <button type="submit" class="offer-search-button">Search</button>
          </form>
        </div>
      </section>
      <section class="offers-card-section">
        <?php if (!empty($offers)) : ?>
          <?php foreach ($offers as $offer) { ?>
            <div class="offer-section">
              <div>
                <?php
                if (!empty($offer['image'])) {
                    $imageSrc = '..' . $offer['image'];
                } else {
                    $imageSrc = '../assets/img/placeholder.png';
                }
                ?>
                <img
                  src="<?php echo $imageSrc; ?>"
                  alt="Accommodation image"
                  width="100"
                  height="100"
                />
              </div>
              <div class="offer-beschrijving">
                <div><?php echo $offer['name']; ?></div>
                <div>
                  <?php echo $offer['city'] . ' - ' . $offer['country']; ?>
                </div>
                <div><?php echo $offer['description']; ?></div>
                <div><?php echo $offer['type']; ?></div>
                <div><?php echo $offer['duration']; ?> days</div>
              </div>
              <div class="offer-prijs">
                <div>pp. vanaf*</div>
                <div>€ <?php echo number_format((float)$offer['price'], 0, ',', '.'); ?>-</div>
                <div><?php echo date('D d M', strtotime($offer['startdate'])); ?></div>
                <div>
                  <?php
                  if (!empty($offer['departure'])) {
                      echo ('Vanaf ' . $offer['departure']);
                  }
                  else{
                    echo('geen vlucht');
                  }
                  ?>
                </div>
                <div><?php echo $offer['type']; ?></div>
                <button type="button">Bekijk Vakantie</button>
              </div>
            </div>
          <?php } ?>
        <?php else : ?>
          <p>No offers found.</p>
        <?php endif; ?>
      </section>
    </main>
    <footer>
      <div class="footer-bar">
        <nav>
          <a href="contact.php">Contact</a>
          <a href="privacy.php">Privacy Policy</a>
        </nav>
        <div class="footer-socials">
          <a href="https://www.facebook.com/" target="_blank"
            ><img
              src="../assets/img/social_icon_dark/facebook (1).png"
              alt="Facebook"
              width="24"
              height="25"
          /></a>
          <a href="http://instagram.com/" target="_blank"
            ><img
              src="../assets/img/social_icon_dark/instagram.png"
              alt="Instagram"
              width="24"
              height="24"
          /></a>
          <a href="http://x.com/" target="_blank"
            ><img
              src="../assets/img/social_icon_dark/twitter.png"
              alt="Twitter"
              width="24"
              height="23"
          /></a>
        </div>
      </div>
    </footer>
  </body>
  <script src="../assets/js/app.js"></script>
</html>
