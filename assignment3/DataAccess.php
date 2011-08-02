<?php
class DataAccess
{
    private $db;
    private $collection;
    private $class;
 
    public function __construct(MongoDb $db)
    {
        $this->db = $db;
    }

    private function setCollection(Thing $obj)
    {
       $this->class = get_class($obj);
       $this->collection = $this->db->{$this->class};
    }

    private function setRecipeCollection()
    {
       $this->class = Recipe;
       $this->collection = $this->db->{$this->class};
    }

    private function createObject(Thing $obj)
    {
       $this->class = get_class($obj);
       return new $this->class;
    }

    private function createRecipeObject()
    {
       $this->class = Recipe;
       return new $this->class;
    }

//retrieves an object which has been saved in database
function get_object(Thing $objIn) {

$id = $objIn->getId();
$this->setCollection($objIn);
$obj = $this->collection->findOne(array('_id' => new MongoId($id)));
$objOut = $this->createObject($objIn);

if(!isset($obj['_id'])) {
   throw new Exception('Id does not exist.');
} else {
   $objOut->setId($obj['_id']);
   switch ($this->class) {
       case "Recipe":
           if(isset($obj['ingredients'])) {
              $objOut->setIngredientsValue($obj['ingredients']);
           }
           if(isset($obj['cookTime'])) {
              $objOut->setCookTimeValue($obj['cookTime']);
           }
           if(isset($obj['prepTime'])) {
              $objOut->setPrepTimeValue($obj['prepTime']);
           }
           if(isset($obj['cookingMethod'])) {
              $objOut->setCookingMethodValue($obj['cookingMethod']);
           }
           if(isset($obj['recipeInstructions'])) {
              $objOut->setRecipeInstructionsValue($obj['recipeInstructions']);
           }
           if(isset($obj['recipeCategory'])) {
              $objOut->setRecipeCategoryValue($obj['recipeCategory']);
           }
       case "Creative_Works":
           if(isset($obj['about'])) {
              $objOut->setAboutValue($obj['about']);
           }
           if(isset($obj['aggregateRating'])) {
              $objOut->setAggregateRatingValue($obj['aggregateRating']);
           }
           if(isset($obj['author'])) {
              $objOut->setAuthorValue($obj['author']);
           }
       case "Thing":
           if(isset($obj['name'])) {
              $objOut->setNameValue($obj['name']);
           }
           if(isset($obj['url'])) {
              $objOut->setUrlValue($obj['url']);
           }
           if(isset($obj['image'])) {
              $objOut->setImageValue($obj['image']);
           }
           if(isset($obj['description'])) {
              $objOut->setDescriptionValue($obj['description']);
           }
   }
}

return $objOut;
}

//retrieves recipe(s) from database which matches title, description or ingredients criteria
function get_recipe($itempropType, $searchString) {

$this->setRecipeCollection();
$objs = array();
$objOuts = array();
if(($itempropType != "title") && ($itempropType != "description") && ($itempropType != "ingredients")) {
          throw new Exception('Have not chosen title, description or ingredients.');
} else {
          switch ($itempropType) {
              case "title":
                  $objs = $this->collection->find(array('name' => $searchString));
                  break;
              case "description":
                  $objs = $this->collection->find(array('description' => $searchString));
                  break;
              case "ingredients":
                  //$objs = $this->collection->find(array('ingredients' => ($regex : '$searchString', $options : 'i')));
                  //$objs = $this->collection->find(array('ingredients' => /{$searchString}/i));
                  $objs = $this->collection->find(array('ingredients' => $searchString));
                  break;
	  }

          foreach($objs as $obj) {
             $objOut = $this->createRecipeObject();
             
             if(!isset($obj['_id'])) {
                throw new Exception('Recipe object has no Id field.');
             } else {
                $objOut->setId($obj['_id']);
                if(isset($obj['ingredients'])) {
                   $objOut->setIngredientsValue($obj['ingredients']);
                }
                if(isset($obj['cookTime'])) {
                   $objOut->setCookTimeValue($obj['cookTime']);
                }
                if(isset($obj['prepTime'])) {
                   $objOut->setPrepTimeValue($obj['prepTime']);
                }
                if(isset($obj['cookingMethod'])) {
                   $objOut->setCookingMethodValue($obj['cookingMethod']);
                }
                if(isset($obj['recipeInstructions'])) {
                   $objOut->setRecipeInstructionsValue($obj['recipeInstructions']);
                }
                if(isset($obj['recipeCategory'])) {
                   $objOut->setRecipeCategoryValue($obj['recipeCategory']);
                }
                if(isset($obj['about'])) {
                   $objOut->setAboutValue($obj['about']);
                }
                if(isset($obj['aggregateRating'])) {
                   $objOut->setAggregateRatingValue($obj['aggregateRating']);
                }
                if(isset($obj['author'])) {
                   $objOut->setAuthorValue($obj['author']);
                }
                if(isset($obj['name'])) {
                   $objOut->setNameValue($obj['name']);
                }
                if(isset($obj['url'])) {
                   $objOut->setUrlValue($obj['url']);
                }
                if(isset($obj['image'])) {
                   $objOut->setImageValue($obj['image']);
                }
                if(isset($obj['description'])) {
                   $objOut->setDescriptionValue($obj['description']);
                }
             }
             $objOuts[] = $objOut;
          }
          return $objOuts;
}
}

//saves object
function save_object(Thing $objIn) {

$this->setCollection($objIn);
$obj = $this->prepare_array($objIn);
$theObjId = new MongoId($objIn->getId());
$this->collection->insert($obj);
}

//saves recipe
function save_recipe(Recipe $objIn) {

$this->setCollection($objIn);
$obj = $this->prepare_array($objIn);
$theObjId = new MongoId($objIn->getId());
$this->collection->insert($obj);
}

//updates recipe
function update_recipe($itempropType, $searchString, $replaceString) {

if(($itempropType != "title") && ($itempropType != "description") && ($itempropType != "ingredients")) {
          throw new Exception('Have not chosen title, description or ingredients to update.');
} else {
          $this->setCollection();
          switch ($itempropType) {
              case "title":
		  $criteria = array("name" => "$searchString");
		  $this->collection->update($criteria, array("$set" => array("name" => "$replaceString")));
                  //$this->collection->update({name: $searchString}, {$set: {name: $replaceString}}, false, true);
                  break;
              case "description":
		  $criteria = array("description" => "$searchString");
		  $this->collection->update($criteria, array("$set" => array("description" => "$replaceString")));
                  //$this->collection->update({description: $searchString}, {$set: {description: $replaceString}}, false, true);
                  break;
              case "ingredients":
		  $criteria = array("ingredients" => "$searchString");
		  $this->collection->update($criteria, array("$set" => array("ingredients" => "$replaceString")));
                  //$this->collection->update({ingredients: $searchString}, {$push: {ingredients: $replaceString}}, false, true);
                  break;
	  }
}
}

//gets a thing array to pass to mongo, it will error if you just pass in a $this because it can't access the private variables;
private function prepare_array($objIn) {

   switch ($this->class) {
       case "Recipe":
           $ingredientsValue = $objIn->getIngredientsValue();
           if(isset($ingredientsValue)) {
              $obj['ingredients'] = $ingredientsValue;
           }
           $cookTimeValue = $objIn->getCookTimeValue();
           if(isset($cookTimeValue)) {
              $obj['cookTime'] = $cookTimeValue;
           }
           $prepTimeValue = $objIn->getPrepTimeValue();
           if(isset($prepTimeValue)) {
              $obj['prepTime'] = $prepTimeValue;
           }
           $cookingMethodValue = $objIn->getCookingMethodValue();
           if(isset($cookingMethodValue)) {
              $obj['cookingMethod'] = $cookingMethodValue;
           }
           $recipeInstructionsValue = $objIn->getRecipeInstructionsValue();
           if(isset($recipeInstructionsValue)) {
              $obj['recipeInstructions'] = $recipeInstructionsValue;
           }
           $recipeCategoryValue = $objIn->getRecipeCategoryValue();
           if(isset($recipeCategoryValue)) {
              $obj['recipeCategory'] = $recipeCategoryValue;
           }
       case "Creative_Works":
           $aboutValue = $objIn->getAboutValue();
           if(isset($aboutValue)) {
              $obj['about'] = $aboutValue;
           }
           $aggregateRatingValue = $objIn->getAggregateRatingValue();
           if(isset($aggregateRatingValue)) {
              $obj['aggregateRating'] = $aggregateRatingValue;
           }
           $authorValue = $objIn->getAuthorValue();
           if(isset($authorValue)) {
              $obj['author'] = $authorValue;
           }
       case "Thing":
           $nameValue = $objIn->getNameValue();
           if(isset($nameValue)) {
              $obj['name'] = $nameValue;
           }
           $urlValue = $objIn->getUrlValue();
           if(isset($urlValue)) {
              $obj['url'] = $urlValue;
           }
           $imageValue = $objIn->getImageValue();
           if(isset($imageValue)) {
              $obj['image'] = $imageValue;
           }
           $descriptionValue = $objIn->getDescriptionValue();
           if(isset($descriptionValue)) {
              $obj['description'] = $descriptionValue;
           }
   }
   return $obj;
}

}
?>

