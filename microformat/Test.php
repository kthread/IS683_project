<?php
include("Tag.php");
include("Schema.php");
include("Thing.php");
include("Creative_Works.php");
include("Recipe.php");
/** Test block for Thing Schema **/
$thing = new Thing();

$thing->setNameValue('lego block');
$thing->setNameTag("span");
$thing->setNameAttributes('');


$thing->setUrlValue('http://www.lego.com');
$thing->setUrlTag('a');
$thing->setUrlAttributes('link');


$thing->setImageValue('http://www.mmocrunch.com/wp-content/uploads/2008/01/lego.jpg');
$thing->setImageTag('img');
$thing->setImageAttributes('picture');


$thing->setDescriptionValue('This is a small red lego block');
$thing->setDescriptionTag('span');
$thing->setDescriptionAttributes('text');


echo $thing->printHtml();

/** Test block for Creative_Works **/
$cr = new Creative_Works();

$cr->setAboutValue("Lego blocks");
$cr->setAboutTag("span");
$cr->setAboutAttributes('');

$cr->setAboutValue("Good");
$cr->setAuthorValue("John Smith");
echo $cr->printHtml();

/** recipe test block. Test program, not a good recipe to try **/
$r = new Recipe();
$r->setIngredientsValue("One Cup of Milk");
$r->setIngredientsTag('span');
$r->setCookingMethodTag('Baking');
$r->setRecipeCategoryValue('Desert');
$r->setCookTimeValue('5 minutes');
$r->setPrepTimeValue('1 minute');
$r->setRecipeInstructionsValue('Add Nesquik powder to warm milk.');
echo $r->printHtml();


?>
