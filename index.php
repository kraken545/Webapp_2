<?php
include("dbcalls/conn.php");
include("dbcalls/locations/read.php");
?>
<!DOCTYPE html>
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
                <div class="logo"><img src="./assets/img/Logo.png" alt="Voyage"></div>
            </a>
            <nav>
                <a href="./public/offers.php">Offers</a>
                <a href="./public/about.php">About Us</a>
                <a href="./public/contact.php">Contact</a>
            </nav>

            <div class="nav-account"><a href="./private/login.php" class="nav-account-link">My Account</a></div>
        </div>
    </header>

    <main>
        <section class="hero">
            <div>
                <p class="hero-title">
                    <span class="hero-title-main">Easy and affordable</span>
                    <span class="hero-title-accent">travel</span>
                </p>
            </div>
            <div>
                <p class="hero-subtitle">The best travel agency in the Netherlands.</p>
            </div>
        </section>

        <section class="search-panel">
            <div class="search-label">
                <div> </div>
                <div class="search-label-border"><img src="assets/img/searchBar_icon/icons_darkGreen/location_green.png"
                        alt="" width="15"> To</div>
                <div class="search-label-border"><img src="assets/img/searchBar_icon/icons_darkGreen/calendar_green.png"
                        alt="" width="18"> Departure</div>
                <div class="search-label-border"><img src="assets/img/searchBar_icon/icons_darkGreen/calendar_green.png"
                        alt="" width="18"> Days</div>
                <div class="search-label-border"><img src="assets/img/searchBar_icon/icons_darkGreen/people_green.png"
                        alt="" width="18"> People</div>
            </div>
            <form action="./public/offers.php" method="get">

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

                <input type="date" class="search-field" min="2026-06-01" max="2035-12-31" name="departure-date"
                    id="departure-date">


                <input type="number" class="search-field" name="days" id="add-days" min="1" max="30" placeholder="Days">


                <input type="number" class="search-field" name="people" id="total-people-input" min="1" max="10"
                    value="1">



                <button type="submit" class="search-button"><img
                        src="assets/img/searchBar_icon/icons_cyan/loop_cyan.png" alt="Search" width="20" height="20">
                    Search</button>
            </form>

        </section>

        <section class="testimonial">
            <h2 class="testimonial-title">What Our Customers Say</h2>
            <div class="carousel-controls">
                <button type="button" class="carousel-btn carousel-btn-left" onclick="scrollCarouselLeft()">‹</button>
                <div class="reviews-carousel" id="reviewsCarousel">
                    <div class="review-card">
                        <p class="quote">Everything was easy to find and clearly presented, including the extra options.
                        </p>
                        <p class="review-author">— Paul V</p>
                        <div class="testimonial-meta">
                            <span class="truststars">★★★★★</span>
                            <span>Verified</span>
                        </div>
                    </div>
                    <div class="review-card">
                        <p class="quote">Amazing experience from booking to landing. Highly recommended!</p>
                        <p class="review-author">— Sarah M</p>
                        <div class="testimonial-meta">
                            <span class="truststars">★★★★★</span>
                            <span>Verified</span>
                        </div>
                    </div>
                    <div class="review-card">
                        <p class="quote">Best travel agency I've ever used. Great prices and support.</p>
                        <p class="review-author">— John D</p>
                        <div class="testimonial-meta">
                            <span class="truststars">★★★★★</span>
                            <span>Verified</span>
                        </div>
                    </div>
                    <div class="review-card">
                        <p class="quote">Best travel agency I've ever used. Great prices and support.</p>
                        <p class="review-author">— John D</p>
                        <div class="testimonial-meta">
                            <span class="truststars">★★★★★</span>
                            <span>Verified</span>
                        </div>
                    </div>
                    <div class="review-card">
                        <p class="quote">Best travel agency I've ever used. Great prices and support.</p>
                        <p class="review-author">— John D</p>
                        <div class="testimonial-meta">
                            <span class="truststars">★★★★★</span>
                            <span>Verified</span>
                        </div>
                    </div>

                    <div class="review-card">
                        <p class="quote">Best travel agency I've ever used. Great prices and support.</p>
                        <p class="review-author">— John D</p>
                        <div class="testimonial-meta">
                            <span class="truststars">★★★★★</span>
                            <span>Verified</span>
                        </div>
                    </div>
                    <div class="review-card">
                        <p class="quote">Best travel agency I've ever used. Great prices and support.</p>
                        <p class="review-author">— John D</p>
                        <div class="testimonial-meta">
                            <span class="truststars">★★★★★</span>
                            <span>Verified</span>
                        </div>
                    </div>
                    <div class="review-card">
                        <p class="quote">Best travel agency I've ever used. Great prices and support.</p>
                        <p class="review-author">— John D</p>
                        <div class="testimonial-meta">
                            <span class="truststars">★★★★★</span>
                            <span>Verified</span>
                        </div>
                    </div>
                </div>
                <button type="button" class="carousel-btn carousel-btn-right" onclick="scrollCarouselRight()">›</button>
        </section>

        <section class="promo-row">
            <a href="./public/offers.php" class="promo-card">popular destinations <img
                    src="assets/img/test_img/infinity-pool-with-views.jpg" alt=""></a>
            <a href="./public/offers.php" class="promo-card">current offers <img
                    src="assets/img/test_img/infinity-pool-with-views.jpg" alt="">
            </a>
            <a href="./public/offers.php" class=" promo-card">popular destinations <img
                    src="assets/img/test_img/infinity-pool-with-views.jpg" alt=""></a>
        </section>

    </main>

    <footer>
        <div class="footer-bar">
            <nav>
                <a href="./public/contact.php">Contact</a>
                <a href="./public/privacy.php">Privacy Policy</a>
            </nav>
            <div class="footer-socials">
                <a href="https://www.facebook.com/" target="_blank"><img
                        src="assets/img/social_icon_dark/facebook (1).png" alt="Facebook" width="24" height="25"></a>
                <a href="http://instagram.com/" target="_blank"><img src="assets/img/social_icon_dark/instagram.png"
                        alt="Instagram" width="24" height="24"></a>
                <a href="http://x.com/" target="_blank"><img src="assets/img/social_icon_dark/twitter.png" alt="Twitter"
                        width="24" height="23"></a>
            </div>
        </div>
    </footer>
</body>
<script src="./assets/js/app.js"></script>

</html>