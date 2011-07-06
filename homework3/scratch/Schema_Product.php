<?php
 
include_once("common_libs.php");

class Schema_Product extends Schema_Thing {

// AggregateRating (of type Schema_AggregateRating)
// Brand (of type Schema_Organization)
// Manufacturer (of type Schema_Organization)
// Model
// Offers (of type Schema_Offer)
// ProductID
// Reviews (of type Schema_Review)

function __construct() {
   parent::__construct();
   $this->SchemaArray["itemType"] = "http://schema.org/Product";
}

function setAggregateRating(Schema_AggregateRating $var) {
   $this->SchemaArray["aggregateRating"] = $var->SchemaArray;
}

function getAggregateRating() {
   return $this->SchemaArray["aggregateRating"];
}

function setBrand(Schema_Organization $var) {
   $this->SchemaArray["brand"] = $var->SchemaArray;
}

function getBrand() {
   return $this->SchemaArray["brand"];
}

function setManufacturer(Schema_Organization $var) {
   $this->SchemaArray["manufacturer"] = $var->SchemaArray;
}

function getManufacturer() {
   return $this->SchemaArray["manufacturer"];
}

function setModel($var) { //text
   $this->SchemaArray["model"] = $var;
}

function getModel() {
   return $this->SchemaArray["model"];
}

function setOffers(Schema_Offer $var) {
   $this->SchemaArray["offers"] = $var->SchemaArray;
}

function getOffers() {
   return $this->SchemaArray["offers"];
}

function setProductID($var) { //text
   $this->SchemaArray["productID"] = $var;
}

function getProductID() {
   return $this->SchemaArray["productID"];
}

function setReviews(Schema_Review $var) {
   $this->SchemaArray["reviews"] = $var->SchemaArray;
}

function getReviews() {
   return $this->SchemaArray["reviews"];
}

}

?>
