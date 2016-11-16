<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
   "http://www.w3.org/TR/html4/loose.dtd">

<html lang="en">
	<head>
		<title>HTML encoding</title>
	</head>
	<body>
		<?php
		
			$text = "™£•“—é";
			echo htmlentities($text) . "</br>";
			echo htmlspecialchars($text);
		
		?>
		
	</body>
</html>
