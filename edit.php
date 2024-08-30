<?php 
include_once("./connection.php");
    $editId = $_GET['editId'];
    echo $editId;


   $result = pg_query($conn, "SELECT * FROM new_cars WHERE id = $editId");

   $newCar = pg_fetch_assoc($result);

   $model = $newCar["model"];

   $brand = $newCar["brand"];

   $year = $newCar["year"];

?>
<!DOCTYPE html>
<html lang="en">
    <head></head>
    <body>
        <?php if (isset($_SESSION['userName'])): ?>
            <p>Hi, <?php echo $_SESSION['userName'] ?>
        <?php endif; ?>
        <form method="POST" action="/carUpdate.php">
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