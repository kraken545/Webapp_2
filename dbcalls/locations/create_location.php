<?php

include('../conn.php');

$city = $_POST['city'];
$country = $_POST['country'];

$sql = "INSERT INTO locations (city, country) VALUES (:city, :country)";
$stmt = $conn->prepare($sql);
$stmt->bindParam(':city', $city);
$stmt->bindParam(':country', $country);
$stmt->execute();

header('Location: ../../private/admin.php');