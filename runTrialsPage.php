<?php 

?>

<!DOCTYPE html>
<html>
    <head>
        <title>
            Run trials
        </title>
    </head>
    <body>
		<h2>Intro greet</h2>
        <form method="post" action="">
			Your name:
			<br>
  		    <input type="text" name="name">
 			<br><br>
  		    What is the best thing about learning to code:
  		    <br>
  		    <input type="text" name="best">
  		    <br><br> 
  		    <input type="submit" value="Submit Answers">
		</form>
		<a href="index.php">Reset</a>
		<div id="form-output">
			<?php if ($_SERVER["REQUEST_METHOD"] == "POST"): ?>
				<p id="name"> Hello, <?= $_POST["name"]?>!</p>
			    <p id="name">Hello, <?= htmlspecialchars($_POST["name"]) ?>!</p>
    	    	<p id="best">I am glad you enjoy <?= htmlspecialchars($_POST["best"]) ?>.</p>
			<?php endif; ?>
        </div>
    </body>
</html>