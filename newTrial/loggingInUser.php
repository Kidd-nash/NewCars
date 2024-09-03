<?php
session_start();

ob_start();
if($_SERVER['REQUEST_METHOD'] == 'POST') {
   include_once("./connection.php");

   $user_name_or_email = $_POST["userNameOrEmail"];
   $password = $_POST["password"];
   $hashPassword = md5($password);

//    $result = pg_query($conn, "SELECT * FROM trial_users WHERE username = '$user_name' AND password = '$hashPassword';");
//    $user = pg_fetch_assoc($result);

//    $userId = $user['id'] ?? null;

//    print_r($user);
//    if (!is_null($userId)) {
//         $_SESSION['userId'] = $userId;
//         $_SESSION['userName'] = $user['username'];
//         ob_end_clean();
//         header("Location: http://localhost:8080/newCars/home.php");
//         die();
//    }
   
}
?>
<!DOCTYPE html>
<html>
    <head>
        <title>
            Loggin In User
        </title>
    </head>
    <body>
        <p>
            <?php
                echo "The username / email you entered: " . $user_name_or_email;
            ?>
        </p>
        <p>
            <?php
                echo "The password you entered: " . $password;
            ?>
        </p>
    </body>
</html>