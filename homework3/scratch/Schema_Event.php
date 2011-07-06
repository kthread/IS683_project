<?php
 
include_once("common_libs.php");

class Schema_Event extends Schema_Thing {

// Attendees (of type Schema_Person or Schema_Organization)
// Duration
// EndDate
// Location (of type Schema_Place or Schema_PostalAddress)
// Offers (of type Schema_Offer)
// Performers (of type Schema_Person or Schema_Organization)
// StartDate
// SubEvents (of type Schema_Event)
// SuperEvent (of type Schema_Event)

function __construct() {
   parent::__construct();
   $this->SchemaArray["itemType"] = "http://schema.org/Event";
}

// Attendees (of type Schema_Person or Schema_Organization)
function setAttendees (Schema_Thing $var) {
   $this->SchemaArray["attendees"] = $var->SchemaArray;
}

function getAttendees() {
   return $this->SchemaArray["attendees"];
}

function setDuration($var) { //duration(number)
   if (isDuration($var)) 
      $this->SchemaArray["duration"] = $var;
   else
      echo "$var is not a valid duration";
}

function getDuration() {
   return $this->SchemaArray["duration"];
}

function setEndDate($var) { //date
   if (isDate($var)) 
      $this->SchemaArray["endDate"] = $var;
   else
      echo "$var is not a valid endDate";
}

function getEndDate() {
   return $this->SchemaArray["endDate"];
}

// Location (of type Schema_Place or Schema_PostalAddress)
function setLocation(Schema_Place $var) {
   $this->SchemaArray["location"] = $var->SchemaArray;
}

function getLocation() {
   return $this->SchemaArray["location"];
}

function setOffers(Schema_Offer $var) {
   $this->SchemaArray["offers"] = $var->SchemaArray;
}

function getOffers() {
   return $this->SchemaArray["offers"];
}

// Performers (of type Schema_Person or Schema_Organization)
function setPerformers(Schema_Thing $var) {
   $this->SchemaArray["performers"] = $var->SchemaArray;
}

function getPerformers() {
   return $this->SchemaArray["performers"];
}

function setStartDate($var) { //date
   if (isDate($var)) 
      $this->SchemaArray["startDate"] = $var;
   else
      echo "$var is not a valid startDate";
}

function getStartDate() {
   return $this->SchemaArray["startDate"];
}

function setSubEvents(Schema_Event $var) {
   $this->SchemaArray["subEvents"] = $var->SchemaArray;
}

function getSubEvents() {
   return $this->SchemaArray["subEvents"];
}

function setSuperEvent(Schema_Event $var) {
   $this->SchemaArray["superEvent"] = $var->SchemaArray;
}

function getSuperEvent() {
   return $this->SchemaArray["superEvent"];
}

}

?>
