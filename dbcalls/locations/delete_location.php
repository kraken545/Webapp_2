<?php

    include('../conn.php');

    $locationid = $_POST['delete_locationid'];

    $sql = "DELETE FROM locations WHERE locationid = :locationid";
    $stmt = $conn->prepare($sql);
    $stmt->bindParam(':locationid', $locationid);
    $stmt->execute();

    header('Location: ../../private/admin.php');
    exit;