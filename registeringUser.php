<?php 
     ob_start();
     if($_SERVER['REQUEST_METHOD'] == 'POST') {
        // include_once("./connection.php");
 
        $user_name = $_POST["userName"];
        $password = $_POST["password"];
         
         // TODO: add validation
 
        //  $result = pg_query($conn, "INSERT INTO trial_users (userName, password) VALUES ('$user_name', '$password');");
 
     }
     ob_end_clean();
    //  header("Location: http://localhost:8080/newCars/home.php");
    //  die();
?>
<!DOCTYPE html>
<html>
    <head>

    </head>
    <body>
        <p>
            <?php
                echo "Your username is: " . $user_name;
            ?>
        </p>
        <p>
            <?php
                echo "Your password is: " . $password;
            ?>
        </p>
    </body>
</html>

