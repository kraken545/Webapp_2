<?php



$sql = "SELECT 
    t.tripid, t.maxpersons, t.price, t.startdate, t.duration, t.description,
    a.name as accommodation_name, a.type as accommodation_type,
    f.departure, f.destination,
    l.city, l.country
FROM trips t
INNER JOIN accommodations a ON t.accommodationid = a.accommodationid
LEFT JOIN flights f ON t.flightid = f.flightid
INNER JOIN locations l ON t.locationid = l.locationid
ORDER BY t.startdate ASC";

$stmt = $conn->prepare($sql);
$stmt->execute();
$all_trips = $stmt->fetchAll();