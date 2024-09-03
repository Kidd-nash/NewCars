<?php
ob_start();
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
   include_once("./connection.php");

   $e_mail = $_POST["email"];
   $user_name = $_POST["userName"];
   $password = $_POST["password"];
   $hashPassword = md5($password);

   //   $result = pg_query($conn, "INSERT INTO new_trial_users (email, userName, password) VALUES ('$e_mail','$user_name', '$hashPassword');");

}
ob_end_clean();

?>
<!DOCTYPE html>
<html>

<head>
   <style>
      a:link,
      a:visited {
         background-color: rgb(115, 194, 251);
         color: white;
         padding: 14px 25px;
         text-align: center;
         text-decoration: none;
         display: inline-block;
         border-radius: 5;
      }

      a:hover,
      a:active {
         background-color: rgb(0, 128, 255);
      }
   </style>
</head>

<body>
   <p>
      <?php
      echo "Your email is: " . $e_mail;
      ?>
   </p>
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
   <a href="http://localhost:8080/newCars/newTrial/registerAndLogInPage.html" target="_blank">Let's Log In?</a>
</body>

</html>