<?php
/*
 *PHP Library used for creating HTML tags
*/

include("class_filehandler_lib.php");

class Tag{

  /*variables needed to create tag*/
  protected $type;
  protected $content;
  protected $attributes;
  protected $fullTag;
  
  /*Automatically creates the tag based on the given parameters*/
  public function __construct($tagType, $tagAttributes, $tagContent){

    $this->type = $tagType;
    $this->attributes = $tagAttributes;
    $this->content = $tagContent;

    $this->set_tag($tagType, $tagAttributes, $tagContent);
    
  }
  
  
  /*The function that actually creates the tag. Uses a validator to make sure that the type of tag is supported*/
  public function set_tag($tagType, $tagAttributes, $tagContent){

    $validate = $this->tag_validation($tagType);

    /*Check to make sure that the tag type & attributes are valid*/
    if($this->attribute_validation($tagAttributes) && ($validate!='Error')){
      
      $tagOutput = "&lt".$tagType;
      
      /*Creates the section for the attributes*/ 
      foreach($tagAttributes as $key => $value){
	$tagAttributesOutput .= " ".$key."=>&#039".$value."&#039";
	//$tagAttributesOutput .= " ".$key.'=>&#039'.$value.'&#039';
      }
      
      
      /*Determines the type of tag to create based on validation function*/  
      switch($validate){
      case 'Normal':
	$tagOutput .= $tagAttributesOutput."&gt".$tagContent."&lt/".$tagType."&gt";
	break;
      case 'Special':
	$tagOutput .= "/&gt";
	break;
      }
      
      $this->fullTag = $tagOutput;
    }
  }
  
  /*Determines what type of tag the user has chosen. Also will display error if not a supported tag*/
  public function tag_validation($tagType){    
 
    //$validTags = array("!DOCTYPE", "a", "address", "article", "blockquote", "body", "br", "detail", "dfn", "div", "dl", "dt", "footer", "form", "h1", "h2", "h3", "h4", "h5", "h6", "head", "header", "HTML", "li", "link", "menu", "meta", "nav", "ol", "p", "section", "span", "style", "summary", "title", "ul");

   $validTags = array ("!--", "!DOCTYPE", "a", "abbr", "address", "area", "article", "aside", "audio", "b", "base", "bdo",
   "blockquote", "body", "br", "button", "canvas", "caption", "cite", "code", "col", "colgroup", "command", "datalist", "dd",
   "del", "details", "dfn", "div", "dl", "dt", "em", "embed", "fieldset", "figcaption", "figure", "footer", "form", "h1", "h2",
   "h3", "h4", "h5", "h6", "head", "header", "hgroup", "hr", "html", "i", "iframe", "img", "input", "ins", "keygen", "kbd",
   "label", "legend", "li", "link", "map", "mark", "menu", "meta", "meter", "nav", "noscript", "object", "ol", "optgroup",
   "option", "output", "p", "param", "pre", "progress", "q", "rp", "rt", "ruby", "s", "samp", "script", "section", "select",
   "small", "source", "span", "strong", "style", "sub", "summary", "sup", "table", "tbody", "td", "textarea", "tfoot", "th",
   "thead", "time", "title", "tr", "ul", "var", "video", "wbr" );

    $specialTags = array("!DOCTYPE", "br", "link", "meta", "img");
    
    /*Makes sure the tag is a valid tag then checks to see if it is a special tag*/
    if(in_array($tagType, $validTags) && in_array($tagType, $specialTags)){
      $tag = 'Special';
    }
    
    /*Just makes sure it is a valid tag*/
    else if(in_array($tagType, $validTags)){	  
      $tag = 'Normal';		
    }
    
    /*Error handling for invalid tags*/
    else{
      $tag = 'Error';
      $errorMessage = "Sorry ".$tagType." is not a valid tag";
      echo $errorMessage;
      echo "\n";
      
      $directory = getcwd();
      $errorLog = new ErrorFileHandler($directory);
      $errorLog->add_to_error_log($errorMessage);
}
    
    return $tag;
  }

  /*Makes sure that the attributes being added are valid strings*/
  public function attribute_validation($attribute){
    
    /*Checks each attribute individually to make sure it is a valid string*/
    foreach ($attribute as $value){
      
      $numbers = '0123456789';
      
      /*Checks to make sure the value is a string and that there are no numbers contained in the string*/
      if(!is_string($value) || (strcspn($value, $numbers) != strlen($value))){
	
	//echo "strcspn:".strcspn($value, $numbers)."  strlen:".strlen($value);
	$errorMessage = "Sorry ".$value." is not a valid attribute";
	echo $errorMessage;
	echo "\n";
	
	$directory = getcwd();
	$errorLog = new ErrorFileHandler($directory);
	$errorLog->add_to_error_log($errorMessage);
	
	return false;
	
      }	
    }

    return true;
  }
  
  public function get_tag(){
    return $this->fullTag;
  }
  
  public function get_tag_type(){
    return $this->type;
  }
  
  public function get_tag_attributes(){
    return $this->attributes;
  }
  
  public function get_tag_content(){
    return $this->content;
  }
  
}


?>
