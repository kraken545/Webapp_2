<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="../assets/css/style.css" />
    <title>Voyage - Admin</title>
  </head>
  <body class="font">
    <header>
      <div class="nav-bar">
        <a href="../index.php" class="logo-link">
          <div class="logo">
            <img src="../assets/img/Logo.png" alt="Voyage" />
          </div>
        </a>
        <nav>
          <a href="../public/offers.php">Offers</a>
        </nav>

        <div class="nav-account">
          <a href="./login.php" class="nav-account-link">My Account</a>
        </div>
      </div>
    </header>

    <main>
      <section class="admin-hero">
        <div class="admin-header">
          <h2>Admin Dashboard</h2>
          <p>Manage your Voyage platform</p>
        </div>
        <section class="admin-grid">
          <div class="admin-card">
            <h3>124</h3>
            <p>Total Users</p>
          </div>
          <div class="admin-card">
            <h3>856</h3>
            <p>Active Bookings</p>
          </div>
          <div class="admin-card">
            <h3>42</h3>
            <p>New Messages</p>
          </div>
          <div class="admin-card">
            <h3>€12.5K</h3>
            <p>Revenue</p>
          </div>
        </section>
      </section>
      <section class="main-admin">
        

        

        <section class="admin-section">
          <h3>Recent Bookings</h3>
          <table class="admin-table">
            <thead>
              <tr>
                <th>Booking ID</th>
                <th>Customer</th>
                <th>Destination</th>
                <th>Date</th>
                <th>Status</th>
                <th>Actions</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>#BK001</td>
                <td>John Doe</td>
                <td>Barcelona</td>
                <td>May 15, 2026</td>
                <td>
                  <span class="status-badge status-confirmed">Confirmed</span>
                </td>
                <td>
                  <button class="action-button">View</button>
                  <button class="action-button delete">Cancel</button>
                </td>
              </tr>
              <tr>
                <td>#BK002</td>
                <td>Jane Smith</td>
                <td>Paris</td>
                <td>May 20, 2026</td>
                <td>
                  <span class="status-badge status-pending">Pending</span>
                </td>
                <td>
                  <button class="action-button">View</button>
                  <button class="action-button delete">Cancel</button>
                </td>
              </tr>
              <tr>
                <td>#BK003</td>
                <td>Mike Johnson</td>
                <td>Amsterdam</td>
                <td>May 25, 2026</td>
                <td>
                  <span class="status-badge status-confirmed">Confirmed</span>
                </td>
                <td>
                  <button class="action-button">View</button>
                  <button class="action-button delete">Cancel</button>
                </td>
              </tr>
            </tbody>
          </table>
        </section>

        <section class="admin-section">
          <h3>User Messages</h3>
          <table class="admin-table">
            <thead>
              <tr>
                <th>From</th>
                <th>Subject</th>
                <th>Date</th>
                <th>Status</th>
                <th>Action</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>sarah@email.com</td>
                <td>Booking inquiry about flights</td>
                <td>May 10, 2026</td>
                <td><span class="status-badge status-read">Read</span></td>
                <td><button class="action-button">Reply</button></td>
              </tr>
              <tr>
                <td>contact@company.com</td>
                <td>Partnership opportunity</td>
                <td>May 9, 2026</td>
                <td><span class="status-badge status-unread">Unread</span></td>
                <td><button class="action-button">Reply</button></td>
              </tr>
            </tbody>
          </table>
        </section>
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
