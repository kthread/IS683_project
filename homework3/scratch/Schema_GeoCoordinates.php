<?php
 
include_once("common_libs.php");

class Schema_GeoCoordinates extends Schema_Thing {

// Elevation
// Latitude
// Longitude

function __construct() {
   parent::__construct();
   $this->SchemaArray["itemType"] = "http://schema.org/GeoCoordinates";
}

function setElevation($var) { //text
   $this->SchemaArray["elevation"] = $var;
}

function getElevation() {
   return $this->SchemaArray["elevation"];
}

function setLatitude($var) { //text
   $this->SchemaArray["latitude"] = $var;
}

function getLatitude() {
   return $this->SchemaArray["latitude"];
}

function setLongitude($var) { //text
   $this->SchemaArray["longitude"] = $var;
}

function getLongitude() {
   return $this->SchemaArray["longitude"];
}

}

?>
