<?php

$sql  = "SELECT * FROM trips";

$stmt = $conn->prepare($sql);

$stmt->execute();

$result = $stmt->fetchAll();

