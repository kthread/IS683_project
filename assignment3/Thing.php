<?php

class Thing extends Schema {

	private $name;
	private $url;
	private $image;
	private $description;
	private $itemtype;
	private $id; //mongo object id

        function __construct($id = null) {
           $this->itemtype->value = "http://www.schema.org/Thing";
	   $this->itemtype->attributes = array();
	   $this->name->attributes = array();
	   $this->url->attributes = array();
	   $this->image->attributes = array();
	   $this->description->attributes = array();

           $class = get_class($this);
           $this->setId($id);

           $this->description->tag->tagtype = 'span';
           $this->image->tag->tagtype = 'img';
           $this->url->tag->tagtype = 'a';
           $this->name->tag->tagtype = 'span';
           $this->description->form->fieldtype = 'text';
           $this->image->form->fieldtype = 'text';
           $this->url->form->fieldtype = 'text';
           $this->name->form->fieldtype = 'text';
           $this->name->tag->attributes['class'] = $class . ' tag ';
           $this->name->tag->attributes['itemprop'] = 'tag';
           $this->url->tag->attributes['class'] = $class . ' url ';
           $this->url->tag->attributes['itemprop'] = 'url';
           $this->image->tag->attributes['class'] = $class . ' image ';
           $this->image->tag->attributes['itemprop'] = 'image';
           $this->description->tag->attributes['class'] = $class . ' description ';
           $this->description->tag->attributes['itemprop'] = 'description';

        }

	function setItemTypeValue($var){
		$this->itemtype->value = $var;
	}

	function getItemTypeValue() {

		if(isset($this->itemtype->value))
		   return $this->itemtype->value;

	}

	function setId($var) {
	
	$this->id = $var;
	
	}
	
	function getId() {
	
	return $this->id;
	
	}

	function setItemTypeAttributes() {

		$this->itemtype->attributes['itemprop'] = 'itemtype';

	}
	
	function getItemTypeAttributes() {

		if(isset($this->itemtype->attributes)) {
		   return $this->itemtype->attributes;
		}

	}
	
	function setNameValue($var) {

		$this->name->value = $var;

	}

	function getNameValue() {

		if(isset($this->name->value)) {
		return $this->name->value;
		}

	}

	function setNameTag($var) {

		$this->name->tag = $var;

	}

	function getNameTag() {
		if(isset($this->name->tag)) {
		   if(strlen($this->name->tag) != 0){
			return $this->name->tag;
		   } else {
			return 'h1';
		   }
		} else {
		   return 'h1';
		}

	}
	function setNameAttributes($var) {
	  
		$class = get_class($this) . ' name ' . $var;
		$this->name->attributes['class'] = $class;
		$this->name->attributes['itemprop'] = 'name';
	}

	function getNameAttributes() {

		if(isset($this->name->attributes)) {
		   return $this->name->attributes;
		}

	}

	function setUrlValue($var) {

		$this->url->value = $var;

	}

	function getUrlValue() {

		if(isset($this->url->value)) {
		   return $this->url->value;
		}

	}

	function setUrlTag($var) {

		$this->url->tag = $var;

	}

	function getUrlTag() {
		if(isset($this->url->tag)) {
		   if(strlen($this->url->tag) != 0){
			return $this->url->tag;
		   } else {
			return 'a';
		   }
		} else {
		   return 'a';
		}
	}
	function setUrlAttributes($var) {
	  
		$class = get_class($this) . ' url ' . $var;
		$this->url->attributes['class'] = $class;
		$this->url->attributes['itemprop'] = 'url';
		$this->url->attributes['href'] = $this->getUrlValue();

	}

	function getUrlAttributes() {

		if(isset($this->url->attributes)) {
		   return $this->url->attributes;
		}

	}
	function setImageValue($var) {

		$this->image->value = $var;

	}

	function getImageValue() {

		if(isset($this->image->value)) {
		   return $this->image->value;
		}

	}

