<?php
include("dbcalls/conn.php");
include("dbcalls/locations/read.php");
?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./assets/css/style.css">
    <title>Voyage</title>
</head>
<body class="font">
    <header>
        <div class="nav-bar">
            <a href="./index.php" class="logo-link">
                <div class="logo"><img src="./assets/img/Logo.png" alt="Voyage" ></div>
            </a>
            <nav>
                <a href="./public/accommodation.php">Offers</a>
                <a href="./public/about.php">About Us</a>
                <a href="./public/contact.php">Contact</a>
            </nav>
          
            <div class="nav-account"><a href="./private/login.php" class="nav-account-link">My Account</a></div>
        </div>
    </header>

    <main>
        <section class="hero">
            <p class="hero-title">Easy and affordable <span>travel</span></p>
            <p class="hero-subtitle">The best travel agency in the Netherlands.</p>
        </section>

        <section class="search-panel">
            <div class="search-label">
                <div>          </div>
                <div><img src="assets/img/searchBar_icon/icons_darkGreen/location_green.png" alt="" width="15"> To</div>
                <div><img src="assets/img/searchBar_icon/icons_darkGreen/calendar_green.png" alt="" width="18"> Departure</div>
                <div><img src="assets/img/searchBar_icon/icons_darkGreen/calendar_green.png" alt="" width="18"> Return</div>
                <!-- <div><img src="assets/img/searchBar_icon/icons_darkGreen/people_green.png" alt="" width="20"> Travelers</div> -->
            </div>
            <form action="" method="post">
           
            <!-- <select class="search-field" name="from" id="" > 
                <option value="0"><div class="choose-balk"><strong>Destination</strong></div></option>
                <option value="1">Amsterdam</option>
                <option value="2">India</option>
                <option value="3">Aruba</option>
                <option value="4">USA</option>
                <option value="5">China</option>
            </select> -->
           <select class="search-field" name="from" id="" placeholder="Destination">
                    <option value="0">
                        <div class="choose-balk"><strong>Destination</strong></div>
                    </option>
                    <?php foreach ($result as $locaties) { ?>
                        <option value="<?php echo $locaties['locationid'] ?>">
                            <?php echo $locaties['country']; ?>
                        </option>
                    <?php } ?>
                </select>

            <input type="date" class="search-field"  min="2026-06-01" max="2035-12-31" name="departure-date" id="departure-date" >
            <input type="date" class="search-field"  min="2026-06-01" max="2035-12-31" name="return-date" id="return-date">
            
          
           
                <div class="travellers-field">
                    <button type="button" class="search-field open-button" id="add-aantal" onclick="openForm()"><img id="people-img" src="assets/img/searchBar_icon/icons_darkGreen/people_green.png" alt="" width="20">Travelers</button>

                    <div class="form-popup" id="myForm" aria-hidden="true">
                        <div class="form-container small">
                            <label><b>Number of Adults: </b></label>
                            <div class="counter-controls">
                                <button type="button" id="decrement-people" onclick="decrement()" class="counter-btn">−</button>
                                <span id="total-people">1</span>
                                <button type="button" id="increment-people" onclick="increment()" class="counter-btn">+</button>
                                    
                                <!-- =========== idee voor Grote groepen. popup dat laat weten aan de user dat als hun groep groter dan 10 mensen kunnen ze contact met ons nemen voor een speciale prijs ==================== -->
                               
                                <!-- <div class="form-popup" id="big-group" aria-hidden="true">
                                        <div id="big-group-display">Contact us for special price</div>
                                        <button type="button" onclick="contactUs()" class="btn-contact">Contact Us</button>
                                        <button type="button" onclick="closeBigGroup()" class="btn-close">Close</button>
                                    </div> -->
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

            
            <button type="submit" class="search-button"><img src="assets/img/searchBar_icon/icons_darkGreen/loop.png" alt="Search" width="20" height="20"> Search</button>
            </form>
            
        </section>

        <section class="testimonial">
            <div class="testimonial-card">
                <p class="quote">Everything was easy to find and clearly presented, including the extra options.</p>
                <p class="review-author">— Paul V</p>
                <div class="testimonial-meta">
                    <span class="truststars">★★★★★</span>
                    <span>Verified</span>
                </div>
            </div>
            <div class="testimonial-footer">TrustScore 4.5</div>
        </section>

        <section class="promo-row">
            <div class="promo-card">popular destinations <img src="assets/img/test_img/infinity-pool-with-views.jpg" alt="" ></div>
            <div class="promo-card">current offers <img src="assets/img/test_img/infinity-pool-with-views.jpg" alt="" ></div>
            <div class="promo-card">popular destinations <img src="assets/img/test_img/infinity-pool-with-views.jpg" alt="" ></div>
        </section>
    </main>

    <footer>
        <div class="footer-bar">
            <nav>
                <a href="./public/contact.php">Contact</a>
                <a href="./public/privacy.php">Privacy Policy</a>
            </nav>
            <div class="footer-socials">
                <a href="https://www.facebook.com/" target="_blank"><img src="assets/img/social_icon_dark/facebook (1).png" alt="Facebook" width="24" height="25"></a>
                <a href="http://instagram.com/" target="_blank"><img src="assets/img/social_icon_dark/instagram.png" alt="Instagram" width="24" height="24"></a>
                <a href="http://x.com/" target="_blank"><img src="assets/img/social_icon_dark/twitter.png" alt="Twitter" width="24" height="23"></a>
            </div>
        </div>
    </footer>
</body>
    <script src="./assets/js/app.js"></script>
</html>