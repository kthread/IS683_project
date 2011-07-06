<?php
 
include_once("common_libs.php");

class Schema_Person extends Schema_Thing {

// Address (of type Schema_PostalAddress)
// Affiliation (of type Schema_Organization)
// AlumniOf (of type Schema_EducationalOrganization)
// Awards
// BirthDate
// Children (of type Schema_Person)
// Colleagues (of type Schema_Person)
// ContactPoints (of type Schema_ContactPoint)
// DeathDate
// Email
// FaxNumber
// Follows (of type Schema_Person)
// Gender
// HomeLocation (of type Schema_Place or Schema_ContactPoint)
// InteractionCount
// JobTitle
// Knows (of type Schema_Person)
// MemberOf (of type Schema_Organization)
// Nationality (of type Schema_Country)
// Parents (of type Schema_Person)
// PerformerIn (of type Schema_Event)
// RelatedTo (of type Schema_Person)
// Siblings (of type Schema_Person)
// Spouse (of type Schema_Person)
// Telephone
// WorkLocation (of type Schema_Place or Schema_ContactPoint)
// WorksFor (of type Schema_Organization)

function __construct() {
   parent::__construct();
   $this->SchemaArray["itemType"] = "http://schema.org/Person";
}

function setAddress(Schema_PostalAddress $var) {
   $this->SchemaArray["address"] = $var->SchemaArray;
}

function getAddress() {
   return $this->SchemaArray["address"];
}

function setAffiliation(Schema_Organization $var) {
   $this->SchemaArray["affiliation"] = $var->SchemaArray;
}

function getAffiliation() {
   return $this->SchemaArray["affiliation"];
}

function setAlumniOf(Schema_EducationalOrganization $var) {
   $this->SchemaArray["alumniOf"] = $var->SchemaArray;
}

function getAlumniOf() {
   return $this->SchemaArray["alumniOf"];
}

function setAwards($var) { //text
   $this->SchemaArray["awards"] = $var;
}

function getAwards() {
   return $this->SchemaArray["awards"];
}

function setBirthDate($var) { //date
   if (isDate($var)) 
      $this->SchemaArray["birthDate"] = $var;
   else
      echo "$var is not a valid birthDate";
}

function getBirthDate() {
   return $this->SchemaArray["birthDate"];
}

function setChildren(Schema_Person $var) {
   $this->SchemaArray["children"] = $var->SchemaArray;
}

function getChildren() {
   return $this->SchemaArray["children"];
}

function setColleagues(Schema_Person $var) {
   $this->SchemaArray["colleagues"] = $var->SchemaArray;
}

function getColleagues() {
   return $this->SchemaArray["colleagues"];
}

function setContactPoints(Schema_ContactPoint $var) {
   $this->SchemaArray["contactPoints"] = $var->SchemaArray;
}

function getContactPoints() {
   return $this->SchemaArray["contactPoints"];
}

function setDeathDate($var) { //date
   if (isDate($var)) 
      $this->SchemaArray["deathDate"] = $var;
   else
      echo "$var is not a valid deathDate";
}

function getDeathDate() {
   return $this->SchemaArray["deathDate"];
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

function getFaxNumber() { //text
   return $this->SchemaArray["faxNumber"];
}

function setFollows(Schema_Person $var) {
   $this->SchemaArray["follows"] = $var->SchemaArray;
}

function getFollows() {
   return $this->SchemaArray["follows"];
}

function setGender($var) { //text
   $this->SchemaArray["gender"] = $var;
}

function getGender() {
   return $this->SchemaArray["gender"];
}

// HomeLocation (of type Schema_Place or Schema_ContactPoint)
function setHomeLocation(Schema_Thing $var) {
   $this->SchemaArray["homeLocation"] = $var->SchemaArray;
}

function getHomeLocation() {
   return $this->SchemaArray["homeLocation"];
}

function setInteractionCount($var) { //text
   $this->SchemaArray["interactionCount"] = $var;
}

function getInteractionCount() {
   return $this->SchemaArray["interactionCount"];
}

function setJobTitle($var) { //text
   $this->SchemaArray["jobTitle"] = $var;
}

function getJobTitle() {
   return $this->SchemaArray["jobTitle"];
}

function setKnows(Schema_Person $var) {
   $this->SchemaArray["knows"] = $var->SchemaArray;
}

function getKnows() {
   return $this->SchemaArray["knows"];
}

function setMemberOf(Schema_Organization $var) {
   $this->SchemaArray["memberOf"] = $var->SchemaArray;
}

function getMemberOf() {
   return $this->SchemaArray["memberOf"];
}

function setNationality(Schema_Country $var) {
   $this->SchemaArray["nationality"] = $var->SchemaArray;
}

function getNationality() {
   return $this->SchemaArray["nationality"];
}

function setParents(Schema_Person $var) {
   $this->SchemaArray["parents"] = $var->SchemaArray;
}

function getParents() {
   return $this->SchemaArray["parents"];
}

function setPerformerIn(Schema_Event $var) {
   $this->SchemaArray["performerIn"] = $var->SchemaArray;
}

function getPerformerIn() {
   return $this->SchemaArray["performerIn"];
}

function setRelatedTo(Schema_Person $var) {
   $this->SchemaArray["relatedTo"] = $var->SchemaArray;
}

function getRelatedTo() {
   return $this->SchemaArray["relatedTo"];
}

function setSiblings(Schema_Person $var) {
   $this->SchemaArray["siblings"] = $var->SchemaArray;
}

function getSiblings() {
   return $this->SchemaArray["siblings"];
}

function setSpouse(Schema_Person $var) {
   $this->SchemaArray["spouse"] = $var->SchemaArray;
}

function getSpouse() {
   return $this->SchemaArray["spouse"];
}

function setTelephone($var) { //text
   $this->SchemaArray["telephone"] = $var;
}

function getTelephone() {
   return $this->SchemaArray["telephone"];
}

// WorkLocation (of type Schema_Place or Schema_ContactPoint)
function setWorkLocation(Schema_Thing $var) {
   $this->SchemaArray["workLocation"] = $var->SchemaArray;
}

function getWorkLocation() {
   return $this->SchemaArray["workLocation"];
}

// WorksFor (of type Schema_Organization)
function setWorksFor(Schema_Organization $var) {
   $this->SchemaArray["worksFor"] = $var->SchemaArray;
}

function getWorksFor() {
   return $this->SchemaArray["worksFor"];
}

}

?>
