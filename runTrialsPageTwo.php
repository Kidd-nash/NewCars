<?php 

function checkWord($input, $letter){
    // Check if the input is set and the request is POST
    if ($_SERVER["REQUEST_METHOD"] === "POST" && isset($input) && strtolower($input[0]) !== $letter) {
        return "* This word must start with the letter {$letter}!";
    } else {
        return "";
    }
}

?>

<!DOCTYPE html>
<html>
    <head>
        <title>
            Run trials
        </title>
    </head>
    <body>
        <h2>simple validation</h2>
		<form method="post" action="">
			<p>Enter a word that starts with letter a</p>
			<br>
			<input type="text" name="a-word" id="a-word" value="<?= isset($_POST['a-word']) ? $_POST['a-word'] : ''; ?>">
    		<br>
   			<p class="error" id="a-error"><?= checkWord($_POST['a-word'] ?? '', 'a'); ?></p>
			<input type="submit" value="Submit Words">
		</form>
        <div id="form-output">
			<?php if ($_SERVER["REQUEST_METHOD"] == "POST"): ?>
                <h3>"a" is for: <?= isset($_POST['a-word']) ? htmlspecialchars($_POST['a-word']) : ''; ?></h3>
			<?php endif; ?>
        </div>
    </body>
</html>