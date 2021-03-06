<?php



class Tag{

function __autoload($classname){
	if(file_exists($class_name . '.php')) {
		require_once($class_name . '.php');
	} else {
		throw new Exception("Unable to load $class_name.");
	}
}
	/*variables needed to create tag*/
	protected $type;
	protected $content;
	protected $attributes;
	protected $fullTag;
	protected $logfile;
	protected $errorLog;

	/*Automatically creates the tag based on the given parameters*/
	function __construct($tagType, $tagAttributes, $tagContent){
		
		$this->type = $tagType;
		$this->attributes = $tagAttributes;
		$this->content = $tagContent;

		$this->set_tag($tagType, $tagAttributes, $tagContent);

	        $this->logfile = "errorLog.txt";
		$this->errorLog = new ErrorFileHandler($this->logfile);
	}


	/*The function that actually creates the tag. Uses a validator to make sure that the type of tag is supported*/
	function set_tag($tagType, $tagAttributes, $tagContent){
		if((strlen($tagType)==0 || strlen($tagContent) == 0)){
			return '';
		}

		$validate = $this->tag_validation($tagType);

		/*Check to make sure that the tag type & attributes are valid*/
		if($this->attribute_validation($tagAttributes) && ($validate!='Error')){

			$tagOutput = "<".$tagType;

			/*Creates the section for the attributes*/
			$tagAttributesOutput = "";
			foreach($tagAttributes as $key => $value){
				$tagAttributesOutput .= " ".$key.'='."'".$value."'";
			}


			/*Determines the type of tag to create based on validation function*/
			switch($validate){
				case 'Normal':
					$tagOutput .= $tagAttributesOutput.">".$tagContent."</".$tagType.">";
					break;
				case 'Special':
					$tagOutput .= "/>";
					break;
			}

			$this->fullTag = $tagOutput;
		}
	}

	/*Determines what type of tag the user has chosen. Also will display error if not a supported tag*/
	function tag_validation($tagType){

		$validTags = array("!DOCTYPE", "a", "address", "article", "blockquote", "body", "br", "detail", "dfn", "div", "dl", "dt", "footer", "form", "h1", "h2", "h3", "h4", "h5", "h6", "head", "header", "HTML", "li", "link", "menu", "meta", "nav", "ol", "p", "section", "span", "style", "summary", "title", "ul","img");
		$specialTags = array("!DOCTYPE", "br", "link", "meta");

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

			$this->errorLog->add_to_error_log($errorMessage);
						
		}

		return $tag;
	}

	/*Makes sure that the attributes being added are valid strings*/
	function attribute_validation($attribute){

		/*Checks each attribute individually to make sure it is a valid string*/
		foreach ($attribute as $value){

			$numbers = '0123456789';

			/*Checks to make sure the value is a string and that there are no numbers contained in the string*/
			if(!is_string($value) || (strcspn($value, $numbers) != strlen($value))){

				//echo "strcspn:".strcspn($value, $numbers)."  strlen:".strlen($value);
				$errorMessage = "Sorry ".$value." is not a valid attribute";
				echo $errorMessage;
				echo "\n";
				
				$this->errorLog->add_to_error_log($errorMessage);

				return false;

			}
		}

		return true;
	}

	function get_tag(){
		return $this->fullTag;
	}

	function get_tag_type(){
		return $this->type;
	}

	function get_tag_attributes(){
		return $this->attributes;
	}

	function get_tag_content(){
		return $this->content;
	}

}


?>
