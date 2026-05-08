<?php
/**
 * Flights - READ Operation

 */

include('../conn.php');


$id = $_GET['id'] ?? null;

$sql = "SELECT * FROM flights WHERE id = :id";
$stmt = $conn->prepare($sql);
$stmt->bindParam(':id', $id);
$stmt->execute();
$flights = $stmt->fetchAll();

