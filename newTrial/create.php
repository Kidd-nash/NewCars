<?php
    ob_start();
    if($_SERVER['REQUEST_METHOD'] == 'POST') {
        include_once("./connection.php");

        $character = $_POST["character"];
        $series = $_POST["series"];

        $userQueary = $db->prepare("INSERT INTO trial_table (character, series) VALUES (:character, :series)");

        $userQueary->execute(['character' => $character, 'series' => $series]);

    }
    ob_end_clean();
    header("Location: http://localhost:8080/newCars/newTrial/homePage.php");
    die();