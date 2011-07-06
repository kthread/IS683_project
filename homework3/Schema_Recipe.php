<?php
 
include_once("common_libs.php");

class Schema_Recipe extends Schema_CreativeWork {

// CookTime
// CookingMethod
// Ingredients
// Nutrition (of type NutritionInformation)
// PrepTime
// RecipeCategory
// RecipeCuisine
// RecipeInstructions
// RecipeYield
// TotalTime

function __construct() {
   parent::__construct();
   $this->SchemaArray["itemType"] = "http://schema.org/Recipe";
}

function setCookTime($var) { //duration
   if (isDuration($var)) 
      $this->SchemaArray["cookTime"] = $var;
   else
      echo "$var is not a valid cookTime";
}

function getCookTime() {
   return $this->SchemaArray["cookTime"];
}

function setCookingMethod($var) { //text
   $this->SchemaArray["cookingMethod"] = $var;
}

function getCookingMethod() {
   return $this->SchemaArray["cookingMethod"];
}

function setIngredients($var) { //text
   $this->SchemaArray["ingredients"][] = $var;
}

function getIngredients() {
   return $this->SchemaArray["ingredients"];
}

function setNutrition(Schema_NutritionInformation $var) {
   $this->SchemaArray["nutrition"] = $var->SchemaArray;
}

function getNutrition() {
   return $this->SchemaArray["nutrition"];
}

function setPrepTime($var) { //duration
   if (isDuration($var)) 
      $this->SchemaArray["prepTime"] = $var;
   else
      echo "$var is not a valid prepTime";
}

function getPrepTime() {
   return $this->SchemaArray["prepTime"];
}

function setRecipeCategory($var) { //text
   $this->SchemaArray["recipeCategory"] = $var;
}

function getRecipeCategory() {
   return $this->SchemaArray["recipeCategory"];
}

function setRecipeCuisine($var) { //text
   $this->SchemaArray["recipeCuisine"] = $var;
}

function getRecipeCuisine() {
   return $this->SchemaArray["recipeCuisine"];
}

function setRecipeInstructions($var) { //text
   $this->SchemaArray["recipeInstructions"] = $var;
}

function getRecipeInstructions() {
   return $this->SchemaArray["recipeInstructions"];
}

function setRecipeYield($var) { //text
   $this->SchemaArray["recipeYield"] = $var;
}

function getRecipeYield() {
   return $this->SchemaArray["recipeYield"];
}

function setTotalTime($var) { //duration
   if (isDuration($var)) 
      $this->SchemaArray["totalTime"] = $var;
   else
      echo "$var is not a valid totalTime";
}

function getTotalTime() {
   return $this->SchemaArray["totalTime"];
}

}

?>
