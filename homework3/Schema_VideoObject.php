<?php
 
include_once("common_libs.php");

class Schema_VideoObject extends Schema_MediaObject {

// Caption
// ProductionCompany (of type Schema_Organization)
// Thumbnail (of type Schema_ImageObject)
// VideoFrameSize
// VideoQuality

function __construct() {
   parent::__construct();
   $this->SchemaArray["itemType"] = "http://schema.org/VideoObject";
}

function setCaption($var) { //text
   $this->SchemaArray["caption"] = $var;
}

function getCaption() {
   return $this->SchemaArray["caption"];
}

function setProductionCompany(Schema_Organization $var) {
   $this->SchemaArray["productionCompany"] = $var->SchemaArray;
}

function getProductionCompany() {
   return $this->SchemaArray["productionCompany"];
}

function setThumbnail(Schema_ImageObject $var) {
   $this->SchemaArray["thumbnail"] = $var;
}

function getThumbnail() {
   return $this->SchemaArray["thumbnail"];
}

function setVideoFrameSize($var) { //text
   $this->SchemaArray["videoFrameSize"] = $var;
}

function getVideoFrameSize() {
   return $this->SchemaArray["videoFrameSize"];
}

function setVideoQuality($var) { //text
   $this->SchemaArray["videoQuality"] = $var;
}

function getVideoQuality() {
   return $this->SchemaArray["videoQuality"];
}

}

?>
