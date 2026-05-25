<?php

$sql  = "SELECT * FROM locations";

$stmt = $conn->prepare($sql);

$stmt->execute();

$result = $stmt->fetchAll();