<!DOCTYPE html>

<html lang="en">
	<head>
		<title>Second Page</title>
	</head>
	<body>
		<pre>
			<?php print_r($_GET); ?>
		</pre>
		<div>
			<?=$_GET['company'] . " is the World's " . $_GET['id'] . "th best company!"; ?>
		</div>
	</body>
</html>