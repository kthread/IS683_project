<?php
 
include_once("common_libs.php");

class Schema_MediaObject extends Schema_CreativeWork {

// Bitrate
// ContentSize
// ContentURL
// Duration
// EmbedURL
// EncodesCreativeWork (of type Schema_CreativeWork)
// EncodingFormat
// Expires
// Height
// PlayerType
// RegionsAllowed (of type Schema_Place)
// RequiresSubscription
// UploadDate
// Width

function __construct() {
   parent::__construct();
   $this->SchemaArray["itemType"] = "http://schema.org/MediaObject";
}

function setBitrate($var) { //text
   $this->SchemaArray["bitrate"] = $var;
}

function getBitrate() {
   return $this->SchemaArray["bitrate"];
}

function setContentSize($var) { //text
   $this->SchemaArray["contentSize"] = $var;
}

function getContentSize() { //text
   return $this->SchemaArray["contentSize"];
}

function setContentURL($var) { //URL
   if (isURL($var)) 
      $this->SchemaArray["contentURL"] = $var;
   else
      echo "$var is not a valid contentURL";
}

function getContentURL() {
   return $this->SchemaArray["contentURL"];
}

function setDuration($var) { //duration
   if (isDuration($var)) 
      $this->SchemaArray["duration"] = $var;
   else
      echo "$var is not a valid duration";
}

function getDuration() {
   return $this->SchemaArray["duration"];
}

function setEmbedURL($var) { //URL
   if (isURL($var)) 
      $this->SchemaArray["embedURL"] = $var;
   else
      echo "$var is not a valid embedURL";
}

function getEmbedURL() {
   return $this->SchemaArray["embedURL"];
}

function setEncodesCreativeWork(Schema_CreativeWork $var) {
   $this->SchemaArray["encodesCreativeWork"] = $var->SchemaArray;
}

function getEncodesCreativeWork() {
   return $this->SchemaArray["encodesCreativeWork"];
}

function setEncodingFormat($var) { //text
   $this->SchemaArray["encodingFormat"] = $var;
}

function getEncodingFormat() {
   return $this->SchemaArray["encodingFormat"];
}

function setExpires($var) { //date
   if (isDate($var)) 
      $this->SchemaArray["expires"] = $var;
   else
      echo "$var is not a valid expires";
}

function getExpires() {
   return $this->SchemaArray["expires"];
}

function setHeight($var) { //distance(number)
   $this->SchemaArray["height"] = $var;
}

function getHeight() {
   return $this->SchemaArray["height"];
}

function setPlayerType($var) { //text
   $this->SchemaArray["playerType"] = $var;
}

function getPlayerType() {
   return $this->SchemaArray["playerType"];
}

function setRegionsAllowed(Schema_Place $var) {
   $this->SchemaArray["regionsAllowed"] = $var->SchemaArray;
}

function getRegionsAllowed() {
   return $this->SchemaArray["regionsAllowed"];
}

function setRequiresSubscription($var) { //boolean
   $this->SchemaArray["requiresSubscription"] = $var;
}

function getRequiresSubscription() {
   return $this->SchemaArray["requiresSubscription"];
}

function setUploadDate($var) { //date
   if (isDate($var)) 
      $this->SchemaArray["uploadDate"] = $var;
   else
      echo "$var is not a valid uploadDate";
}

function getUploadDate() {
   return $this->SchemaArray["uploadDate"];
}

function setWidth($var) { //distance(number)
   $this->SchemaArray["width"] = $var;
}

function getWidth() {
   return $this->SchemaArray["width"];
}

}

?>
