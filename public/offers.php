<?php
include("dbcalls/conn.php");
include("dbcalls/offers/read.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../assets/css/style.css">
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
    </header>

    <main>
       <section>
        <div class="offer-section">
            <div>
               <img src="../assets/img/test_img/1246280_16061017110043391702.png" alt="" width="100" height="100"> 
            </div>
            <div class="offer-beschrijving">
                <div>hotel mitsis</div>
                <div><span class="hotel-stars">★★★★★</span></div>
                <div>tsvilli - zakynthos - Griekenland</div>
                <div>dobberen in prachtige zwembaden</div>
                <div>glijbanen voor kinderplezier</div>
                <div>fit worden in onze gym</div>
            </div>
            <div class="offer-prijs">
                <div>pp. vanaf*</div>
                <div>€ 529,-</div>
                <div>ma 19 okt</div>
                <div>vanaf amsterdam</div>
                <div>all inclusive</div>
                <button>Bekijk Vakantie</button>
            </div>
        </div>
       </section>
       </main>
   <footer>
        <div class="footer-bar">
            <nav>
                <a href="contact.php">Contact</a>
                <a href="privacy.php">Privacy Policy</a>
            </nav>
            <div class="footer-socials">
                <a href="https://www.facebook.com/" target="_blank"><img src="../assets/img/social_icon_dark/facebook (1).png" alt="Facebook" width="24" height="25"></a>
                <a href="http://instagram.com/" target="_blank"><img src="../assets/img/social_icon_dark/instagram.png" alt="Instagram" width="24" height="24"></a>
                <a href="http://x.com/" target="_blank"><img src="../assets/img/social_icon_dark/twitter.png" alt="Twitter" width="24" height="23"></a>
            </div>
        </div>
    </footer>
</body>
</html>