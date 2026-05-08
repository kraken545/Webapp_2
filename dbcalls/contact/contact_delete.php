<?php
/**
 * Contact - DELETE Operation
 
 */

include('../conn.php');


$id = $_GET['id'] ?? $_POST['id'] ?? null;



$sql = "DELETE FROM contacts WHERE id = :id";
$stmt = $conn->prepare($sql);
$stmt->bindParam(':id', $id);
$stmt->execute();



