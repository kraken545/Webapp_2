<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../assets/css/style.css">
    <title>Voyage - Contact</title>
</head>
<body class="font">
    <header>
        <div class="nav-bar">
             <a href="../index.php" class="logo-link">
                <div class="logo"><img src="../assets/img/Logo.png" alt="Voyage" ></div>
            </a>
            <nav>
                <a href="./accommodation.php">Offers</a>
                <a href="./about.php">About Us</a>
                <a href="./contact.php">Contact</a>
            </nav>
            <div class="nav-icon">
                <img src="../assets/img/icon_color/loop.png" alt="search" width="24" height="24">
            </div>
            <div class="nav-account"><a href="../private/login.php" class="nav-account-link">My Account</a></div>
        </div>
    </header>

    <main>
        <section class="page-section">
            <h1 class="page-title">Contact Us</h1>
            <p class="page-subtitle">Have questions? We're here to help. Get in touch with our team.</p>
        </section>

        <div class="form-container">
            <form method="POST" action="">
                <div class="form-group">
                    <label for="name">Full Name</label>
                    <input type="text" id="name" name="name" required>
                </div>

                <div class="form-group">
                    <label for="email">Email Address</label>
                    <input type="email" id="email" name="email" required>
                </div>

                <div class="form-group">
                    <label for="subject">Subject</label>
                    <input type="text" id="subject" name="subject" required>
                </div>

                <div class="form-group">
                    <label for="message">Message</label>
                    <textarea id="message" name="message" required></textarea>
                </div>

                <button type="submit" class="form-button">Send Message</button>
            </form>
        </div>

        <section class="info-grid info-grid-top-margin">
            <div class="info-card">
                <h3>Email</h3>
                <p>info@voyage.nl</p>
            </div>
            <div class="info-card">
                <h3>Phone</h3>
                <p>+31 (0) 24 XXX XX XX</p>
            </div>
            <div class="info-card">
                <h3>Address</h3>
                <p>Nijmegen, Netherlands</p>
            </div>
        </section>
    </main>

    <footer>
        <div class="footer-bar">
            <nav>
                <a href="./contact.php">Contact</a>
                <a href="./privacy.php">Privacy Policy</a>
            </nav>
            <div class="footer-socials">
                <img src="../assets/img/icon_dark/facebook (1).png" alt="Facebook" width="24" height="25">
                <img src="../assets/img/icon_dark/instagram.png" alt="Instagram" width="24" height="24">
                <img src="../assets/img/icon_dark/twitter.png" alt="Twitter" width="24" height="23">
            </div>
        </div>
    </footer>
</body>
</html>