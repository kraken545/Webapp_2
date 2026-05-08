<?php
/**
 * Flights - DELETE Operation
 * Place in: /dbcalls/flights/delete.php
 */

include('../conn.php');


$id = $_GET['id'] ?? $_POST['id'] ?? null;



$sql = "DELETE FROM flights WHERE id = :id";
$stmt = $conn->prepare($sql);
$stmt->bindParam(':id', $id);
$stmt->execute();


