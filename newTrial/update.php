<?php 
ob_start();
if($_SERVER['REQUEST_METHOD'] == 'POST') {

    include_once("./connection.php");

    $id = $_POST["id"] ?? null;

    $character = $_POST["character"];

    $series = $_POST["series"];
    
    $userQuery = $db->prepare("UPDATE trial_table SET character = :character, series = :series WHERE id = :id");
    
    $userQuery->execute(['character' => $character, 'series' => $series, 'id' => $id]);

}
ob_end_clean();
header("Location: http://localhost:8080/newCars/newTrial/homePage.php");
die();