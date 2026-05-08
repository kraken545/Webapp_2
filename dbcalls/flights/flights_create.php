<?php
/**
 * Flights - CREATE Operation

 */

include('../conn.php');


$flight_code = $_POST['flight_code'];
$origin = $_POST['origin'];
$destination = $_POST['destination'];
$departure = $_POST['departure'];
$arrival = $_POST['arrival'];
$airline = $_POST['airline'];
$price = $_POST['price'];
$seats_available = $_POST['seats_available'];
$description = $_POST['description'];


$sql = "INSERT INTO flights (flight_code, origin, destination, departure, arrival, airline, price, seats_available, description) 
                VALUES (:flight_code, :origin, :destination, :departure, :arrival, :airline, :price, :seats_available, :description)";
$stmt = $conn->prepare($sql);

$stmt->bindParam(':flight_code', $flight_code);
$stmt->bindParam(':origin', $origin);
$stmt->bindParam(':destination', $destination);
$stmt->bindParam(':departure', $departure);
$stmt->bindParam(':arrival', $arrival);
$stmt->bindParam(':airline', $airline);
$stmt->bindParam(':price', $price);
$stmt->bindParam(':seats_available', $seats_available);
$stmt->bindParam(':description', $description);

$stmt->execute();

header('Location: ../../public/admin.php?admin_key=admin123&section=flights&success=1');


