<?php
/**
 * Vacations - UPDATE Operation
 * Place in: /dbcalls/vacations/update.php
 */

include('../conn.php');

$id = $_POST['id'];
$package_name = $_POST['package_name'];
$destination = $_POST['destination'];
$duration_days = $_POST['duration_days'];
$start_date = $_POST['start_date'];
$end_date = $_POST['end_date'];
$price = $_POST['price'];
$description = $_POST['description'];
$included_services = $_POST['included_services'];
$max_participants = $_POST['max_participants'] ?? 20;
$current_participants = $_POST['current_participants'] ?? 0;


$sql = "UPDATE vacations SET package_name = :package_name, destination = :destination, 
                duration_days = :duration_days, start_date = :start_date, end_date = :end_date, 
                price = :price, description = :description, included_services = :included_services, 
                max_participants = :max_participants, current_participants = :current_participants WHERE id = :id";
$stmt = $conn->prepare($sql);

$stmt->bindParam(':id', $id);
$stmt->bindParam(':package_name', $package_name);
$stmt->bindParam(':destination', $destination);
$stmt->bindParam(':duration_days', $duration_days);
$stmt->bindParam(':start_date', $start_date);
$stmt->bindParam(':end_date', $end_date);
$stmt->bindParam(':price', $price);
$stmt->bindParam(':description', $description);
$stmt->bindParam(':included_services', $included_services);
$stmt->bindParam(':max_participants', $max_participants);
$stmt->bindParam(':current_participants', $current_participants);

$stmt->execute();

header('Location: ../../public/admin.php?admin_key=admin123&section=vacations&updated=1');

