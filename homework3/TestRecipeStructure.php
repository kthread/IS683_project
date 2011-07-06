<?php

//Test for Recipe data structure

include_once("common_libs.php");

$myRecipe = new Schema_Recipe;
$myRecipe->setDescription('This classic banana bread recipe comes from my mom -- 
	the walnuts add a nice texture and flavor to the banana bread.');
$myRecipe->setImage('http://bestbananabread.com/bananabread.jpg');
$myRecipe->setName('Mom\'s World Famous Banana Bread');
$myRecipe->setURL('http://bestbananabread.com');

$myAuthor = new Schema_Person;
$myAuthor->setName('John Smith');
$myRecipe->setAuthor($myAuthor);

$myRecipe->setDatePublished('2009-05-08');
$myRecipe->setPrepTime('PT15M');
$myRecipe->setCookTime('PT1H');
$myRecipe->setRecipeYield('1 loaf');
$myRecipe->setIngredients('3 or 4 ripe bananas');
$myRecipe->setIngredients('1 egg');
$myRecipe->setIngredients('3/4 cup of sugar');
$myRecipe->setRecipeInstructions('Preheat the oven to 350 degrees. Mix in the ingredients in a bowl. Add
	the flour last. Pour the mixture into a loaf pan and bake for 1 hour.');
$myRecipe->setInteractionCount('UserComments: 140');

$nutritionInfo = new Schema_NutritionInformation;
$nutritionInfo->setCalories('240 calories');
$nutritionInfo->setFatContent('9 grams fat');
$myRecipe->setNutrition($nutritionInfo);

$MySchemaArray = $myRecipe->getSchemaArray();
var_dump($MySchemaArray);

echo "\n";
loopThroughArray($MySchemaArray);

?>
