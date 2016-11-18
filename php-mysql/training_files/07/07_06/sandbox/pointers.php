<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
   "http://www.w3.org/TR/html4/loose.dtd">

<html lang="en">
	<head>
		<title>Pointers</title>
	</head>
	<body>

		<?php
		
			$ages = array(4,8,15,16,23,42);

			echo "1: " . current($ages) . "<br />";
			next($ages);
			echo "2: " . current($ages) . "<br />";
		?>
		
	</body>
</html>
