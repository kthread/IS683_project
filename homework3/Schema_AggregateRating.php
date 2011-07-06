<?php
 
include_once("common_libs.php");

class Schema_AggregateRating extends Schema_Rating {

// ItemReviewed
// RatingCount
// ReviewCount

function __construct() {
   parent::__construct();
   $this->SchemaArray["itemType"] = "http://schema.org/AggregateRating";
}

function setItemReviewed(Schema_Thing $var) {
   $this->SchemaArray["itemReviewed"] = $var->SchemaArray;
}

function getItemReviewed() {
   return $this->SchemaArray["itemReviewed"];
}

function setRatingCount($var) { //number
   if (is_int($var)) 
      $this->SchemaArray["ratingCount"] = $var;
   else
      echo "$var is not a valid ratingCount";
}

function getRatingCount() {
   return $this->SchemaArray["ratingCount"];
}

function setReviewCount($var) { //number
   if (is_int($var)) 
      $this->SchemaArray["reviewCount"] = $var;
   else
      echo "$var is not a valid reviewCount";
}

function getReviewCount() {
   return $this->SchemaArray["reviewCount"];
}

}

?>
