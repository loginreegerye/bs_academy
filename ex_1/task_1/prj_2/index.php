<?php
require __DIR__ . '/vendor/autoload.php';

use Westeros\Crownlands\TommenBaratheon,
	Westeros\Dorne\DoranMartell,
	Westeros\Riverlands\PetyrBaelish,
	Westeros\Stormlands\TommenI,
	Westeros\Westerlands\CerseiLannister;

TommenBaratheon::whoami();
DoranMartell::whoami();
PetyrBaelish::whoami();
TommenI::whoami();
CerseiLannister::whoami();