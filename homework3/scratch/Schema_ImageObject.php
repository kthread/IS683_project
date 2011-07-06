<?php
 
include_once("common_libs.php");

class Schema_ImageObject extends Schema_MediaObject {

// Caption
// ExifData
// RepresentativeOfPage
// Thumbnail (of type Schema_ImageObject)

function __construct() {
   parent::__construct();
   $this->SchemaArray["itemType"] = "http://schema.org/ImageObject";
}

function setCaption($var) { //text
   $this->SchemaArray["caption"] = $var;
}

function getCaption() {
   return $this->SchemaArray["caption"];
}

function setExifData($var) { //text
   $this->SchemaArray["exifData"] = $var;
}

function getExifData() { //text
   return $this->SchemaArray["exifData"];
}

function setRepresentativeOfPage($var) { //boolean
   $this->SchemaArray["representativeOfPage"] = $var;
}

function getRepresentativeOfPage() {
   return $this->SchemaArray["representativeOfPage"];
}

function setThumbnail(Schema_ImageObject $var) {
   $this->SchemaArray["thumbnail"] = $var->SchemaArray;
}

function getThumbnail() {
   return $this->SchemaArray["thumbnail"];
}

}

?>
