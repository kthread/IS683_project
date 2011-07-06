<?php
 
include_once("common_libs.php");

class Schema_Review extends Schema_CreativeWork {

// ItemReviewed (of type Schema_Thing)
// ReviewBody
// ReviewRating (of type Schema_Rating)

function __construct() {
   parent::__construct();
   $this->SchemaArray["itemType"] = "http://schema.org/Review";
}

function setItemReviewed(Schema_Thing $var) {
   $this->SchemaArray["itemReviewed"] = $var->SchemaArray;
}

function getItemReviewed() {
   return $this->SchemaArray["itemReviewed"];
}

function setReviewBody($var) { //text
   $this->SchemaArray["reviewBody"] = $var;
}

function getReviewBody() {
   return $this->SchemaArray["reviewBody"];
}

function setReviewRating(Schema_Rating $var) {
   $this->SchemaArray["reviewRating"] = $var->SchemaArray;
}

function getReviewRating() {
   return $this->SchemaArray["reviewRating"];
}

}

?>
