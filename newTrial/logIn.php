
<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Log In</title>
        <link href="style.css" rel="stylesheet">
    </head>
    <body>
        <form method="POST" action="/newCars/newTrial/loggingInUser.php">
            <h2>Log In</h2>
            <label>Username / E-mail:</label>
            <input type="text" name="userNameOrEmail" placeholder="Insert Username or E-mail..."/><br>
            <label>Password:</label>
            <input type="text" name="password" placeholder="Insert Password..."/><br>
            <button type="submit">Submit</button>
        </form>
    </body>
</html>

    <!-- session_start();
    
   if (isset($_SESSION['userId'])) {

    include_once('redirect.php');
   } else { } -->
