<?php ini_set('display_errors', 'On'); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
   "http://www.w3.org/TR/html4/loose.dtd">

<html lang="en">
	<head>
		<title>Form Processing</title>
	</head>
	<body>

		<pre>
		<?php
			print_r($_POST);
		?>
		</pre>
		<br />
		<?php
			if (isset($_POST["username"])) {
				$username = $_POST["username"];
			} else {
				$username = "Undefined";
			}
			if (isset($_POST["password"])) {
				$password = $_POST["password"];
			} else {
				$password = "No password";
			}

		
			echo "{$username}: {$password}";
		?>
		
	</body>
</html>