	function setImageTag($var) {

		$this->image->tag = $var;

	}

	function getImageTag() {
		if(isset($this->image->tag)) {
		   if(strlen($this->image->tag) != 0){
			return $this->image->tag;
		   } else {
			return 'img';
		   }
		} else {
		   return 'img';
		}
	}
	function setImageAttributes($var) {
		 
		$class = get_class($this) . ' image ' . $var;
		$this->image->attributes['class'] = $class;
		$this->image->attributes['itemprop'] = 'image';
		$this->image->attributes['src'] = '';

	}

	function getImageAttributes() {

		if(isset($this->image->attributes)) {
		   return $this->image->attributes;
		}

	}
	function setDescriptionValue($var) {

		$this->description->value = $var;

	}

	function getDescriptionValue() {

		if(isset($this->description->value)) {
		   return $this->description->value;
		}

	}

	function setDescriptionTag($var) {

		$this->description->tag = $var;

	}

	function getDescriptionTag() {

		if(isset($this->description->tag)) {
		   if(strlen($this->description->tag) != 0){
			return $this->description->tag;
		   } else {
			return 'span';
		   }
		} else {
		   return 'span';
		}

	}
	function setDescriptionAttributes($var) {
		 
		$class = get_class($this) . ' description ' . $var;
		$this->description->attributes['class'] = $class;
		$this->description->attributes['itemprop'] = 'description';

	}

	function getDescriptionAttributes() {

		if(isset($this->description->attributes)) {
		   return $this->description->attributes;
		}

	}

	function getDescriptionFormFieldType() {
	
		if(isset($this->description->form->fieldtype)) {
		   return $this->description->form->fieldtype;
		}
	
	}
	function setDescriptionFormFieldType($var) {
	
		$this->description->form->fieldtype = $var;
	
	}
	function getImageFormFieldType() {
	
		if(isset($this->image->form->fieldtype)) {
		   return $this->image->form->fieldtype;
		}
	
	}
	function setImageFormFieldType($var) {
	
		$this->image->form->fieldtype = $var;
	
	}
	function getUrlFormFieldType() {
	
		if(isset($this->url->form->fieldtype)) {
		   return $this->url->form->fieldtype;
		}
	
	}
	function setUrlFormFieldType($var) {
	
		$this->url->form->fieldtype = $var;
	
	}
	function getNameFormFieldType() {
	
		if(isset($this->name->form->fieldtype)) {
		   return $this->name->form->fieldtype;
		}
	
	}
	
	function setNameFormFieldType($var) {
	
		$this->name->form->fieldtype = $var;
	
	}

	private function printNameHtmlTag(){
		$tag = new Tag($this->getNameTag(), $this->getNameAttributes(), $this->getNameValue());
		return $tag->get_tag();
	}
	private function printUrlHtmlTag(){
		$tag = new Tag($this->getUrlTag(), $this->getUrlAttributes(), $this->getUrlValue());
		return $tag->get_tag();
	}
	private function printDescriptionHtmlTag(){
		$tag = new Tag($this->getDescriptionTag(), $this->getDescriptionAttributes(), $this->getDescriptionValue());
		return $tag->get_tag();
	}
	private function printImageHtmlTag(){
		$tag = new Tag($this->getImageTag(), $this->getImageAttributes(), $this->getImageValue());
		return $tag->get_tag();
	}

	function printHtml(){
		$html = $this->printItemScopeHtmlOpen($this->getItemTypeValue());
		$html = $html.$this->printItemScopeHtmlClose().'<br>';
		$html = $html.$this->printNameHtmlTag().'<br>';
		$html = $html.$this->printUrlHtmlTag().'<br>';
		$html = $html.$this->printDescriptionHtmlTag().'<br>';
		$html = $html.$this->printImageHtmlTag().'<br>';
		return $html;
	}

}

?>
