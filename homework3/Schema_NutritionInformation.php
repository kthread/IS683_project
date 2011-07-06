<?php
 
include_once("common_libs.php");

class Schema_NutritionInformation extends Schema_Thing {

// Calories
// CarbohydrateContent
// CholesterolContent
// FatContent
// FiberContent
// ProteinContent 
// SaturatedFatContent 
// ServingSize
// SodiumContent 
// SugarContent 
// TransFatContent 
// UnsaturatedFatContent 

function __construct() {
   parent::__construct();
   $this->SchemaArray["itemType"] = "http://schema.org/NutritionInformation";
}

function setCalories($var) { //number
   $this->SchemaArray["calories"] = $var;
}

function getCalories() {
   return $this->SchemaArray["calories"];
}

function setCarbohydrateContent($var) { //number
   $this->SchemaArray["carbohydrateContent"] = $var;
}

function getCarbohydrateContent() {
   return $this->SchemaArray["carbohydrateContent"];
}

function setCholesterolContent($var) { //number
   $this->SchemaArray["cholesterolContent"] = $var;
}

function getCholesterolContent() {
   return $this->SchemaArray["cholesterolContent"];
}

function setFatContent($var) { //number
   $this->SchemaArray["fatContent"] = $var;
}

function getFatContent() {
   return $this->SchemaArray["fatContent"];
}

function setFiberContent($var) { //number
   $this->SchemaArray["fiberContent"] = $var;
}

function getFiberContent() {
   return $this->SchemaArray["fiberContent"];
}

function setProteinContent($var) { //number
   $this->SchemaArray["proteinContent"] = $var;
}

function getProteinContent() {
   return $this->SchemaArray["proteinContent"];
}

function setSaturatedFatContent($var) { //number
   $this->SchemaArray["saturatedFatContent"] = $var;
}

function getSaturatedFatContent() {
   return $this->SchemaArray["saturatedFatContent"];
}

function setServingSize($var) { //text
   $this->SchemaArray["servingSize"] = $var;
}

function getServingSize() {
   return $this->SchemaArray["servingSize"];
}

function setSodiumContent($var) { //number
   $this->SchemaArray["sodiumContent"] = $var;
}

function getSodiumContent() {
   return $this->SchemaArray["sodiumContent"];
}

function setSugarContent($var) { //number
   $this->SchemaArray["sugarContent"] = $var;
}

function getSugarContent() {
   return $this->SchemaArray["sugarContent"];
}

function setTransFatContent($var) { //number
   $this->SchemaArray["transFatContent"] = $var;
}

function getTransFatContent() {
   return $this->SchemaArray["transFatContent"];
}

function setUnsaturatedFatContent($var) { //number
   $this->SchemaArray["unsaturatedFatContent"] = $var;
}

function getUnsaturatedFatContent() {
   return $this->SchemaArray["unsaturatedFatContent"];
}

}

?>
