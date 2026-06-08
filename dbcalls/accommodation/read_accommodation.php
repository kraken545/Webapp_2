<?php


$sql = "SELECT * FROM accommodations";
$stmt = $conn->prepare($sql);
$stmt->execute();
$accommodations = $stmt->fetchAll();
