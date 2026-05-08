<?php
/**
 * Flights - UPDATE Operation
 * Place in: /dbcalls/flights/update.php
 */

include('../conn.php');


$id = $_POST['id'] ?? null;
$flight_code = $_POST['flight_code'] ?? '';
$origin = $_POST['origin'] ?? '';
$destination = $_POST['destination'] ?? '';
$departure = $_POST['departure'] ?? '';
$arrival = $_POST['arrival'] ?? '';
$airline = $_POST['airline'] ?? '';
$price = $_POST['price'] ?? 0;
$seats_available = $_POST['seats_available'] ?? 0;
$description = $_POST['description'] ?? '';


$sql = "UPDATE flights SET flight_code = :flight_code, origin = :origin, destination = :destination, 
                departure = :departure, arrival = :arrival, airline = :airline, price = :price, 
                seats_available = :seats_available, description = :description WHERE id = :id";
$stmt = $conn->prepare($sql);

$stmt->bindParam(':id', $id);
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


