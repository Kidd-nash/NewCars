<?php 
include_once("./secondConnection.php");
    $editId = $_GET['editId'];
    echo 'Editing id:' . $editId;


    // $result = pg_query($conn, "SELECT * FROM new_cars WHERE id = $editId");

    $carQuery = $db->prepare('SELECT * FROM new_cars WHERE id = :editId');
    // Execute the statement here
    $carQuery->execute(['editId' => $editId]);

    // $newCar = pg_fetch_assoc($result);

    // $carQuery = $db->query('SELECT * FROM new_cars');
    // Fetch one book using the fetch() method and assign it to the $book variable.
    $car = $carQuery->fetch(PDO::FETCH_ASSOC);

    $model = $car["model"];

    $brand = $car["brand"];

    $year = $car["year"];

?>
<!DOCTYPE html>
<html lang="en">
    <head></head>
    <body>
        <?php if (isset($_SESSION['userName'])): ?>
            <p>Hi, <?php echo $_SESSION['userName'] ?>
        <?php endif; ?>
        <form method="POST" action="/newCars/carUpdate.php">
            <label>Brand:</label>
            <input type="text" name="brand" value="<?php echo $brand ?>"/>
            <label>Model:</label>
            <input type="text" name="model" value="<?php echo $model ?>"/>
            
            <input type="number" name="year" value="<?php echo $year ?>"/>
            <input type="hidden" name="id" value="<?php echo $editId ?>" />
            
            <input type="submit" value="submit" />
        </form>
    </body>
</html>