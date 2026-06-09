<?php
session_start();
include("../dbcalls/conn.php");
include("../dbcalls/user/users_read.php");
$edit_info = "false";

if (isset($_GET['edit_info'])) {
    $edit_info = $_GET['edit_info'];
}
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

            <div class="nav-account"><a href="../dbcalls/logs/logout.php" class="nav-account-link">Log out</a>
            </div>
        </div>
    </header>

    <main>

        <section class="page-section">
            <h1 class="page-title">Hi <?php echo ($_SESSION['user_firstname']); ?> </h1>
            <p class="page-subtitle">Manage your account information</p>
        </section>
        
        <form method="POST" action="../dbcalls/user/users_update.php" class="profile-container">


            <div class="profile-card">
                <h2 class="profile-card-title">Personal Information</h2>


                <div class="profile-info-item">
                    <label class="profile-label"><?php if ($edit_info == "true") { ?>First Name<?php } else { ?>Full Name<?php } ?></label>
                    <?php if ($edit_info == "true") { ?>
                        <input type="text" name="firstname"
                            value="<?php echo ($_SESSION['user_firstname']); ?>">
                        <label for="lastname">Last Name</label> <input type="text" name="lastname"
                            value="<?php echo ($_SESSION['user_lastname']); ?>">
                    <?php } else { ?>
                        <p class="profile-value"><?php echo ($_SESSION['user_firstname']); ?>
                            <?php echo ($_SESSION['user_lastname']); ?></p>
                    <?php } ?>
                </div>

                <div class="profile-info-item">
                    <label class="profile-label">Email</label>
                    <?php if ($edit_info == "true") { ?>
                        <input type="text" name="email" value="<?php echo $_SESSION['user_email']; ?>">
                    <?php } else { ?>
                        <p class="profile-value"><?php echo $_SESSION['user_email']; ?></p>
                    <?php } ?>
                </div>

                <div class="profile-info-item">
                    <label class="profile-label">Phone</label>
                    <p class="profile-value"><?php echo $_SESSION['user_phone']; ?></p>
                </div>

                <div class="profile-info-item">
                    <label class="profile-label">Country</label>
                    <p class="profile-value">Nederlands</p>
                </div>
                <?php if ($edit_info == "true") { ?>
                    <button type="submit" class="action-button">
                        Save Changes
                    </button>
                </form>
            <?php } else { ?>


                <a class="action-button" href="profile.php?edit_info=true">✏️ Edit Profile</a>

                    <?php } ?>
            </div>


            </div>

        </form>
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
                <a href="http://x.com/" target="_blank"><img src="../assets/img/social_icon_dark/twitter.png"
                        alt="Twitter" width="24" height="23"></a>
            </div>
        </div>
    </footer>


</body>

</html>