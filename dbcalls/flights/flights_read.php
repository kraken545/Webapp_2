<?php
/**
 * Flights - READ Operation
 * Place in: /dbcalls/flights/read.php
 */

include('../conn.php');


$id = $_GET['id'] ?? null;

$sql = "SELECT * FROM flights WHERE id = :id";
$stmt = $conn->prepare($sql);
$stmt->bindParam(':id', $id);
$stmt->execute();
$flights = $stmt->fetchAll();

