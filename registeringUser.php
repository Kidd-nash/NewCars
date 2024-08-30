<?php 
     ob_start();
     if($_SERVER['REQUEST_METHOD'] == 'POST') {
        include_once("./connection.php");
 
        $user_name = $_POST["userName"];
        $password = $_POST["password"];
        $hashPassword = md5($password);
         
         // TODO: add validation
 
        $result = pg_query($conn, "INSERT INTO trial_users (userName, password) VALUES ('$user_name', '$hashPassword');");
 
     }
     ob_end_clean();
    //  header("Location: http://localhost:8080/newCars/home.php");
    //  die();
?>
<!DOCTYPE html>
<html>
    <head>
        <style>
            a:link, a:visited {
              background-color: rgb(115, 194, 251);
              color: white;
              padding: 14px 25px;
              text-align: center;
              text-decoration: none;
              display: inline-block;
              border-radius: 5;
            }
            
            a:hover, a:active {
              background-color: rgb(0, 128, 255);
            }
        </style>
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
        <a href="http://localhost:8080/newCars/accessPage.html" target="_blank">Go to Log In</a>
    </body>
</html>

