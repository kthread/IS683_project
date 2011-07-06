<?php
 
include_once("common_libs.php");

class Schema_EducationalOrganization extends Schema_Organization {

// Alumni (of type Schema_Person)

function __construct() {
   parent::__construct();
   $this->SchemaArray["itemType"] = "http://schema.org/EducationalOrganization";
}

function setAlumni(Schema_Person $var) {
   $this->SchemaArray["alumni"] = $var->SchemaArray;
}

function getAlumni() {
   return $this->SchemaArray["alumni"];
}

}

?>
