<?php


$sql  = "SELECT * FROM locations";

$stmt = $conn->prepare($sql);

$stmt->execute();

$locations = $stmt->fetchAll();