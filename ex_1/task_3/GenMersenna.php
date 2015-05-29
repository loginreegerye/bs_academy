<?php
function mersennNumbersGenerator() {
	for($i = 1; $i < 11; ++$i) {
		yield (pow(2, $i) - 1);
	}
}

foreach(mersennNumbersGenerator() as $value) {
	echo $value.PHP_EOL;
}