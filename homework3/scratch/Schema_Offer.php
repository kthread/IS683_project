<?php
 
include_once("common_libs.php");

class Schema_Offer extends Schema_Thing {

// AggregateRating (of type Schema_AggregateRating)
// Availability
// ItemCondition
// ItemOffered (of type Schema_Product)
// Price
// PriceCurrency
// PriceValidUntil
// Reviews (of type Schema_Review)
// Seller (of type Schema_Organization)

function __construct() {
   parent::__construct();
   $this->SchemaArray["itemType"] = "http://schema.org/Offer";
}

function setAggregateRating(Schema_AggregateRating $var) {
   $this->SchemaArray["aggregateRating"] = $var->SchemaArray;
}

function getAggregateRating() {
   return $this->SchemaArray["aggregateRating"];
}

function setAvailability($var) { //text
   if(($var != "Discontinued") && ($var != "InStock") && ($var != "InStoreOnly") &&
      ($var != "OnlineOnly") && ($var != "OutOfStock") && ($var != "PreOrder"))
      echo"$var is not a valid Availability descriptor\n";
   else
      $this->SchemaArray["availability"] = $var;
}

function getAvailability() {
   return $this->SchemaArray["availability"];
}

function setItemCondition($var) { //text
   if(($var != "DamagedCondition") && ($var != "NewCondition") && ($var != "RefurbishedCondition") &&
      ($var != "UsedCondition"))
      echo"$var is not a valid ItemCondition descriptor\n";
   else
      $this->SchemaArray["itemCondition"] = $var;
}

function getItemCondition() {
   return $this->SchemaArray["itemCondition"];
}

function setItemOffered(Schema_Product$var) {
   $this->SchemaArray["itemOffered"] = $var->SchemaArray;
}

function getItemOffered() {
   return $this->SchemaArray["itemOffered"];
}

function setPrice($var) { //text
   $this->SchemaArray["price"] = $var;
}

function getPrice() {
   return $this->SchemaArray["price"];
}

function setPriceCurrency($var) { //text
   $this->SchemaArray["priceCurrency"] = $var;
}

function getPriceCurrency() {
   return $this->SchemaArray["priceCurrency"];
}

function setPriceValidUntil($var) { //date
   if (isDate($var)) 
      $this->SchemaArray["priceValidUntil"] = $var;
   else
      echo "$var is not a valid priceValidUntil";
}

function getPriceValidUntil() {
   return $this->SchemaArray["priceValidUntil"];
}

function setReviews(Schema_Review $var) {
   $this->SchemaArray["reviews"] = $var->SchemaArray;
}

function getReviews() {
   return $this->SchemaArray["reviews"];
}

function setSeller(Schema_Organization $var) {
   $this->SchemaArray["seller"] = $var->SchemaArray;
}

function getSeller() {
   return $this->SchemaArray["seller"];
}

}

?>
