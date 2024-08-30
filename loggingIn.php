<?php
session_start();

ob_start();
if($_SERVER['REQUEST_METHOD'] == 'POST') {
   include_once("./connection.php");

   $user_name = $_POST["userName"];
   $password = $_POST["password"];
   $hashPassword = md5($password);

   $result = pg_query($conn, "SELECT * FROM trial_users WHERE username = '$user_name' AND password = '$hashPassword';");
   $user = pg_fetch_assoc($result);

   $userId = $user['id'] ?? null;

   print_r($user);
   if (!is_null($userId)) {
        $_SESSION['userId'] = $userId;
        $_SESSION['userName'] = $user['username'];
        ob_end_clean();
        header("Location: http://localhost:8080/newCars/home.php");
        die();
   }
   
   

}
