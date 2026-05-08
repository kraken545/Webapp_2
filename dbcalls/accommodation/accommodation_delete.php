<?php
/**
 * Accommodation - DELETE Operation

 */

include('../conn.php');


$id = $_GET['id'];

$sql = "DELETE FROM accommodations WHERE id = :id";
$stmt = $conn->prepare($sql);
$stmt->bindParam(':id', $id);
$stmt->execute();