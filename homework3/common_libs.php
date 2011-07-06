<?php

function __autoload($Class) {
        include "$Class.php";
}

function isURL($var) {
   return preg_match("/http:\/\/.+\..+/", $var);
}

function isDuration($var) {
   return (preg_match("/P[1-9]*[0-9]*Y?1?[01]?M?[1-2]?[0-9]?D?T[1-2]?[0-9]?H?[1-5]?[0-9]?M?[1-5]?[0-9]?S?/", $var) ||
           preg_match("/P[1-9]*[0-9]*Y?[2-9]?M?[1-2]?[0-9]?D?T[1-2]?[0-9]?H?[1-5]?[0-9]?M?[1-5]?[0-9]?S?/", $var));
}

function isDate($var) {
   return preg_match("/[12][0-9]{3}-[01][0-9]-[0-3][0-9]/", $var);
}

//recursive function to iterate through nested associative array
function loopThroughArray($myarray) {
      foreach ($myarray  as $key =>  $val) {
	      if(is_array($val)) {
                 loopThroughArray($val);
	      }
	      else {
                 print "$myarray->$key = $val\n";
	      }
      } 
}

?>
