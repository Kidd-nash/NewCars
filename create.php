<?php
    ob_start();
    if($_SERVER['REQUEST_METHOD'] == 'POST') {
        include_once("./connection.php");

        $brand = $_POST["brand"];
        $model = $_POST["model"];
        $year = $_POST["year"];

        // TODO: add validation

        $result = pg_query($conn, "INSERT INTO new_cars (brand, model, year) VALUES ('$brand', '$model', '$year');");

    }
    ob_end_clean();
    header("Location: http://localhost:8080/home.php");
    die();