<?php
include ('../conn.php');

$maxpersons = $_POST['maxpersons'];
    $price = $_POST['price'];
    $startdate = $_POST['startdate'];
    $duration = $_POST['duration'];
    $description = $_POST['description'];
    $flightid = $_POST['flightid'];
    $accommodationid = $_POST['accommodationid'];
    $locationid = $_POST['locationid'];

$sql = "INSERT INTO trips (maxpersons, price, startdate, duration, description, flightid, accommodationid, locationid) 
        VALUES (:maxpersons, :price, :startdate, :duration, :description, :flightid, :accommodationid, :locationid)";

$stmt = $conn->prepare($sql);


$stmt->bindParam(':maxpersons', $maxpersons);
$stmt->bindParam(':price', $price);
$stmt->bindParam(':startdate', $startdate);
$stmt->bindParam(':duration', $duration);
$stmt->bindParam(':description', $description);
$stmt->bindParam(':flightid', $flightid);
$stmt->bindParam(':accommodationid', $accommodationid);
$stmt->bindParam(':locationid', $locationid);


$stmt->execute();
header("Location: ../../private/admin.php");