<?php
 
include_once("common_libs.php");

class Schema_Thing {

// Description
// Image
// Name
// URL

protected $SchemaArray;

function __construct() {
   $this->SchemaArray["itemType"] = "http://schema.org/Thing";
}

function getSchemaArray() {
   return $this->SchemaArray;
}

function getItemType() {
   return $this->SchemaArray["itemType"];
}

function setDescription($var) { //text
   $this->SchemaArray["description"] = $var;
}

function getDescription() {
   return $this->SchemaArray["description"];
}

function setImage($var) { //URL
   if (isURL($var)) 
      $this->SchemaArray["image"] = $var;
   else
      echo "$var is not a valid image URL";
}

function getImage() {
   return $this->SchemaArray["image"];
}

function setName($var) { //text
   $this->SchemaArray["name"] = $var;
}

function getName() {
   return $this->SchemaArray["name"];
}

function setURL($var) { //URL
   if (isURL($var)) 
      $this->SchemaArray["url"] = $var;
   else
      echo "$var is not a valid URL";
}

function getURL() {
   return $this->SchemaArray["url"];
}

}

?>
