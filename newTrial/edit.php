<?php
    include_once("./connection.php");

    $editId = $_GET['editId'];

    echo 'Editing id:' . $editId;

    $characterQuery = $db->prepare('SELECT * FROM trial_table WHERE id = :editId');
    
    $characterQuery->execute(['editId' => $editId]);

    $character = $characterQuery->fetch(PDO::FETCH_ASSOC);

    $character_name = $character["character"];

    $series = $character["series"];

?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <link href="style.css" rel="stylesheet">
        <title>Edit Page</title>
    </head>
    <body>
        <form method="POST" action="/newCars/newTrial/update.php">
            <label>Character:</label>
            <input type="text" name="character" value="<?php echo $character_name ?>"/>
            <br>
            <label>Series:</label>
            <input type="text" name="series" value="<?php echo $series ?>"/>
            <br>
            <input type="hidden" name="id" value="<?php echo $editId ?>" />
            
            <input type="submit" value="submit" />
        </form>
    </body>
</html>
