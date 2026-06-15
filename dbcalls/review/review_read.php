<?php
$sql_reviews = "SELECT * FROM reviews ORDER BY reviewid DESC LIMIT 10";
$stmt_reviews = $conn->prepare($sql_reviews);
$stmt_reviews->execute();
$all_reviews = $stmt_reviews->fetchAll();
