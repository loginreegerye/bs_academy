<?php
require __DIR__ . '/vendor/autoload.php';

use Source\CoffeeMachine;
use Source\Drinks;
use Source\Recipe;
use Source\Ingredients;
use Source\Drink;

$cm = new CoffeeMachine();

//SHOW ALL RECIPES
var_dump($cm->viewAllRecipes());


//PREPARATION OF DRINKS ACCORDING TO KNOWN RECIPES
/*
var_dump($cm->makeDrink('espresso', ['coffee', 'water']));
var_dump($cm->makeDrink('doppio', ['espresso', 'espresso']));
var_dump($cm->makeDrink('americano', ['espresso', 'water']));
var_dump($cm->makeDrink('cappuccino', ['espresso', 'milk', 'whipped milk']));
*/


//ERRORS
/*
var_dump($cm->makeDrink('espesso', ['coffee', 'water']));
var_dump($cm->makeDrink('espresso', ['coffee', 'water', 'milk']));
var_dump($cm->makeDrink('espresso', ['coffee', 'war']));
var_dump($cm->makeDrink('espresso', ['water', 'coffee']));
*/


//ADD NEW RECIPE
/*
var_dump($cm->viewAllRecipes());
$cm->addNewRecipe('MYCOFFEE', ['espresso', 'espresso', 'milk', 'milk', 'whiskey']);
var_dump($cm->viewAllRecipes());
*/


//PREPARATION OF DRINK ACCORDING TO THE NEW RECIPE
/*
$cm->addNewRecipe('MYCOFFEE', ['espresso', 'espresso', 'milk', 'milk', 'whiskey']);
var_dump($cm->makeDrink('MYCOFFEE', ['espresso', 'espresso', 'milk', 'milk', 'whiskey']));
*/