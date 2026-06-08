<?php


$sql = "SELECT * FROM flights ORDER BY departure";
$stmt = $conn->prepare($sql);
$stmt->execute();
$flights = $stmt->fetchAll();
