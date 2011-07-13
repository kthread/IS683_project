<?php

class Schema extends Tag {

	/*** common print html tag functions (open and close) ***/
	function printItemScopeHtmlOpen($var){
		$tag = "<".'div'.' itemscope itemtype='.$var;
		return $tag;
	}
	
	function printItemScopeHtmlClose(){
		$tag = ">";
		return $tag;
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

}


?>
