<!DOCTYPE html>

<html lang="en">
	<head>
		<title>First Page</title>
	</head>
	<body>
		<?php
			$linkName = "Second Page";
			$id = 5;
			$company = "Johnson & Johnson";
			$company = rawurlencode($company);
		?>
		<a href="second_page.php?id=<?=$id?>&company=<?=$company?>"><?= $linkName ?></a>
	</body>
</html>
