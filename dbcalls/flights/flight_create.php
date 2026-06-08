<?php
include('../conn.php');

$flight_departure = $_POST['flight_departure'];
$flight_destination = $_POST['flight_destination'];

$sql = "INSERT INTO flights (departure, destination) VALUES (:departure, :destination)";
$stmt = $conn->prepare($sql);
$stmt->bindParam(':departure', $flight_departure);
$stmt->bindParam(':destination', $flight_destination);
$flight_success = $stmt->execute();

header("Location: ../../private/admin.php");
exit;
