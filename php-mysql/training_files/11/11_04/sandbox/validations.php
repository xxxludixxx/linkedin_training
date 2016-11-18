<!DOCTYPE html>

<html lang="en">
	<head>
		<title>Validations</title>
	</head>
	<body>

	<?php
	// * presence
	$value = 'x';
	if (!isset($value) || empty($value)) {
		echo "Validation failed.<br />";
	}
	// * string length
		// minimum length
	$value = "AAAABB";
	$min = 3;
	if (strlen($value) < $min) {
		echo "Validation failed - string too short.<br />";
	}
		// maximum length
	$max = 6;
	if (strlen($value) > $max) {
		echo "Validation failed - string too long.<br />";
	}
	// * type
	$value = "aaa";
	if (!is_string($value)) {
		echo "Validation failed - TYPE.<br />";
	}
	// * inclusion in a set
	$value = 2;
	$set = array("1", "2", "3", "4");
	if (!in_array($value, $set)) {
		echo "Validation failed - SET.<br />";
	}
	// * uniqueness
	// LATER

	// * format
	$value = "nobody@nowhere.com";
	if (!preg_match("/somebody@/", $value)) {
		echo "Validation failed";
	}

	?>

	</body>
</html>
