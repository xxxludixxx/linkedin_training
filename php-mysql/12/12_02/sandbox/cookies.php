<?php
$name = "test";
$value = COOKIE;
$expire = time() + (60*60*24*7);
//setcookie($name, $value, $expire);
setcookie($name, $value, time() - 20);
?>
<!DOCTYPE html>

<html lang="en">
	<head>
		<title>Cookies</title>
	</head>
	<body>
		<?php
			$test = isset($_COOKIE["test"]) ? $_COOKIE["test"] : "";
			echo $test;
		?>
	</body>
</html>
