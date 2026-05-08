<?php
/**
 * Accommodation - CREATE Operation
 * Place in: /dbcalls/accommodation/create.php
 */

include('../conn.php');


$name = $_POST['name'];
$location = $_POST['location'];
$price_per_night = $_POST['price_per_night'];
$rating = $_POST['rating'];
$beds = $_POST['beds'];
$description = $_POST['description'];
$amenities = $_POST['amenities'];
$availability_status = $_POST['availability_status'];

$sql = "INSERT INTO accommodations (name, location, price_per_night, rating, beds, description, amenities, availability_status) 
                VALUES (:name, :location, :price_per_night, :rating, :beds, :description, :amenities, :availability_status)";
$stmt = $conn->prepare($sql);

$stmt->bindParam(':name', $name);
$stmt->bindParam(':location', $location);
$stmt->bindParam(':price_per_night', $price_per_night);
$stmt->bindParam(':rating', $rating);
$stmt->bindParam(':beds', $beds);
$stmt->bindParam(':description', $description);
$stmt->bindParam(':amenities', $amenities);
$stmt->bindParam(':availability_status', $availability_status);

$stmt->execute();

header('Location: ../../public/admin.php?admin_key=admin123&section=accommodations&success=1');

