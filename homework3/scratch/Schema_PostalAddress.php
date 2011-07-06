<?php
 
include_once("common_libs.php");

class Schema_PostalAddress extends Schema_ContactPoint {

// AddressCountry
// AddressLocality
// AddressRegion
// PostOfficeBoxNumber
// PostalCode
// StreetAddress

function __construct() {
   parent::__construct();
   $this->SchemaArray["itemType"] = "http://schema.org/PostalAddress";
}

function setAddressCountry($var) { //text
   $this->SchemaArray["addressCountry"] = $var;
}

function getAddressCountry() {
   return $this->SchemaArray["addressCountry"];
}

function setAddressLocality($var) { //text
   $this->SchemaArray["addressLocality"] = $var;
}

function getAddressLocality() {
   return $this->SchemaArray["addressLocality"];
}

function setAddressRegion($var) { //text
   $this->SchemaArray["addressRegion"] = $var;
}

function getAddressRegion() {
   return $this->SchemaArray["addressRegion"];
}

function setPostOfficeBoxNumber($var) { //text
   $this->SchemaArray["postOfficeBoxNumber"] = $var;
}

function getPostOfficeBoxNumber() {
   return $this->SchemaArray["postOfficeBoxNumber"];
}

function setPostalCode($var) { //text
   $this->SchemaArray["postalCode"] = $var;
}

function getPostalCode() {
   return $this->SchemaArray["postalCode"];
}

function setStreetAddress($var) { //text
   $this->SchemaArray["streetAddress"] = $var;
}

function getStreetAddress() {
   return $this->SchemaArray["streetAddress"];
}

}

?>
