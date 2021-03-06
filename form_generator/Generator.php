<?php

class Generator {

        function __construct() {
        }

        function generatePreface() {
           echo"<!DOCTYPE html PUBLIC \"-//W3C//DTD XHTML 1.0 Strict//EN\" ";
           echo"        \"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd\"> ";
           echo"<html xmlns=\"http://www.w3.org/1999/xhtml\" lang=\"en\" xml:lang=\"en\"> ";
           echo" ";
           echo"   <head> ";
           echo"    ";
           echo"      <title>Form Generator</title> ";
           echo"      <meta http-equiv=\"Content-Type\" content=\"text/html; charset=UTF-8\"/> ";
           echo"      <meta name=\"keywords\" content=\"Recipe Project\" /> ";
           echo"      <meta name=\"description\" content=\"This is a recipe website conforming to schema.org\" /> ";
           echo"      <meta name=\"author\" content=\"Kevin Threadgill\" /> ";
           echo"      <link rev=\"made\" href=\"kt58@njit.edu\" /> ";
           echo"    ";
           echo"      <link rel=\"stylesheet\" type=\"text/css\" href=\"formGenerator.css\" /> ";
           echo"   </head> ";
           echo"    ";
           echo"   <body> ";
        }

        function generateBanner() {
           echo"      <div id=\"banner\">NJIT Recipe World</div>\n";
        }

        function generatePrimaryLinks() {
           echo"      <div id=\"primaryLinks\"> ";
           echo"         <ul class=\"horizontal\"> ";
           echo"         <li class=\"horizontal\"><a class=\"navHorLink\" href=\"#home\">Home</a></li> ";
           echo"         <li class=\"horizontal\"><a class=\"navHorLink\" href=\"#news\">News</a></li> ";
           echo"         <li class=\"horizontal\"><a class=\"navHorLink\" href=\"#contact\">Contact</a></li> ";
           echo"         <li class=\"horizontal\"><a class=\"navHorLink\" href=\"#about\">About</a></li> ";
           echo"         </ul> ";
           echo"      </div> ";
        }

        function generateSecondaryLinks() {
           echo "      <div id=\"secondaryLinks\"> ";
           echo "         <ul class=\"horizontal\"> ";
           echo "         <li class=\"horizontal\"><a class=\"navHorLink\" href=\"createRecipe.php\">Create Recipe</a></li> ";
           echo "         <li class=\"horizontal\"><a class=\"navHorLink\" href=\"retrieveRecipe.php\">Retrieve Recipe</a></li> ";
           echo "         <li class=\"horizontal\"><a class=\"navHorLink\" href=\"updateRecipe.php\">Update Recipe</a></li> ";
           echo "         <li class=\"horizontal\"><a class=\"navHorLink\" href=\"deleteRecipe.php\">Delete Recipe</a></li> ";
           echo "         </ul> ";
           echo "      </div> ";
        }

        function generateHomeColumn() {
           echo"      <div id=\"container\"> ";
           echo"        <div id=\"center\" class=\"column\"> ";
           echo"           <p>A generic picture of a recipe can be included here for the homepage.</p>\n";
           echo"        </div> ";
        }

        function generateCreateColumn() {
           echo"      <div id=\"container\"> ";
           echo"        <div id=\"center\" class=\"column\"> ";
           echo"           <p>This is where the create recipe form would be placed. Text boxes for all of the attributes of a recipe would be listed, and upon submission a recipe object would be created with the entered attributes. That recipe object would then be entered into the database. Oh, and you would want to add a texbox for the \"_id\" attribute as well since this is needed to create the object for insertion into the database.</p> ";
           echo"        </div> ";
        }

        function generateRetrieveColumn() {
           echo"      <div id=\"container\"> ";
           echo"        <div id=\"center\" class=\"column\"> ";
           echo"           <p>This is where the retrieve recipe form would be placed. Radio boxes would be listed for all of the recipe attributes to select the attribute criteria that would be searched for retrieval. A text box would be added for inputting the search string.</p> ";
           echo"        </div> ";
        }

