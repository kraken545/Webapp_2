<?php

$people = 1;
$departureDate = '';
$days = '';
$location = '';
$accommodationType = '';

if (isset($_GET['people'])) {
    $people = $_GET['people'];
}

if (isset($_GET['departure-date'])) {
    $departureDate = $_GET['departure-date'];
}

if (isset($_GET['days'])) {
    $days = $_GET['days'];
}

if (isset($_GET['from']) && $_GET['from'] != '') {
    $location = $_GET['from'];
}

if (isset($_GET['accommodation-type']) && $_GET['accommodation-type'] != '') {
    $accommodationType = $_GET['accommodation-type'];
}

$sql = "SELECT 

    t.tripid, t.price, t.startdate, t.duration, t.description,

    a.name, a.type, a.image,

    f.departure,

    l.city, l.country

FROM trips t

LEFT JOIN accommodations a ON t.accommodationid = a.accommodationid

LEFT JOIN flights f ON t.flightid = f.flightid

INNER JOIN locations l ON t.locationid = l.locationid

WHERE t.maxpersons >= :people";

if ($departureDate !== '') {
    $sql .= "\n\nAND DATE(t.startdate) = :departureDate";
}

if ($days !== '') {
    $sql .= "\n\nAND t.duration = :days";
}

if ($location !== '') {
    $sql .= "\n\nAND l.locationid = :location";
}

if ($accommodationType !== '') {
    $sql .= "\n\nAND a.type = :accommodationType";
}

$stmt = $conn->prepare($sql);

$stmt->bindParam(':people', $people);

if ($departureDate !== '') {
    $stmt->bindParam(':departureDate', $departureDate);
}

if ($days !== '') {
    $stmt->bindParam(':days', $days);
}

if ($location !== '') {
    $stmt->bindParam(':location', $location);
}

if ($accommodationType !== '') {
    $stmt->bindParam(':accommodationType', $accommodationType);
}

$stmt->execute();

$result = $stmt->fetchAll();




