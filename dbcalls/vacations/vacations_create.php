<?php
/**
 * Vacations - CREATE Operation

 */

include('../conn.php');


$package_name = $_POST['package_name'];
$destination = $_POST['destination'];
$duration_days = $_POST['duration_days'] ?? 0;
$start_date = $_POST['start_date'] ?? '';
$end_date = $_POST['end_date'] ?? '';
$price = $_POST['price'] ?? 0;
$description = $_POST['description'] ?? '';
$included_services = $_POST['included_services'] ?? '';
$max_participants = $_POST['max_participants'] ?? 20;
$current_participants = $_POST['current_participants'] ?? 0;


$sql = "INSERT INTO vacations (package_name, destination, duration_days, start_date, end_date, price, description, included_services, max_participants, current_participants) 
                VALUES (:package_name, :destination, :duration_days, :start_date, :end_date, :price, :description, :included_services, :max_participants, :current_participants)";
$stmt = $conn->prepare($sql);

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

header('Location: ../../public/admin.php?admin_key=admin123&section=vacations&success=1');



