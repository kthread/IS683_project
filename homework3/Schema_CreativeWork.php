<?php
 
include_once("common_libs.php");

class Schema_CreativeWork extends Schema_Thing {

// About (of type Schema_Thing)
// AggregateRating (of type Schema_AggregateRating)
// AudioObject (of type Schema_AudioObject)
// Author (of type Schema_Person or Schema_Organization)
// Awards 
// ContentLocations (of type Schema_Place)
// ContentRating 
// DatePublished 
// Editor (of type Schema_Person)
// Encodings (of type Schema_MediaObject)
// Genre 
// Headline 
// InLanguage 
// InteractionCount
// IsFamilyFriendly 
// Keywords 
// Offers (of type Schema_Offer)
// Publisher (of type Schema_Organization)
// Reviews (of type Schema_Review)
// Video (of type Schema_VideoObject)

function __construct() {
   parent::__construct();
   $this->SchemaArray["itemType"] = "http://schema.org/CreativeWork";
}

function setAbout(Schema_Thing $var) {
   $this->SchemaArray["about"] = $var->SchemaArray;
}

function getAbout() {
   return $this->SchemaArray["about"];
}

function setAggregateRating(Schema_AggregateRating $var) {
   $this->SchemaArray["aggregateRating"] = $var->SchemaArray;
}

function getAggregateRating() {
   return $this->SchemaArray["aggregateRating"];
}

function setAudioObject(Schema_AudioObject $var) {
   $this->SchemaArray["audioObject"] = $var->SchemaArray;
}

function getAudioObject() {
   return $this->SchemaArray["audioObject"];
}

function setAuthor(Schema_Thing $var) { //$var is of type Schema_Person or Schema_Organization
   $this->SchemaArray["author"] = $var->SchemaArray;
}

function getAuthor() {
   return $this->SchemaArray["author"];
}

function setAwards($var) { //text
   $this->SchemaArray["awards"] = $var;
}

function getAwards() {
   return $this->SchemaArray["awards"];
}

function setContentLocations(Schema_Place $var) {
   $this->SchemaArray["contentLocations"] = $var->SchemaArray;
}

function getContentLocations() {
   return $this->SchemaArray["contentLocations"];
}

function setContentRating($var) { //text
   $this->SchemaArray["contentRating"] = $var;
}

function getContentRating() {
   return $this->SchemaArray["contentRating"];
}

function setDatePublished($var) { //date
   if (isDate($var)) 
      $this->SchemaArray["datePublished"] = $var;
   else
      echo "$var is not a valid datePublished";
}

function getDatePublished() {
   return $this->SchemaArray["datePublished"];
}

function setEditor(Schema_Person $var) {
   $this->SchemaArray["editor"] = $var->SchemaArray;
}

function getEditor() {
   return $this->SchemaArray["editor"];
}

function setEncodings(Schema_MediaObject $var) {
   $this->SchemaArray["encodings"] = $var->SchemaArray;
}

function getEncodings() {
   return $this->SchemaArray["encodings"];
}

function setGenre($var) { //text
   $this->SchemaArray["genre"] = $var;
}

function getGenre() {
   return $this->SchemaArray["genre"];
}

function setHeadline($var) { //text
   $this->SchemaArray["headline"] = $var;
}

function getHeadline() {
   return $this->SchemaArray["headline"];
}

function setInLanguage($var) { //text
   $this->SchemaArray["inLanguage"] = $var;
}

function getInLanguage() {
   return $this->SchemaArray["inLanguage"];
}

function setInteractionCount($var) { //text
   $this->SchemaArray["interactionCount"] = $var;
}

function getInteractionCount() {
   return $this->SchemaArray["interactionCount"];
}

function setIsFamilyFriendly($var) { //boolean
   $this->SchemaArray["isFamilyFriendly"] = $var;
}

function getIsFamilyFriendly() {
   return $this->SchemaArray["isFamilyFriendly"];
}

function setKeywords($var) { //text
   $this->SchemaArray["keywords"] = $var;
}

function getKeywords() {
   return $this->SchemaArray["keywords"];
}

function setOffers(Schema_Offer $var) {
   $this->SchemaArray["offers"] = $var->SchemaArray;
}

function getOffers() {
   return $this->SchemaArray["offers"];
}

function setPublisher(Schema_Organization $var) {
   $this->SchemaArray["publisher"] = $var->SchemaArray;
}

function getPublisher() {
   return $this->SchemaArray["publisher"];
}

function setReviews(Schema_Review $var) {
   $this->SchemaArray["reviews"] = $var->SchemaArray;
}

function getReviews() {
   return $this->SchemaArray["reviews"];
}

function setVideo(Schema_VideoObject $var) {
   $this->SchemaArray["video"] = $var->SchemaArray;
}

function getVideo() {
   return $this->SchemaArray["video"];
}

}

?>
