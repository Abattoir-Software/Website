<?php
function write_header($title, $flashContent = "") {
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title><?php echo $title; ?></title>
	<script src="assets/js/jquery-3.7.1.min.js"></script>
	<script src="assets/js/custom.min.js"></script>
	<link href="assets/css/theme.min.css" rel="stylesheet">
	<link href="assets/css/custom.min.css" rel="stylesheet">
</head>
<body>
<?php
}
?>
