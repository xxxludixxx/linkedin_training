<?php
	require_once("included_functions.php");
	if (isset($_POST['submit'])) {
	//form was submitted
		$username = $_POST["username"];
		$password = $_POST["password"];
		if ($username == "ludi" && $password == "secret") {
			//successful login
			redirect_to("basic.html");
		} else {
			$message = "There were some errors.";
		}
	} else {
	//form was not submitted
		$username = "";
		$message = "Please log in.";
	}
?>

<!DOCTYPE html>

<html lang="en">
	<head>
		<title>Form</title>
	</head>
	<body>

		<?php echo $message?>
		<form action="form_single.php" method="post">
		  Username: <input type="text" name="username" value="<?=htmlspecialchars($username);?>" /><br />
		  Password: <input type="password" name="password" value="" /><br />
			<br />
		  <input type="submit" name="submit" value="Submit" />
		</form>

	</body>
</html>
