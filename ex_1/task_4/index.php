<?php
require __DIR__ . '/vendor/autoload.php';

use Source\RandomQuote;
use Source\Application;
?>
<!doctype html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<title>Test</title>
	</head>
	<body>
		<div class="wrapper">
			<p>Quote: <?php echo Application::start(); ?></p>
			<p>Powered by <?php echo $_SERVER['SERVER_SOFTWARE']; ?></p>
		</div>
	</body>
<html>