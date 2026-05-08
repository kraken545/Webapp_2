<?php
/**
 * Vacations - DELETE Operation
 * Place in: /dbcalls/vacations/delete.php
 */

include('../conn.php');


    $id = $_GET['id'] ?? $_POST['id'] ?? null;


    $sql = "DELETE FROM vacations WHERE id = :id";
    $stmt = $conn->prepare($sql);
    $stmt->bindParam(':id', $id);
    $stmt->execute();

    header('Location: ../../public/admin.php?admin_key=admin123&section=vacations&deleted=1');
 
