<?php
//Current State: i updated this so that mongo saves the value attributes and not the hard coded attributes for an object. I made this decision, so that redundant tag, attribute, etc... data was not saved. The properties can be overriden at runtime and you could easily reverse this decision.

include("FileHandler.php");
include("ErrorFileHandler.php");
include("Tag.php");
include("Schema.php");
include("Thing.php");
include("Creative_Works.php");
include("Recipe.php");
include("DataAccess.php");

ini_set('display_errors', 'On');
//sets mongo db connection
$username = 'kwilliams';
$password = 'mongo1234';
$connection = new Mongo("mongodb://${username}:${password}@localhost/test",array("persist" => "x"));
//$connection = new Mongo("localhost:27017", array("persist" => "x"));

//sets the db and collection for the collection object, to change the db, just change the name, you don't need to create one and the same is for the collection. Thing of the collection as a table

$db = $connection->recipe;
$collection = $db->thing;

//instantiates a new thing object
$id = '4e1cdd501ce31e5e5f000001';

//thing getting an object on instantiation
$thing = new thing($id);

// This stuff is to test setting values for the thing object, it is commented out for now

$thing->setNameValue("lego block2");
$thing->setNameTag("h1");
$thing->setNameAttributes("some");

$thing->setUrlValue("http://www.lego.com");
$thing->setUrlTag('a');
$thing->setUrlAttributes('link');

$thing->setImageValue('http://www.mmocrunch.com/wp-content/uploads/2008/01/lego.jpg');
$thing->setImageTag('img');
$thing->setImageAttributes('picture');

$thing->setDescriptionValue('This is a small red lego block');
$thing->setDescriptionTag('span');
$thing->setDescriptionAttributes('text');

//Create new data access object
$dataAccess = new DataAccess($db);
//passes in the collection object and calls the save method, so you can manually save an object
$dataAccess->save_object($thing);
//

//retrieve thing object from database and assign to new thing object(duplicate)
$onething = $dataAccess->get_object($thing);
$print = var_dump(get_object_vars($onething));
echo("variables for object onething\n");
print_r($print);
echo("\n");

////$cursor = $collection->find(array('name.value' =>'lego block2'));
//$onething = $dataAccess->get_object($thing);
//
////asssigns a starting value to identify records
//
////this is an update criteria for a specific object that has a url value of 'lego 456', you need to specify the exact field you are updating in the document in the criteria and then the update
//$criteria = array('_id' => new MongoId('4e1bc0211ce31e4656000001'), 'url.value' => 'lego 456');
//$collection->update($criteria, array('$set' => array('url.value' => 'lego 4562')));
//
//
////this will delete a mongo object, the 2nd param TRUE is to ensure only one item is deleted, to test you need a new mongo id, this one has been deleted.
//$criteria_delete = array('_id' => new MongoId('4e1bbff81ce31efe54000001'));
//$collection->remove($criteria_delete, true );
////finds all the objects in collection;
//$cursor = $collection->find();
//$i = 0;
//
////itterates through the object
//foreach($cursor as $key => $value) {
//
//$o[$key] = (object) $value;
//$i = $i + 1;
//}
//print_r($o);
////outputs the object
//
//
////$print = var_dump(get_object_vars($thing));
//
////print_r($print);

?>

