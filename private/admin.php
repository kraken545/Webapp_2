<?php
session_start();
include("../dbcalls/conn.php");
include("../dbcalls/trips_edit/trips_read.php");
include("../dbcalls/user/users_read.php");
include("../dbcalls/locations/read.php");
include("../dbcalls/accommodation/read_accommodation.php");
include("../dbcalls/flights/read_flights.php");
include("../dbcalls/bookings/bookings_read.php");

$locations = $result; 

$edit_trip_data = null;


if (isset($_GET['edit_tripid'])) {  
    $edit_tripid = $_GET['edit_tripid'];
    $sql_edit = "SELECT * FROM trips WHERE tripid = :tripid";
    $stmt_edit = $conn->prepare($sql_edit);
    $stmt_edit->bindParam(':tripid', $edit_tripid);
    $stmt_edit->execute();
    $edit_trip_data = $stmt_edit->fetch();
  
}
?>
<!DOCTYPE html>
<html lang="en">
  <head>
                
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="../assets/css/style.css" />
    <title>Voyage - Admin Dashboard</title>
  </head>
  <body class="font">
    <header>
      <div class="nav-bar darkblue">
        <a href="../index.php" class="logo-link">
          <div class="logo">
            <img src="../assets/img/Logo.png" alt="Voyage" />
          </div>
        </a>
        
        <div class="nav-account">
          <a href="../dbcalls/logs/logout.php" class="nav-account-link admin-logout-btn">Log out</a>
        </div>
      </div>
    </header>
    

    <main class="admin-main-bg">
      
      <section class="main-admin">
        <div id="tab-trips" class="admin-tab-content active">
          <section class="admin-section">
            <h3>All Trips</h3>
            <table class="admin-table">
              <thead>
                <tr>
                  <th>ID</th>
                  <th>Destination</th>
                  <th>Description</th>
                  <th>Price</th>
                  <th>Start Date</th>
                  <th>Duration</th>
                  <th>Max People</th>
                  <th>Actions</th>
                </tr>
              </thead>
              <tbody>
              
                  <?php foreach ($all_trips as $trip){ ?>
                    <tr>
                      <td>#<?php echo $trip['tripid']; ?></td>
                      <td><?php echo ($trip['city'] . ', ' . $trip['country']); ?></td>
                      <td><?php echo ($trip['description']); ?></td>
                      <td>€<?php echo number_format($trip['price'], 2, ',', '.'); ?></td>
                      <td><?php echo date('d M Y', strtotime($trip['startdate'])); ?></td>
                      <td><?php echo $trip['duration']; ?> days</td>
                      <td><?php echo $trip['maxpersons']; ?></td>
                      <td class="action-buttons">
                       
                        <form method="POST" action="../dbcalls/trips_edit/trips_delete.php" onsubmit="return confirm('Are you sure you want to delete this trip?')" style="display:inline">
                          <input type="hidden" name="delete_tripid" value="<?php echo $trip['tripid']; ?>">
                          <button type="submit" class="action-button delete font">Delete</button>
                        </form>

                      
                          <a href="admin.php?edit_tripid=<?php echo $trip['tripid']; ?>" class="action-button edit font">Edit</a>
                      </td>
                    </tr>
                  <?php } ?>
               
              </tbody>
               
              </table>


             

          </section>
          <div id="tab-bookings" class="admin-tab-content">
              <section class="admin-section">
              <h3>All Bookings</h3>
              <table class="admin-table">
              <thead>
                <tr>
                  
                  <th>ID</th>
                  <th>Customer</th>
                  <th>From</th>
                  <th>Number of People</th>
                  <th>Total Price</th>
                  <th>Booking Date</th>
                </tr>
              </thead>

               <tbody>

                  <?php foreach ($all_bookings as $booking) { ?>
                    <tr>
                      <td>#<?php echo $booking['orderid']; ?></td>
                      <td>
                        <?php echo ($booking['firstname'] . ' ' . $booking['lastname']); ?><br>
                        <span class="status-badge"><?php echo $booking['email']; ?></span>
                      </td>
                      <td><?php echo ($booking['country']); ?></td>
                      <td><?php echo $booking['quantity']; ?></td>
                      <td>€<?php echo number_format($booking['Sum'], 2, ',', '.'); ?></td>
                      <td><?php echo date('d M Y', strtotime($booking['orderdate'])); ?></td>
                      
                      <td class="action-buttons">
                        <form method="POST" action="../dbcalls/bookings/booking_delete.php" onsubmit="return confirm('Are you sure you want to delete this booking?')" style="display:inline">
                          <input type="hidden" name="delete_bookingid" value="<?php echo $booking['orderid']; ?>">
                          <button type="submit" class="action-button delete font">Delete</button>
                        </form>
                      </td>
                    </tr>
                  <?php } ?>

              </tbody>
              </table>
              </section>
              </div>
          <section class="side-admin-info-change">
            <div class="admin-section">
              <h3>Add New Location</h3>
              <form method="POST" action="../dbcalls/locations/create_location.php" class="admin-form">
                <div class="admin-form-row">
                  <div class="admin-form-group">
                    <label for="city">City</label>
                    <input type="text" id="city" name="city" required placeholder="e.g. Madrid">
                  </div>
                  <div class="admin-form-group">
                    <label for="country">Country</label>
                    <input type="text" id="country" name="country" required placeholder="e.g. Spain">
                  </div>
                </div>
                <button type="submit" class="form-button">Add</button>
              </form>
            </div>

            <div class="admin-section">
              <h3>Add New Accommodation</h3>
              <form method="POST" action="../dbcalls/accommodation/admin_accommodation_create.php" class="admin-form">
                <div class="admin-form-group">
                  <label for="acc_name">Name</label>
                  <input type="text" id="acc_name" name="acc_name" required placeholder="e.g. Hilton Resort">
                </div>
                <div class="admin-form-row">
                  <div class="admin-form-group">
                    <label for="acc_type">Type</label>
                    <input type="text" id="acc_type" name="acc_type" required placeholder="e.g. Hotel">
                  </div>
                  <div class="admin-form-group">
                    <label for="acc_people">Capacity (People)</label>
                    <input type="number" id="acc_people" name="acc_people" min="1" required placeholder="e.g. 4">
                  </div>
                </div>
                <button type="submit" id="create_accommodation" class="form-button">Add</button>
              </form>
            </div>

            <div class="admin-section">
              <h3>Add New Flight</h3>
              <form method="POST" action="../dbcalls/flights/flight_create.php" class="admin-form">
                <div class="admin-form-row">
                  <div class="admin-form-group">
                    <label for="flight_departure">Departure</label>
                    <input type="text" id="flight_departure" name="flight_departure" required placeholder="e.g. Amsterdam">
                  </div>
                  <div class="admin-form-group">
                    <label for="flight_destination">Destination</label>
                    <input type="text" id="flight_destination" name="flight_destination" required placeholder="e.g. New York">
                  </div>
                </div>
                <button type="submit" class="form-button">Add</button>
              </form>
            </div>
          </section>
        </div>

        <section class="side-admin-user-bookings">
        <div id="tab-create" class="admin-tab-content">
          <section class="admin-section">
            <h3><?php echo $edit_trip_data ? 'Edit Trip #' . $edit_trip_data['tripid'] : 'Create New Trip'; ?></h3>
            <form method="POST" action="<?php echo $edit_trip_data ? '../dbcalls/trips_edit/trips_update.php' : '../dbcalls/trips_edit/trips_create.php'; ?>" class="admin-form">
              <?php if ($edit_trip_data){ ?>
                <input type="hidden" name="tripid" value="<?php echo $edit_trip_data['tripid']; ?>">
              <?php } ?>

              <!-- Description: korte beschrijving van de trip -->
              <div class="admin-form-group">
                <label for="description">Description</label>
                <input type="text" id="description" name="description" required 
                       placeholder="e.g. Summer vacation in Barcelona"
                       value="<?php echo $edit_trip_data ? ($edit_trip_data['description']) : ''; ?>">
              </div>

              <!-- Location: dropdown met alle beschikbare locaties -->
              <div class="admin-form-row">
                <div class="admin-form-group">
                  <label for="locationid">Destination</label>
                  <select id="locationid" name="locationid" required>
                    <option value="">Select destination</option>
                    <?php foreach ($locations as $location){ 
                      $selected = ($edit_trip_data && $edit_trip_data['locationid'] == $location['locationid']) ? 'selected' : '';
                    ?>
                      <option value="<?php echo $location['locationid']; ?>" <?php echo $selected; ?>>
                        <?php echo ($location['city'] . ', ' . $location['country']); ?>
                      </option>
                    <?php }?>
                  </select>
                </div>

                <!-- Accommodation: dropdown met alle accommodaties -->
                <div class="admin-form-group">
                  <label for="accommodationid">Accommodation</label>
                  <select id="accommodationid" name="accommodationid" required>
                    <option value="">Select accommodation</option>
                    <?php foreach ($accommodations as $acc){ 
                      $selected = ($edit_trip_data && $edit_trip_data['accommodationid'] == $acc['accommodationid']) ? 'selected' : '';
                    ?>
                      <option value="<?php echo $acc['accommodationid']; ?>" <?php echo $selected; ?>>
                        <?php echo ($acc['name'] . ' (' . $acc['type'] . ')'); ?>
                      </option>
                    <?php } ?>
                  </select>
                </div>
              </div>

              <!-- Flight: dropdown met alle vluchten -->
              <div class="admin-form-row">
                <div class="admin-form-group">
                  <label for="flightid">Flight (optional)</label>
                  <select id="flightid" name="flightid">
                    <option value="">No flight</option>
                    <?php foreach ($flights as $flight){ 
                      $selected = ($edit_trip_data && $edit_trip_data['flightid'] == $flight['flightid']) ? 'selected' : '';
                    ?>
                      <option value="<?php echo $flight['flightid']; ?>" <?php echo $selected; ?>>
                        <?php echo ($flight['departure'] . ' → ' . $flight['destination']); ?>
                      </option>
                    <?php } ?>
                  </select>
                </div>

                <!-- Price: prijs per persoon -->
                <div class="admin-form-group">
                  <label for="price">Price (€)</label>
                  <input type="number" id="price" name="price" step="1" min="0" required placeholder="e.g. 899.50"
                         value="<?php echo $edit_trip_data ? $edit_trip_data['price'] : ''; ?>">
                </div>
              </div>
              <!-- Start date: vertrekdatum -->
              <div class="admin-form-row">
                <div class="admin-form-group">
                  <label for="startdate">Start Date</label>
                  <?php 
                    $startdate_val = '';
                    if ($edit_trip_data) {
                        $startdate_val = date($edit_trip_data['startdate']);
                    }
                  ?>
                  <input type="datetime-local" id="startdate" name="startdate" required
                         value="<?php echo $startdate_val; ?>">
                </div>

                <!-- Duration: aantal dagen -->
                <div class="admin-form-group">
                  <label for="duration">Duration (days)</label>
                  <input type="number" id="duration" name="duration" min="1" max="60" required placeholder="e.g. 7"
                         value="<?php echo $edit_trip_data ? $edit_trip_data['duration'] : ''; ?>">
                </div>

                <!-- Max persons: maximaal aantal personen -->
                <div class="admin-form-group">
                  <label for="maxpersons">Max People</label>
                  <input type="number" id="maxpersons" name="maxpersons" min="1" max="50" required placeholder="e.g. 4"
                         value="<?php echo $edit_trip_data ? $edit_trip_data['maxpersons'] : ''; ?>">
                </div>
              </div>

              <!-- Submit knop -->
               <div class="admin-form-row">
              <button type="submit" name="<?php echo $edit_trip_data ? 'update_trip' : 'create_trip'; ?>" class="form-button">
                <?php echo $edit_trip_data ? 'Update' : 'Create'; ?>
              </button>
              <?php if($edit_trip_data){ ?>
              <button class="form-button cancel font" type="button"><a href="admin.php" >Cancel</a></button>
              <?php } ?>
              </div>
            </form>
          </section>
        </div>

   
        <!-- Toont alle gebruikers met een Delete knop -->
    
        <div id="tab-users" class="admin-tab-content">
          <section class="admin-section">
            <h3>All Users</h3>
            <table class="admin-table">
              <thead>
                <tr>
                  
                  <th>Name</th>
                  <th>Role</th>
                  <th>Email</th>
                  <th>Phone</th>
                </tr>
              </thead>
              <tbody>
               
                  <?php foreach ($all_users as $user){ ?>
                    <tr>
                      
                      <td><?php echo ($user['firstname'] . " " . $user['lastname']); ?></td>
                      <td>
                        <span class="status-badge status-confirmed"><?php echo ($user['role']); ?></span>
                      </td>
                      <td>
                        <span class="status-badge "><?php echo ($user['email']); ?></span>
                      </td>
                       <td>
                        <span class="status-badge "><?php echo ($user['phone']); ?></span>
                      </td>
                    </tr>
                  <?php }?>
               
              </tbody>
            </table>
          </section>
        </div>
        <!-- Toont alle accommodations met een Delete knop -->
