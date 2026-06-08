<?php
     session_start();
    include ('../conn.php');
   
    $delete_tripid = $_POST['delete_tripid'];
    

    $sql = "DELETE FROM trips WHERE tripid = :tripid";
    $stmt = $conn->prepare($sql);
    $stmt->bindParam(':tripid', $delete_tripid);
    $stmt->execute();
    
   header("Location: ../../private/admin.php");
exit();