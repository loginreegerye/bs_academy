<?php
require __DIR__ . '/vendor/autoload.php';

use Source\IIngredientIF;
use Source\Ingredient;
use Source\Drink;
use Source\CoffeeMachine;

$cm = new CoffeeMachine();

//ADD
/*
$drink_espr = new Drink("espresso", [new Ingredient("coffee"), new Ingredient("water")]);
$drink_moch = new Drink("mocha", [new Ingredient("chocolate"), $drink_espr, new Ingredient("milk"), new Ingredient("whipped cream")]);
$drink_iris = new Drink("irish", [$drink_espr, $drink_espr, new Ingredient("whisky"), new Ingredient("whipped cream")]);

$cm->addDrink($drink_espr);
$cm->addDrink($drink_moch);
$cm->addDrink($drink_iris);

$res_drink1 = $cm->make("mocha", ["chocolate", "espresso", "milk", "whipped cream"]);
var_dump($res_drink1);
$res_drink2 = $cm->make("irish", ["espresso", "espresso", "whisky", "whipped cream"]);
var_dump($res_drink2);
*/



//MAKE
/*
try {
	$drink_cap = $cm->make("cappuccino", ["espresso", "milk", "whipped milk"]);
	var_dump($drink_cap);
	$drink_esp = $cm->make("espresso", ["coffee", "water"]);
	var_dump($drink_esp);
	$drink_amr = $cm->make("americano", ["espresso", "water"]);
	var_dump($drink_amr);
	$drink_dop = $cm->make("doppio", ["espresso", "espresso"]);
	var_dump($drink_dop);
} catch(Exception $e) {
	echo $e->getMessage();
}
*/



//ERROR
/*
try {
	$drink = $cm->make("cappucino", ["espresso", "milk", "whipped milk"]);
	var_dump($drink);
} catch(Exception $e) {
	echo $e->getMessage();
}
*/