<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../assets/css/style.css">
    <title>Voyage - Create Account</title>
</head>
<body class="font">
    <header>
        <div class="nav-bar">
            <a href="../index.php" class="logo-link">
                <div class="logo"><img src="../assets/img/Logo.png" alt="Voyage" ></div>
            </a>
            <nav>
                <a href="../public/accommodation.php">Offers</a>
                <a href="../public/about.php">About Us</a>
                <a href="../public/contact.php">Contact</a>
            </nav>
            
            <div class="nav-account"><a href="./login.php" class="nav-account-link">My Account</a></div>
        </div>
    </header>

    <main>
        <section class="page-section">
            <h1 class="page-title">Create Account</h1>
            <p class="page-subtitle">Join Voyage and start booking your perfect trips</p>
        </section>

        <div class="form-container">
            <form method="POST" action="">
                <div class="form-group">
                    <label for="firstname">First Name</label>
                    <input type="text" id="firstname" name="firstname" required>
                </div>

                <div class="form-group">
                    <label for="lastname">Last Name</label>
                    <input type="text" id="lastname" name="lastname" required>
                </div>

                <div class="form-group">
                    <label for="email">Email Address</label>
                    <input type="email" id="email" name="email" required>
                </div>

                <div class="form-group">
                    <label for="phone">Phone Number</label>
                    <input type="tel" id="phone" name="phone">
                </div>

                <div class="form-group">
                    <label for="password">Password</label>
                    <input type="password" id="password" name="password" required>
                </div>

                <div class="form-group">
                    <label for="confirm_password">Confirm Password</label>
                    <input type="password" id="confirm_password" name="confirm_password" required>
                </div>

                <div class="form-group form-group-horizontal-flex-start">
                    <input type="checkbox" id="agree" name="agree" class="checkbox-input-with-margin" required>
                    <label for="agree" class="checkbox-label">I agree to the <a href="../public/privacy.php" class="form-link-inline">Privacy Policy</a> and <a href="../public/contact.php" class="form-link-inline">Terms of Service</a></label>
                </div>

                <button type="submit" class="form-button">Create Account</button>
            </form>

            <div class="form-links-container">
                <p>Already have an account? <a href="./login.php" class="form-link-primary">Sign in</a></p>
            </div>
        </div>
    </main>

    <footer>
        <div class="footer-bar">
            <nav>
                <a href="../public/contact.php">Contact</a>
                <a href="../public/privacy.php">Privacy Policy</a>
            </nav>
            <div class="footer-socials">
                <img src="../assets/img/social_icon_dark/facebook (1).png" alt="Facebook" width="24" height="25">
                <img src="../assets/img/social_icon_dark/instagram.png" alt="Instagram" width="24" height="24">
                <img src="../assets/img/social_icon_dark/twitter.png" alt="Twitter" width="24" height="23">
            </div>
        </div>
    </footer>
</body>
</html>