        function generateUpdateColumn() {
           echo"      <div id=\"container\"> ";
           echo"        <div id=\"center\" class=\"column\"> ";
           echo"           <p>This is where the update recipe form would be placed. Radio boxes would be listed for all of the recipe attributes to select the attribute that would be updated. A text box would be added for inputting the update string.</p> ";
           echo"        </div> ";
        }

        function generateDeleteColumn() {
           echo"      <div id=\"container\"> ";
           echo"        <div id=\"center\" class=\"column\"> ";
           echo"           <p>This is where the retrieve recipe form would be placed. Radio boxes would be listed for all of the recipe attributes to select the attribute criteria that would be searched for deletion. A text box would be added for inputting the search string.</p> ";
           echo"        </div> ";
        }

        function generateLeftColumn() {
           echo"        <div id=\"left\" class=\"column\"> ";
           echo"           <ul> ";
           echo"           <li><a class=\"navLink\" href=\"#barbecue\">Barbecue</a></li> ";
           echo"           <li><a class=\"navLink\" href=\"#southwestern\">Southwestern</a></li> ";
           echo"           <li><a class=\"navLink\" href=\"#seafood\">Seafood</a></li> ";
           echo"           <li><a class=\"navLink\" href=\"#italian\">Italian</a></li> ";
           echo"           </ul> ";
           echo"        </div> ";
        }

        function generateRightColumn() {
           echo"        <div id=\"right\" class=\"column\"> ";
           echo"           <ul> ";
           echo"           <li><a class=\"navLink\" href=\"#chinese\">Chinese</a></li> ";
           echo"           <li><a class=\"navLink\" href=\"#mexican\">Mexican</a></li> ";
           echo"           <li><a class=\"navLink\" href=\"#low calorie\">Low Calorie</a></li> ";
           echo"           <li><a class=\"navLink\" href=\"#quick dishes\">Quick Dishes</a></li> ";
           echo"           </ul> ";
           echo"        </div> ";
           echo"       ";
           echo"      </div> ";
        }

        function generateFooter() {
          echo"      <div id=\"footer\">This is the footer </div> ";
          echo"	    ";
          echo"   </body> ";
          echo"</html> ";
        }

        function createHome() {
            $this->generatePreface();
            $this->generateBanner();
            $this->generatePrimaryLinks();
            $this->generateSecondaryLinks();
            $this->generateHomeColumn();
            $this->generateLeftColumn();
            $this->generateRightColumn();
            $this->generateFooter();
        }

        function createRecipe() {
            $this->generatePreface();
            $this->generateBanner();
            $this->generatePrimaryLinks();
            $this->generateSecondaryLinks();
            $this->generateCreateColumn();
            $this->generateLeftColumn();
            $this->generateRightColumn();
            $this->generateFooter();
        }

        function retrieveRecipe() {
            $this->generatePreface();
            $this->generateBanner();
            $this->generatePrimaryLinks();
            $this->generateSecondaryLinks();
            $this->generateRetrieveColumn();
            $this->generateLeftColumn();
            $this->generateRightColumn();
            $this->generateFooter();
        }

        function updateRecipe() {
            $this->generatePreface();
            $this->generateBanner();
            $this->generatePrimaryLinks();
            $this->generateSecondaryLinks();
            $this->generateUpdateColumn();
            $this->generateLeftColumn();
            $this->generateRightColumn();
            $this->generateFooter();
        }

        function deleteRecipe() {
            $this->generatePreface();
            $this->generateBanner();
            $this->generatePrimaryLinks();
            $this->generateSecondaryLinks();
            $this->generateDeleteColumn();
            $this->generateLeftColumn();
            $this->generateRightColumn();
            $this->generateFooter();
        }

}

?>
