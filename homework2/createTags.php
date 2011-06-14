<?php

include("class_tag_lib.php");

$tagType = "caption";
$content = "this is the caption";
$attribute1 = "class";
$attributeValue1 = "class_name";
$attribute2 = "accesskey";
$attributeValue2 = "a";
$attribute3 = "spellcheck";
$attributeValue3 = "true";


/*Creates an array then checks to make sure the values exist before
adding them to the array*/
$attributes = array();

if($attribute1 != ''){
$attributes[$attribute1] = $attributeValue1;
}
if($attribute2 != ''){
$attributes[$attribute2] = $attributeValue2;
}
if($attribute3 != ''){
$attributes[$attribute3] = $attributeValue3;
}

/*Creates the tag*/
$tag = new Tag($tagType, $attributes, $content);
echo $tag->get_tag();

?>
