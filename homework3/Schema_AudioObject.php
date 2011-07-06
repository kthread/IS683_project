<?php
 
include_once("common_libs.php");

class Schema_AudioObject extends Schema_MediaObject {

function __construct() {
   parent::__construct();
   $this->SchemaArray["itemType"] = "http://schema.org/AudioObject";
}

}

?>
