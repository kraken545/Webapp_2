<?php
$tripid = 0;

if (isset($_GET['id'])) {
    $tripid = (int) $_GET['id'];
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
WHERE t.tripid = :tripid";

$stmt = $conn->prepare($sql);
$stmt->bindParam(':tripid', $tripid);
$stmt->execute();

$result = $stmt->fetch();