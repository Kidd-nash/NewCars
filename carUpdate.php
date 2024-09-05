<?php 
ob_start();
if($_SERVER['REQUEST_METHOD'] == 'POST') {
    include_once("./secondConnection.php");

    $id = $_POST["id"] ?? null;
    $brand = $_POST["brand"];
    $model = $_POST["model"];
    $year = $_POST["year"];

    // TODO: add validation

    // $result = pg_query($conn, "UPDATE new_cars SET brand = '$brand', model = '$model', year = $year WHERE id = '$id'");

    // Write an equivalent prepared statement here
    $userQuery = $db->prepare("UPDATE new_cars SET brand = :brand, model = :model, year = :year WHERE id = :id");
    // Execute the statement here
    $userQuery->execute(['brand' => $brand, 'model' => $model, 'year' => $year]);

}
ob_end_clean();
header("Location: http://localhost:8080/newCars/home.php");
die();

