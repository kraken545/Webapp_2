<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../assets/css/style.css">
    <title>Voyage - Reset Password</title>
</head>
<body class="font">
    <header>
        <div class="nav-bar">
            <a href="../index.php" class="logo-link">
                <div class="logo"><img src="../assets/img/Logo.png" alt="Voyage" ></div>
            </a>
            <nav>
                <a href="../public/offers.php">Offers</a>
                <a href="../public/about.php">About Us</a>
                <a href="../public/contact.php">Contact</a>
            </nav>
       
            <a></a>
        </div>
    </header>

    <main>
        <section class="page-section">
            <h1 class="page-title">Reset Password</h1>
            <p class="page-subtitle">Enter your email address and your new password to reset it</p>
        </section>

        <div class="form-container">
            

            <form method="POST" action="../dbcalls/logs/forgot_password_handler.php">
                <div class="form-group">
                    <label for="email">Email Address</label>
                    <input type="email" id="email" name="email" required>
                </div>

                <div class="form-group">
                    <label for="new_password">New Password</label>
                    <input type="password" id="new_password" name="new_password" required>
                </div>

                <button type="submit" class="form-button">Change Password</button>
            </form>

            <div class="form-links-container">
                <p>Remember your password? <a href="./login.php" class="form-link-primary">Sign in</a></p>
            </div>
        </div>

        <section class="text-content text-content-centered">
            <h3>How it works:</h3>
            <p><strong>1. Enter your email:</strong> Provide the email address associated with your Voyage account.</p>
            <p><strong>2. Enter your new password:</strong> Create a strong new password and submit.</p>
            <p><strong>3. Sign in:</strong> Use your new password to log back into your account.</p>
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
                        src="../assets/img/social_icon_dark/facebook (1).png" alt="Facebook" width="24" height="25"></a>
                <a href="http://instagram.com/" target="_blank"><img src="../assets/img/social_icon_dark/instagram.png"
                        alt="Instagram" width="24" height="24"></a>
                <a href="http://x.com/" target="_blank"><img src="../assets/img/social_icon_dark/twitter.png" alt="Twitter"
                        width="24" height="23"></a>
            </div>
        </div>
    </footer>
</body>
</html>
