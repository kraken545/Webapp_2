<?php
/**
 * Contact - READ Operation

 */

include('../conn.php');



$sql = "SELECT * FROM contacts WHERE id = :id";
$stmt = $conn->prepare($sql);
$stmt->bindParam(':id', $id);
$stmt->execute();
$contacts = $stmt->fetchAll();