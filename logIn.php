<?php
    session_start();
    
   if (isset($_SESSION['userId'])) {

    include_once('redirect.php');
   } else {
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Log In</title>
    </head>
    <body>
        <form method="POST" action="/newCars/loggingIn.php">
            <h2>Log In</h2>
            <label>Username:</label>
            <input type="text" name="userName" placeholder="Create Username..."/><br>
            <label>Password:</label>
            <input type="text" name="password" placeholder="Create Password..."/><br>
            <button type="submit">Submit</button>
        </form>
    </body>
</html>
<?php } ?>