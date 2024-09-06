<?php 
    ob_start();

    include_once("./connection.php");

    $deleteId = $_GET["deleteId"] ?? null;

    echo "Deleting character data id:" . $deleteId;
    
    // $result = pg_query($conn, "DELETE FROM new_cars WHERE id = $deleteId");

    $userQuery = $db->prepare("DELETE FROM trial_table WHERE id = :deleteId");
    
    $userQuery->execute(['deleteId' => $deleteId]);

    ob_end_clean();

    header("Location: http://localhost:8080/newCars/newTrial/homePage.php");
    die();
