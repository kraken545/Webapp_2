<?php
/**
 * Accommodation - READ Operation
 * Place in: /dbcalls/accommodation/read.php
 */

include('../conn.php');

$sql = "SELECT * FROM accommodations";
$stmt = $conn->prepare($sql);
$stmt->execute();
$accommodations = $stmt->fetchAll();


