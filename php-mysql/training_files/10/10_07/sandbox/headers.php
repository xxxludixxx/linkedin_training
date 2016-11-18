<?php
	header("HTTP 1.1/ 404 Not Found");
	header("X-Powered-By: none of your business");
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
   "http://www.w3.org/TR/html4/loose.dtd">

<html lang="en">
	<head>
		<title>Headers</title>
	</head>
	<body>


		<pre>
			<?php
				$headers = headers_list();
				print_r($headers);
			?>
		</pre>
	</body>
</html>
