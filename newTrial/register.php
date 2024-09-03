<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Register</title>
    </head>
    <body>
        <form method="POST" action="/newCars/newTrial/registeringUser.php">
            <h2>Register</h2>
            <label>E-mail:</label>
            <input type="text" name="email" placeholder="Insert Email..."/><br>
            <label>Username:</label>
            <input type="text" name="userName" placeholder="Create Username..."/><br>
            <label>Password:</label>
            <input type="text" name="password" placeholder="Create Password..."/><br>
            <button type="submit">Submit</button>
        </form>
    </body>
</html>

<!-- form attribute:  method="POST" action="/newCars/registeringUser.php" -->