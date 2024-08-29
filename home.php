<?php 
//Connection
include_once("./connection.php");

$arr = [];
$result = pg_query($conn, "SELECT * FROM new_cars ORDER BY id");
$arr = pg_fetch_all($result);

?> 

<!DOCTYPE html>
<html lang="en">
    <head></head>
    <body>
    <form method="POST" action="/create.php">
            <h2>Input Part</h2>
            <label>Brand:</label>
            <input type="text" name="brand" placeholder="Insert Brand..."/><br>
            <label>Model:</label>
            <input type="text" name="model" placeholder="Insert Model..."/><br>
            <label>Year:</label>
            <input type="number" name="year" placeholder="Year..." min="1886" max="2025" /><br>
            <button type="submit">Submit</button>
        </form>
        <table>
            <thead>
            <td>Brand</td>
            <td>Model</td>
            <td>Year</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            </thead>
            <?php 
                foreach($arr as $item) {
                    echo "<tr>";
                        echo "<td>" . $item["brand"] . "</td>";
                        echo "<td>" . $item["model"] .  "</td>";
                        echo "<td>" . $item["year"] .  "</td>";
                        echo "<td><a href='edit.php?editId=" . $item["id"] . "'>Edit</a></td>";
                        echo "<td><a href='carDelete.php?deleteId=" . $item["id"] . "'>Delete</a></td>";
                    echo "</tr>";
                  
                }
            ?>
        </table>

    </body>
</html>