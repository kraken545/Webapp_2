<?php
/**
 * Accommodation - DELETE Operation
 * Place in: /dbcalls/accommodation/delete.php
 */

include('../conn.php');


$id = $_GET['id'];

$sql = "DELETE FROM accommodations WHERE id = :id";
$stmt = $conn->prepare($sql);
$stmt->bindParam(':id', $id);
$stmt->execute();