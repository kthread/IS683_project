<?php
 
include_once("common_libs.php");

class Schema_Rating extends Schema_Thing {

// BestRating
// RatingValue
// WorstRating

function __construct() {
   parent::__construct();
   $this->SchemaArray["itemType"] = "http://schema.org/Rating";
}

function setBestRating($var) { //number or text
   $this->SchemaArray["bestRating"] = $var;
}

function getBestRating() {
   return $this->SchemaArray["bestRating"];
}

function setRatingValue($var) { //text
   $this->SchemaArray["ratingValue"] = $var;
}

function getRatingValue() {
   return $this->SchemaArray["ratingValue"];
}

function setWorstRating($var) { //number or text
   $this->SchemaArray["worstRating"] = $var;
}

function getWorstRating() {
   return $this->SchemaArray["worstRating"];
}

}

?>
