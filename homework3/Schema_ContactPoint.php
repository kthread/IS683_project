<?php
 
include_once("common_libs.php");

class Schema_ContactPoint extends Schema_Thing {

// ContactType
// Email
// FaxNumber
// Telephone

function __construct() {
   parent::__construct();
   $this->SchemaArray["itemType"] = "http://schema.org/ContactPoint";
}

function setContactType($var) { //text
   $this->SchemaArray["contactType"] = $var;
}

function getContactType() {
   return $this->SchemaArray["contactType"];
}

function setEmail($var) { //text
   $this->SchemaArray["email"] = $var;
}

function getEmail() {
   return $this->SchemaArray["email"];
}

function setFaxNumber($var) { //text
   $this->SchemaArray["faxNumber"] = $var;
}

function getFaxNumber() {
   return $this->SchemaArray["faxNumber"];
}

function setTelephone($var) { //text
   $this->SchemaArray["telephone"] = $var;
}

function getTelephone() {
   return $this->SchemaArray["telephone"];
}

}

?>
