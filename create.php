<?php
    ob_start();
    if($_SERVER['REQUEST_METHOD'] == 'POST') {
        include_once("./secondConnection.php");

        $brand = $_POST["brand"];
        $model = $_POST["model"];
        $year = $_POST["year"];

        // TODO: add validation

        // $result = pg_query($conn, "INSERT INTO new_cars (brand, model, year) VALUES ('$brand', '$model', '$year');");

        $userQueary = $db->prepare("INSERT INTO new_cars (brand, model, year) VALUES (:brand, :model, :year)");

        $userQueary->execute(['brand' => $brand, 'model' => $model, 'year' => $year]);

    }
    ob_end_clean();
    header("Location: http://localhost:8080/newCars/home.php");
    die();