<?php
 
include_once("common_libs.php");

class Schema_Organization extends Schema_Thing {

// Address (of type Schema_PostalAddress)
// AggregateRating (of type Schema_AggregateRating)
// ContactPoints (of type Schema_ContactPoint)
// Email
// Employees (of type Schema_Person)
// Events (of type Schema_Event)
// FaxNumber
// Founders (of type Schema_Person)
// FoundingDate
// InteractionCount
// Location (of type Schema_Place or Schema_PostalAddress)
// Members (of type Schema_Person or Schema_Organization)
// Reviews (of type Schema_Review)
// Telephone

function __construct() {
   parent::__construct();
   $this->SchemaArray["itemType"] = "http://schema.org/Organization";
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

function setContactPoints(Schema_ContactPoint $var) {
   $this->SchemaArray["contactPoints"] = $var->SchemaArray;
}

function getContactPoints() {
   return $this->SchemaArray["contactPoints"];
}

function setEmail($var) { //text
   $this->SchemaArray["email"] = $var;
}

function getEmail() {
   return $this->SchemaArray["email"];
}

function setEmployees(Schema_Person $var) {
   $this->SchemaArray["employees"] = $var->SchemaArray;
}

function getEmployees() {
   return $this->SchemaArray["employees"];
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

function getFaxNumber() { //text
   return $this->SchemaArray["faxNumber"];
}

function setFounders(Schema_Person $var) {
   $this->SchemaArray["founders"] = $var->SchemaArray;
}

function getFounders() {
   return $this->SchemaArray["founders"];
}

function setFoundingDate($var) { //date
   if (isDate($var)) 
      $this->SchemaArray["foundingDate"] = $var;
   else
      echo "$var is not a valid foundingDate";
}

function getFoundingDate() {
   return $this->SchemaArray["foundingDate"];
}

function setInteractionCount($var) { //text
   $this->SchemaArray["interactionCount"] = $var;
}

function getInteractionCount() {
   return $this->SchemaArray["interactionCount"];
}

// Location (of type Schema_Place or Schema_PostalAddress)
function setLocation(Schema_Thing $var) {
   $this->SchemaArray["location"] = $var->SchemaArray;
}

function getLocation() {
   return $this->SchemaArray["location"];
}

// Members (of type Schema_Person or Schema_Organization)
function setMembers(Schema_Thing $var) {
   $this->SchemaArray["members"] = $var->SchemaArray;
}

function getMembers() {
   return $this->SchemaArray["members"];
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
