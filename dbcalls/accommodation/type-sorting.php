<?php

$sql  = "SELECT type FROM accommodations ORDER BY type";

$stmt = $conn->prepare($sql);

$stmt->execute();

$result = $stmt->fetchAll();