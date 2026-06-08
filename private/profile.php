<?php
session_start();
include("../dbcalls/conn.php");
include("../dbcalls/user/users_read.php");
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

            <div class="nav-account"><a href="../dbcalls/user/user_logout.php" class="nav-account-link">Log Out</a></div>
        </div>
    </header>

    <main>

        <section class="page-section">
            <h1 class="page-title">Hi <?php echo ($_SESSION['user_firstname']); ?> </h1>
            <p class="page-subtitle">Manage your account information</p>
        </section>

        <div class="profile-container">
          
            <div class="profile-card">
                <h2 class="profile-card-title">Personal Information</h2>
                
                <div class="profile-info-grid">
                    <div class="profile-info-item">
                       <label class="profile-label">Full Name</label>
                        <p class="profile-value"><?php echo ($_SESSION['user_firstname']); ?>  <?php echo ($_SESSION['user_lastname']); ?></p>
                    </div>

                    <div class="profile-info-item">
                        <label class="profile-label">Email</label>
                        <p class="profile-value"><?php echo $_SESSION['user_email']; ?></p>
                    </div>

                    <div class="profile-info-item">
                        <label class="profile-label">Phone</label>
                        <p class="profile-value"><?php echo $_SESSION['user_phone']; ?></p>
                    </div>

                    <div class="profile-info-item">
                        <label class="profile-label">Country</label>
                        <p class="profile-value">Nederlands</p>
                    </div>

                </div>

               
            </div>

         
          

            <!-- Opciones de Cuenta -->
            <div class="profile-card">
                <h2 class="profile-card-title">Account Settings</h2>
                
                <div class="profile-actions">
                    <button type="submit" class="profile-action-btn">
                        <span class="action-icon">✏️</span>
                        <a href="../private/edit_profile.php?$edit_info=true" class="edit-profile-btn">Edit Profile</a>
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
