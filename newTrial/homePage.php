<?php 

include_once("./connection.php");

// $arr = [];
// $result = pg_query($conn, "SELECT * FROM new_cars ORDER BY id");
// $arr = pg_fetch_all($result);

$trialQuery = $db->query('SELECT * FROM trial_table ORDER BY id');

// Fetch all books using the fetchAll() method and assign the result to the $books variable.
$trials = $trialQuery->fetchAll(PDO::FETCH_ASSOC);

?>

<!DOCTYPE html>
<html>
    <head>
        <link href="style.css" rel="stylesheet">
        <title>
            Home Page
        </title>
    </head>
    <body>
        <h1>
            This is the home page...
        </h1>
        <form method="POST" action="/newCars/newTrial/create.php">
            <h2>Input Part</h2>
            <label>Character:</label>
            <input type="text" name="character" placeholder="Insert Name..."/><br>
            <label>Series:</label>
            <input type="text" name="series" placeholder="Insert Series..."/><br>
            <button type="submit">Submit</button>
        </form>
        <table>
            <thead>
            <td>Character</td>
            <td>Series</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            </thead>
            <?php 
                foreach($trials as $item) {
                    echo "<tr>";
                        echo "<td>" . $item["character"] . "</td>";
                        echo "<td>" . $item["series"] .  "</td>";
                        echo "<td><a href='edit.php?editId=" . $item["id"] . "'>Edit</a></td>";
                        echo "<td><a href='delete.php?deleteId=" . $item["id"] . "'>Delete</a></td>";
                    echo "</tr>";
                  
                }
            ?>
        </table>
    </body>
</html>