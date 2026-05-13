<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../assets/css/style.css">
    <title>Voyage - Login</title>
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
            <h1 class="page-title">Login</h1>
            <p class="page-subtitle">Access your Voyage account</p>
        </section>

        <div class="form-container">
            <form method="POST" action="">
                <div class="form-group">
                    <label for="email">Email Address</label>
                    <input type="email" id="email" name="email" required>
                </div>

                <div class="form-group">
                    <label for="password">Password</label>
                    <input type="password" id="password" name="password" required>
                </div>

                <div class="form-group form-group-horizontal">
                    <input type="checkbox" id="remember" name="remember" class="checkbox-input">
                    <label for="remember" class="checkbox-label">Remember me</label>
                </div>

                <button type="submit" class="form-button">Sign In</button>
            </form>

            <div class="form-links-container">
                <p>Don't have an account? <a href="./signup.php" class="form-link-primary">Create one</a></p>
                <p><a href="./forgot-password.php" class="form-link-secondary">Forgot your password?</a></p>
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