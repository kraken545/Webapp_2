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
                <div class="logo"><img src="./assets/img/Logo.png" alt="Voyage" ></div>
            </a>
            <nav>
                <a href="./public/accommodation.php">Offers</a>
                <a href="./public/about.php">About Us</a>
                <a href="./public/contact.php">Contact</a>
            </nav>
            <div class="nav-icon">
                <img src="./assets/img/icon_color/loop.png" alt="search" width="24" height="24">
            </div>
            <div class="nav-account"><a href="./private/login.php" class="nav-account-link">My Account</a></div>
        </div>
    </header>

    <main>
        <section class="hero">
            <p class="hero-title">Easy and affordable <span>travel</span></p>
            <p class="hero-subtitle">The best travel agency in the Netherlands</p>
        </section>

        <section class="search-panel">
            <div class="search-label">
                <div><img src="assets/img/searchBar_icon/locatie.png" alt="" width="15"> From</div>
                <div><img src="assets/img/searchBar_icon/locatie.png" alt="" width="15"> To</div>
                <div><img src="assets/img/searchBar_icon/calendar.png" alt="" width="18"> departure</div>
                <div><img src="assets/img/searchBar_icon/calendar.png" alt="" width="18"> return</div>
                <div><img src="assets/img/searchBar_icon/people.png" alt="" width="20"> Reizegers</div>
            </div>
            <form action="" method="get" >
           
            <select class="search-field" name="from" id="" placeholder="Destination"> 
                <option value="text"><strong></strong>Destination</strong></option>
                <option value="1">Amsterdam</option>
                <option value="2">India</option>
                <option value="3">Aruba</option>
                <option value="4">USA</option>
                <option value="5">China</option>
            </select>
            <select class="search-field" value="Destination" name="to" id="Choose destination">
                <option value="0"><strong></strong>Destination</strong></option>
                <option value="1"><strong>Aruba</strong></option>
                <option value="2"><strong>Tokyo</strong></option>
                <option value="3"><strong>Changai</strong></option>
                <option value="4"><strong>India</strong></option>
                <option value="5"><strong>Amsterdam</strong></option>

            </select>

            <input type="date" class="search-field"  min="2026-06-01" max="2035-12-31" name="departure-date" id="departure-date" >
            <input type="date" class="search-field"  min="2026-06-01" max="2035-12-31" name="return-date" id="return-date">
            

           <select class="search-field" name="to" id="Choose destination">
                <option value="Argentina"></option>
                <option value="Aruba"></option>
                <option value="Tokyo"></option>
                <option value="India"></option>
                <option value="Amsterdam"></option>

            </select>
           
            
            <button class="search-button"><img src="assets/img/icon_color/loop.png" alt="Search" width="20" height="20"> Search</button>
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
            <div class="promo-card">popular destinations</div>
            <div class="promo-card">current offers</div>
            <div class="promo-card">popular destinations</div>
        </section>
    </main>

    <footer>
        <div class="footer-bar">
            <nav>
                <a href="./public/contact.php">Contact</a>
                <a href="./public/privacy.php">Privacy Policy</a>
            </nav>
            <div class="footer-socials">
                <img src="assets/img/icon_dark/facebook (1).png" alt="Facebook" width="24" height="25">
                <img src="assets/img/icon_dark/instagram.png" alt="Instagram" width="24" height="24">
                <img src="assets/img/icon_dark/twitter.png" alt="Twitter" width="24" height="23">
            </div>
        </div>
    </footer>
</body>
</html>