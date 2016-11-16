<?php
	// 1. Create a database connection
	$dbhost = "docker";
	$dbuser = "widget_cms";
	$dbpass = "zaq12wsx";
	$dbname = "widget_corp";
	$connection = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);
	// 1. Test if connection occurred.
	if(mysqli_connect_errno()) {
		die("Database connection failed: " . mysqli_connect_error() . " (" . mysqli_connect_errno() . ")"
		);
	}
?>

<!DOCTYPE html>

<html lang="en">
	<head>
		<title>Databases</title>
	</head>
	<body>

	</body>
</html>
<?php
	// 5. Close database connection
	mysqli_close($connection);

?>
