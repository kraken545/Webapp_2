<?php
include("../dbcalls/conn.php");

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../assets/css/style.css">
    <title>User Profile - Voyage</title>
</head>

<body class="font">
    <header>
        <div class="nav-bar">
            <a href="../index.php" class="logo-link">
                <div class="logo"><img src="../assets/img/Logo.png" alt="Voyage"></div>
            </a>
            <nav>
                <a href="../public/offers.php">Offers</a>
                <a href="../public/about.php">About Us</a>
                <a href="../public/contact.php">Contact</a>
            </nav>

            <div class="nav-account"><a href="./profile.php" class="nav-account-link">My Account</a></div>
        </div>
    </header>

    <main>
        <section class="page-section">
            <h1 class="page-title">My Profile</h1>
            <p class="page-subtitle">Manage your account information</p>
        </section>

        <div class="profile-container">
            <!-- Información del Usuario -->
            <div class="profile-card">
                <h2 class="profile-card-title">Personal Information</h2>
                
                <div class="profile-info-grid">
                    <div class="profile-info-item">
                        <label class="profile-label">Full Name</label>
                        <p class="profile-value">Yoni; ?></p>
                    </div>

                    <div class="profile-info-item">
                        <label class="profile-label">Email</label>
                        <p class="profile-value">23543@gmail.com</p>
                    </div>

                    <div class="profile-info-item">
                        <label class="profile-label">Phone</label>
                        <p class="profile-value">+31 06 85509004 ?></p>
                    </div>

                    <div class="profile-info-item">
                        <label class="profile-label">Country</label>
                        <p class="profile-value">Nederlands</p>
                    </div>

                    <div class="profile-info-item">
                        <label class="profile-label">Member Since</label>
                        <p class="profile-value">01-05-1995</p>
                    </div>
                </div>

                <button type="button" class="form-button" onclick="editProfile()">Edit Profile</button>
            </div>

            <!-- Estadísticas de Viajes -->
            <div class="profile-card">
                <h2 class="profile-card-title">Travel Statistics</h2>
                
                <div class="profile-stats-grid">
                    <div class="profile-stat">
                        <p class="stat-number">3</p>
                        <p class="stat-label">Total Bookings</p>
                    </div>

                    <div class="profile-stat">
                        <p class="stat-number">2000</p>
                        <p class="stat-label">Total Spent</p>
                    </div>
                </div>
            </div>

            <!-- Opciones de Cuenta -->
            <div class="profile-card">
                <h2 class="profile-card-title">Account Settings</h2>
                
                <div class="profile-actions">
                    <button type="button" class="profile-action-btn" onclick="changePassword()">
                        <span class="action-icon">🔐</span>
                        Change Password
                    </button>

                    <button type="button" class="profile-action-btn" onclick="viewBookings()">
                        <span class="action-icon">✈️</span>
                        My Bookings
                    </button>

                    <button type="button" class="profile-action-btn" onclick="viewNotifications()">
                        <span class="action-icon">🔔</span>
                        Notifications
                    </button>

                    <button type="button" class="profile-action-btn logout" onclick="logout()">
                        <span class="action-icon">🚪</span>
                        Logout
                    </button>
                </div>
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
