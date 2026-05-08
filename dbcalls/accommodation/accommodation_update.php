<?php
/**
 * Accommodation - UPDATE Operation
 * Place in: /dbcalls/accommodation/update.php
 */

include('../conn.php');


$id = $_POST['id'] ?? null;
$name = $_POST['name'] ?? '';
$location = $_POST['location'] ?? '';
$price_per_night = $_POST['price_per_night'] ?? 0;
$rating = $_POST['rating'] ?? null;
$beds = $_POST['beds'] ?? 1;
$description = $_POST['description'] ?? '';
$amenities = $_POST['amenities'] ?? '';
$availability_status = $_POST['availability_status'] ?? 'available';


$sql = "UPDATE accommodations SET name = :name, location = :location, price_per_night = :price_per_night, 
                rating = :rating, beds = :beds, description = :description, amenities = :amenities, 
                availability_status = :availability_status WHERE id = :id";
$stmt = $conn->prepare($sql);

$stmt->bindParam(':id', $id);
$stmt->bindParam(':name', $name);
$stmt->bindParam(':location', $location);
$stmt->bindParam(':price_per_night', $price_per_night);
$stmt->bindParam(':rating', $rating);
$stmt->bindParam(':beds', $beds);
$stmt->bindParam(':description', $description);
$stmt->bindParam(':amenities', $amenities);
$stmt->bindParam(':availability_status', $availability_status);

$stmt->execute();

header('Location: ../../public/admin.php?admin_key=admin123&section=accommodations&updated=1');

