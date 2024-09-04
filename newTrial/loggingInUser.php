<?php
session_start();
ob_start();
if($_SERVER['REQUEST_METHOD'] == 'POST') {
   include_once("./connection.php");

   $user_name_or_email = $_POST["userNameOrEmail"];
   $password = $_POST["password"];
   $hashPassword = md5($password);

   $result = pg_query($conn, "SELECT * FROM new_trial_users WHERE (username = '$user_name_or_email' OR email = '$user_name_or_email') AND password = '$hashPassword';");
   $user = pg_fetch_assoc($result);

   $userId = $user['id'] ?? null;

   if (!is_null($userId)) {
        $_SESSION['userId'] = $userId;
        $_SESSION['userName'] = $user['username'];
        ob_end_clean();
        header("Location: http://localhost:8080/newCars/newTrial/homePage.php");
        die();
   }
   
}
die('test');