<div id="tab-accommodation" class="admin-tab-content">
          <section class="admin-section">
            <h3>All Accommodations</h3>
            <table class="admin-table">
              <thead>
                <tr>
                  
                  <th>ID</th>
                  <th>Name</th>
                  <th>Type</th>
                  <th>Max People</th>
                  <th>Delete</th> 
                </tr>
              </thead>
              <tbody>
               
                  <?php foreach ($accommodations as $accommodation){ ?>
                    <tr>
                      
                      <td><?php echo ($accommodation['accommodationid']); ?></td>
                      <td>
                        <span class="status-badge"><?php echo ($accommodation['name']); ?></span>
                      </td>
                      <td>
                        <span class="status-badge"><?php echo ($accommodation['type']); ?></span>
                      </td>
                       <td>
                        <span class="status-badge"><?php echo ($accommodation['peopleamount']); ?></span>
                      </td>
                      <td>
                        <form method="POST" action="../dbcalls/accommodation/accommodation_delete.php" onsubmit="return confirm('Are you sure you want to delete this accommodation?')" style="display:inline">
                          <input type="hidden" name="delete_accommodationid" value="<?php echo $accommodation['accommodationid']; ?>">
                          <button type="submit" class="action-button delete">Delete</button>
                        </form>
                      </td>
                    </tr>
                  <?php }?>
               
              </tbody>
            </table>
          </section>
        </div>

        <!-- Toont alle flights met een Delete knop -->
        <div id="tab-flights" class="admin-tab-content">
          <section class="admin-section">
            <h3>All Flights</h3>
            <table class="admin-table">
              <thead>
                <tr>
                  
                  <th>ID</th>
                  <th>Departure</th>
                  <th>Destination</th> 
                  <th>  </th>
                </tr>
              </thead>
              <tbody>
               
                  <?php foreach ($flights as $flight){ ?>
                    <tr>
                      
                      <td><?php echo ($flight['flightid']); ?></td>
                      <td>
                        <span class="status-badge"><?php echo ($flight['departure']); ?></span>
                      </td>
                      <td>
                        <span class="status-badge"><?php echo ($flight['destination']); ?></span>
                      </td>
                      <td>
                        <form method="POST" action="../dbcalls/flights/flights_delete.php" onsubmit="return confirm('Are you sure you want to delete this flight?')" style="display:inline">
                          <input type="hidden" name="delete_flightid" value="<?php echo $flight['flightid']; ?>">
                          <button type="submit" class="action-button delete">Delete</button>
                        </form>
                      </td>
                    </tr>
                  <?php }?>
               
              </tbody>
            </table>
          </section>
        </div>


            <div id="tab-destinations" class="admin-tab-content">
          <section class="admin-section">
            <h3>All Destinations</h3>
            <table class="admin-table">
              <thead>
                <tr>
                  
                  <th>ID</th>
                  <th>City</th>
                  <th>Country</th> 
                  <th>  </th>
                </tr>
              </thead>
              <tbody>
               
                  <?php foreach ($result as $destination){ ?>
                    <tr>
                      
                      <td><?php echo ($destination['locationid']); ?></td>
                      <td>
                        <span class="status-badge"><?php echo ($destination['city']); ?></span>
                      </td>
                      <td>
                        <span class="status-badge"><?php echo ($destination['country']); ?></span>
                      </td>
                      <td>
                        <form method="POST" action="../dbcalls/locations/delete_location.php" onsubmit="return confirm('Are you sure you want to delete this destination?')" style="display:inline">
                          <input type="hidden" name="delete_locationid" value="<?php echo $destination['locationid']; ?>">
                          <button type="submit" class="action-button delete">Delete</button>
                        </form>
                      </td>
                    </tr>
                  <?php }?>
               
              </tbody>
            </table>
          </section>
        </div>


        </section>
      </section>
    </main>

   
  </body>
</html>
