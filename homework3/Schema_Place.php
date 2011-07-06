<?php
 
include_once("common_libs.php");

class Schema_Place extends Schema_Thing {

// Address (of type Schema_PostalAddress)
// AggregateRating (of type Schema_AggregateRating)
// ContainedIn (of type Schema_Place)
// Events (of type Schema_Event)
// FaxNumber
// Geo (of type Schema_GeoCoordinates)
// InteractionCount
// Maps
// Photos (of type Schema_ImageObject)
// Reviews (of type Schema_Review)
// Telephone

function __construct() {
   parent::__construct();
   $this->SchemaArray["itemType"] = "http://schema.org/Place";
}

function setAddress(Schema_PostalAddress $var) {
   $this->SchemaArray["address"] = $var->SchemaArray;
}

function getAddress() {
   return $this->SchemaArray["address"];
}

function setAggregateRating(Schema_AggregateRating $var) {
   $this->SchemaArray["aggregateRating"] = $var->SchemaArray;
}

function getAggregateRating() {
   return $this->SchemaArray["aggregateRating"];
}

function setContainedIn(Schema_Place $var) {
   $this->SchemaArray["containedIn"] = $var->SchemaArray;
}

function getContainedIn() {
   return $this->SchemaArray["containedIn"];
}

function setEvents(Schema_Event $var) {
   $this->SchemaArray["events"] = $var->SchemaArray;
}

function getEvents() {
   return $this->SchemaArray["events"];
}

function setFaxNumber($var) { //text
   $this->SchemaArray["faxNumber"] = $var;
}

function getFaxNumber() {
   return $this->SchemaArray["faxNumber"];
}

function setGeo(Schema_GeoCoordinates $var) {
   $this->SchemaArray["geo"] = $var->SchemaArray;
}

function getGeo() {
   return $this->SchemaArray["geo"];
}

function setInteractionCount($var) { //text
   $this->SchemaArray["interactionCount"] = $var;
}

function getInteractionCount() {
   return $this->SchemaArray["interactionCount"];
}

function setMaps($var) { //URL
   if (isURL($var)) 
      $this->SchemaArray["maps"] = $var;
   else
      echo "$var is not a valid maps";
}

function getMaps() {
   return $this->SchemaArray["maps"];
}

function setPhotos(Schema_ImageObject $var) {
   $this->SchemaArray["photos"] = $var->SchemaArray;
}

function getPhotos() {
   return $this->SchemaArray["photos"];
}

function setReviews(Schema_Review $var) {
   $this->SchemaArray["reviews"] = $var->SchemaArray;
}

function getReviews() {
   return $this->SchemaArray["reviews"];
}

function setTelephone($var) { //text
   $this->SchemaArray["telephone"] = $var;
}

function getTelephone() {
   return $this->SchemaArray["telephone"];
}

}

?>
